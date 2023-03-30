<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Unit extends CI_Controller {

	
	public function index()
	{
		$view_data["data"] = $this->db->query("select * from tbl_unit order by unit_name");
		$this->template->load('master_file', 'Unit_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdateUnit()
	{
		
		
		$view_data["message"]  = "";
		$datetime=$this->common->getDate();

		if(isset($_POST['unit_name']))
		{
            
			$unit_name = $this->input->post('unit_name');
			$unit_symbol = $this->input->post('unit_symbol');
			$decimal = $this->input->post('decimal1');
            
		
             
            
              
             if($this->input->post('btnSubmit') == "Submit" ) 
             {
					$query = $this->db->query("INSERT INTO tbl_unit(unit_name,unit_symbol,decimal1,user_id,Active,Deleted,DateTime) values(?,?,?,?,?,?,?)",array($unit_name,$unit_symbol,$decimal,1,0,0,$this->common->getDate()));

					$view_data["message"]  = "Unit Created Successfully";

					$this->session->set_flashdata("message","Unit Created Successfully");
             }
             else 
             {
             
            
             	    $hidid = $this->input->post("hidid");
					// echo $hidid;exit;
					$query = $this->db->query("update tbl_unit set unit_name = ?, unit_symbol = ?, decimal1 = ?, user_id = ? where id = ?",array($unit_name,$unit_symbol,$decimal,1,$hidid));
					//$view_data["message"]  = "Company Name Updated Successfully";
					$this->session->set_flashdata("message","User Updated Successfully");
             }
            
         

         

		}
		redirect(base_url()."Unit");
	}
	public function deleteUnit()
	{
		        $id=$this->input->get('id');
			    $query = $this->db->query("delete from tbl_unit where id=$id");
                      
				redirect(base_url()."Unit");
	}
		
		
		
	}
	

