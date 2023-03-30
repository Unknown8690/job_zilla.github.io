<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

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
		$view_data["data"] = $this->db->query("select * from tblusers where user_type ='Employee' order by Name");
		$this->template->load('master_file', 'User_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addUser()
	{
		
		
		$view_data["message"]  = "";
		    $datetime=$this->common->getDate();
			$Name = $this->input->post('user_name');
			$mobile_no = $this->input->post('mobile');
			$password = $this->input->post('password');
			$email = $this->input->post('email');
			$this->load->model('dynamic_model');
			$data = $this->dynamic_model->checkemailexist($email);
			$user_type = $this->input->post('user_type');
 
   
   		
        if($this->input->post('btnSubmit') == "Submit" )
        {
  
  			if ($this->dynamic_model->checkemailexist($email) == true)
	   		{
	   	       $this->session->set_flashdata('message','Email id is already exist');
	           redirect(base_url()."User");
	           return false;
	          
	        }
              	$query = $this->db->query("INSERT INTO tblusers(Name,mobile_no,password,emailid,user_type,address,company_id,alt_voucher_allow,authoriz_level,status,Deleted,Datetime,ipaddress) values(?,?,?,?,?,?,?,?,?,?,?,?,?)",array($Name,$mobile_no,$password,$email,$user_type,0,1,0,0,0,0,$this->common->getDate(),0));

					$view_data["message"]  = "User Created Successfully";

					$this->session->set_flashdata("message","User Created Successfully");
             }
             else 
             {
             	
             }
              if($this->input->post('btnSubmit') == "Update")
             {     
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update tblusers set Name = ?, mobile_no = ?, password = ?, emailid = ?, user_type = ? where Id = ?",array($Name,$mobile_no,$password,$email,$user_type,$hidid));
				    
					$this->session->set_flashdata("message","User Updated Successfully");
             }
             else {
             	
             	 
             }
         

         

		
	

		
		redirect(base_url()."User");
		
	}
	public function deleteUser()
			{
			
				$id=$this->input->get('id');
			      
			      $query = $this->db->query("delete from tblusers where Id=$id");
				  $this->session->set_flashdata("message","User Deleted Successfully");
				 redirect(base_url()."User");
			}
	
}
