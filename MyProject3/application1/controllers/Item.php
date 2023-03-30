<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Item extends CI_Controller {

	public function index()
	{   
        $this->load->model('dynamic_model');

		$view_data['unit_name'] = $this->dynamic_model->fetch_unit();
		$view_data["data"] = $this->db->query("select * from tbl_item order by item_Name");
		$this->template->load('master_file', 'item_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdateItem()
	{
		
		
		$view_data["message"]  = "";
		$datetime=$this->common->getDate();
		// print_r($_POST);
		// exit;
		if(isset($_POST['item_name']))
		{
            
			$item_name = $this->input->post('item_name');
			
			$unit_id = $this->input->post('unit_name');
			// echo $unit_id;
			// exit;

             if($this->input->post('btnSubmit') == "Submit")
             {
					$query = $this->db->query("INSERT INTO tbl_item(item_Name,unit_Id,user_id,Deleted,DateTime) values(?,?,?,?,?)",array($item_name,$unit_id,1,0,$this->common->getDate()));
					$view_data["message"]  = "Item  Inserted Successfully";
					$this->session->set_flashdata("message","Item Inserted Successfully");
             }
             else 
             {   
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update tbl_item set item_Name = ?,unit_Id = ? where id = ?",array($item_name,$unit_id,$hidid));
					$this->session->set_flashdata("message","Item  Updated Successfully");
             }


			 
         
		}
		
		redirect(base_url()."Item");
		
	}
	public function deleteItem()
	{
	            $id=$this->input->get('id');
			      
			      $query = $this->db->query("delete from tbl_item where id=$id");
				  $this->session->set_flashdata("message","Item  Deleted Successfully");
				redirect(base_url()."Item");

	
	}
	
	
	}
