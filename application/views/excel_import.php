                                    <?php
                                                                                    
                                              $this->db->select("*");
                                           
                                              $result=$this->db->get('excelsheet_dates');
                                              $details = $result->result();
                                              //print_r($words_details);
                                                                                     
                                       ?>





<!DOCTYPE html>
<html>
<head>
	<title> Excel Data into Mysql in Codeigniter</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>asset/bootstrap.min.css" />
	<script src="<?php echo base_url(); ?>asset/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>asset/jquery.validate.js"></script>

</head>

<body>
	<div class="container">
		<br />

                     <?php if($error= $this->session->flashdata('wodrs_details')):  ?>

                         <div  style="width:50%; height:20%; font-weight:bold;" class="alert alert-danger alert-dismissible fade show ">
                         <button type="button" class="close" data-dismiss="alert">&times;</button>

                        <?php  echo $error; ?>

                        </div>

                         <?php endif; ?>


		<h3 style="text-align:center;">How to Import Excel Data into Mysql in Codeigniter</h3>

				<form  name="validate"  action="javascript:"  method="post" enctype="multipart/form-data">
                      <p><label>Select Excel File</label>
                      <input type="file" name="file"  accept=".xls, .xlsx" /></p>
                      <br />
                      <input type="submit"  value="Import" onclick="return check_form()"  class="btn btn-success" />

              </form>
<br><br>

		</div>
	</div>
</body>
</html>



<table  class="table table-striped table-bordered" style="width:100%">
      <thead>
            <tr>
                <th>id</th>
                <th>Categories</th>
                <th>Sub Categories</th>
                <th>Words in Tamil</th>
                <th>Audio in Tamil</th>
                <th>Words in english</th>
                <th>Audio in English</th>               
              
            </tr>
        </thead>

        <tbody>
      
                                        <?php  if(count($details)): ?>

                                       
                                                 <?php foreach($details as $detail):  ?>    

                                                   
                                            <tr>
                                                <td><?php  echo $detail->id; ?></td>
                                                <td><?php  echo $detail->categories; ?></td>
                                                <td><?php  echo $detail->sub_categories; ?></td>
                                                <td><?php  echo $detail->words_tamil; ?></td>
                                                <td><?php  echo $detail->audio_tamil; ?></td>
                                                <td><?php  echo $detail->words_english; ?></td>
												<td><?php  echo $detail->words_english; ?></td>                                                                                                                                      
                                           </tr>


                                       <?php  endforeach; ?>    
                                       <?php else : ?>

                                        <tr> no records!</tr>

                                       <?php endif; ?> 
                                 
                                   

        </tbody>

    </table>
























<script>
function check_form(){

  $("form[name='validate']").validate({
	// Specify validation rules
	
    rules: {
      file: "required"
	},
    messages: {

      file: "<div style='color:red; font-weight:bold;'>Choose Excel file</div>"
      
	},
	
    submitHandler: function(form) {
     
      form.action='<?php echo base_url();?>Excel_import/import_excel';
     form.submit();
    }
  });
}
</script>







