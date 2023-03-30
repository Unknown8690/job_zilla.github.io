<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{   
        $this->load->model('dynamic_model');
		
        $view_data['state_name'] = $this->dynamic_model->fetch_state();
		$view_data['unit_name'] = $this->dynamic_model->fetch_unit();
		$view_data["data"] = $this->db->query("select * from department_category order by Decategory_name");
		$this->template->load('master_file', 'Department_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdateDepartment()
	{
		
		
		$view_data["message"]  = "";
		if(isset($_POST['department_name']))
		{
            
			$department_name = $this->input->post('department_name');
			$department_code = $this->input->post('department_code');
		
			
			
             if($this->input->post('btnSubmit') == "Submit")
             {
					

					  $query = $this->db->query("INSERT INTO department_category(Decategory_code,Decategory_name,user_id,Active,Deleted,DateTime) values(?,?,?,?,?,?)",array($department_code,$department_name,1,1,0,$this->common->getDate()));


					 

					$this->session->set_flashdata("message","Department Created Successfully");
             }
             else 
             {   
                 
             	  if($this->input->post('btnSubmit') == "Update")
             	  
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update department_category set  Decategory_code = ?, Decategory_name  = ? where id = ?",array($department_code,$department_name,$hidid));
					$this->session->set_flashdata("message","Department  Updated Successfully");
             }

		}
		
		redirect(base_url()."Department");
		
	}
	public function deleteDepartment()
	{
	
		$id=$this->input->get('id');
		  
		  $query = $this->db->query("delete from department_category where id=$id");
		  $this->session->set_flashdata("message","Department  Deleted Successfully");
		   redirect(base_url()."Department");
	}
	
}
