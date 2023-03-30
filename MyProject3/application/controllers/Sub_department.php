<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sub_department extends CI_Controller {

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
		
        $view_data['Decategory_name'] = $this->dynamic_model->get_dep_category();
		$view_data["data"] = $this->db->query("select * from sub_dep_cost_center order by sub_Dep_cost_Name	");
		$this->template->load('master_file', 'Sub-department_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdatesubdep()
	{
		
		
		$view_data["message"]  = "";
		if(isset($_POST['sub_department_name']))
		{
            
			$subdepartment_name = $this->input->post('sub_department_name');
			$department_cat = $this->input->post('department_cat');
			$datetime=$this->common->getDate();
			
			
             if($this->input->post('btnSubmit') == "Submit")
             {
					

					  $query = $this->db->query("INSERT INTO sub_dep_cost_center(sub_Dep_cost_Name,Dep_cost_category,user_id,Active,Deleted,DateTime) values(?,?,?,?,?,?)",array($subdepartment_name,$department_cat,1,1,0,$this->common->getDate()));


					

					$this->session->set_flashdata("message","Sub Department Created Successfully");
             }
             else 
             {   
                 
             	  if($this->input->post('btnSubmit') == "Update")
             	  
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update sub_dep_cost_center set  sub_Dep_cost_Name = ?, Dep_cost_category = ?  where Id = ?",array($subdepartment_name,$department_cat,$hidid));
					$this->session->set_flashdata("message","Sub Department  Updated Successfully");
             }

		}
		
		redirect(base_url()."Sub_department");
		
	}
	public function deleteSub_department()
	{
		         $id=$this->input->get('id');		      
		          $query = $this->db->query("delete from sub_dep_cost_center where id=$id");
				  $this->session->set_flashdata("message","Sub Department  Deleted Successfully");
		          redirect(base_url()."Sub_department");
	}
	
}
