<?php
class Excel_import_model extends CI_Model
{
	
	function insert_excel_data($data)
	{
		$this->db->insert('excelsheet_dates', $data);
	}
}
