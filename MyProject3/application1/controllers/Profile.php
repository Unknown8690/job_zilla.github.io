<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
		$this->load->model("Profile_model");
		$userid="";
		$userid=$this->session->userdata("Email");
		if(isset($_GET["ID"]))
		{
			$userid= trim($this->input->get("ID"));
			
		}
			$view_data['cities'] = $this->Profile_model->getCity();
			$result = $this->db->query("select * from tblusers where Email= ?",array($userid));
			$view_data["data"] = $result;
			$view_data["MESSAGE"] = "Welcome To My Admin Panel";
			$this->template->load('master_file', 'Profile_view',$view_data,false,"Profile_header.php","Profile_footer.php");
		
		// get cities
		
		
		
	} 
	  public function Process()
	  {  
	  //print_r($this->input->post());exit;
	  //$this->db->db_debug = TRUE;
	  $userid = $this->input->post("hidid");
	  if($userid == "")
	  {
		  $userid=$this->session->userdata("Email");
		  $fname = trim($this->input->post('fname'));  
		  $lname = trim($this->input->post('lname'));
		   $useridp = trim($this->input->post('UserID'));  
		  $password = trim($this->input->post('Password'));  
		  $date = $this->common->getDate();
		  $drpcity = trim($this->input->post('drpcity')); 
			  $gender=$this->input->post('gender');
			  
			  $result = $this->db->query("update tblusers set FirstName=?,LastName=?,Email=?,Password=?,PostingDate=?,CityID=?,gender=? where Email= ? ",array($fname,$lname,$useridp,$password,$date,$drpcity,$gender,$userid));
			  if($result == true)
			  {	
					  redirect(base_url()."Profile");
			  }
	  }
	  else
	  {
		  $fname = trim($this->input->post('fname'));  
		  $lname = trim($this->input->post('lname'));
		   $useridp = trim($this->input->post('UserID'));  
		  $password = trim($this->input->post('Password'));  
		  $date = $this->common->getDate();
		  $drpcity = trim($this->input->post('drpcity')); 
		  $gender=$this->input->post('gender');
		  
		  $result = $this->db->query("update tblusers set FirstName=?,LastName=?,Email=?,Password=?,PostingDate=?,CityID=?,gender=? where Email= ? ",array($fname,$lname,$useridp,$password,$date,$drpcity,$gender,$userid));
		  
		  if($result == true)
		  {
				  redirect(base_url()."Profile?ID=".$userid);
		  }
	  }
	  
	  
		  
		  
		  
		  
		  
			
	  }  
   
}
