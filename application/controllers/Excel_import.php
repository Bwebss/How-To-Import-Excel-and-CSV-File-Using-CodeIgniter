<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Excel_import extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('excel_import_model');
		$this->load->library('excel');
	}

	function index()
	{
		$this->load->view('excel_import');
	}
	
	public function import_excel(){
                                                  

		$this->load->library('excel');

		if(isset($_FILES["file"]["name"]))
		{
		  $path = $_FILES["file"]["tmp_name"];
		  $object = PHPExcel_IOFactory::load($path);
		  foreach($object->getWorksheetIterator() as $worksheet)
		  {
			$highestRow = $worksheet->getHighestRow();

			//print_r($highestRow);exit();
			$highestColumn = $worksheet->getHighestColumn();
			for($row=2; $row<=$highestRow; $row++)
			{
			  $categories = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
			  $sub_categories = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
			  $words_tamil = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
			  $audio_tamil = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
			  $words_english = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
			  $audio_english = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
		   
				$data['categories']=$categories;
				$data['sub_categories']=$sub_categories;
				$data['words_tamil']=$words_tamil;
				$data['audio_tamil']=$audio_tamil;
				$data['words_english']=$words_english;
				$data['audio_english']=$audio_english;                                                          
		   

				$this->load->model('excel_import_model');
				$status=$this->excel_import_model->insert_excel_data($data);   

				$insert_id = $this->db->insert_id();  /*------Get lasted inserted id*/

				mkdir('./audio_uploads/'. $insert_id, 0777, true);   /*----Create folder with folder name is last id value in uploads folder*/

			}
		  }

		  if($status == true){


			$this->session->set_flashdata('wodrs_details','Details added Successfully');
			return redirect('Excel_import');	                       
		
		}else {

		
			$this->session->set_flashdata('wodrs','Words_details not added...Please Try Again!!!!!!...');
			$this->load->view('Excel_import');
		  
										
		}                                                        
 }	

}

     

}

?>