<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


	 function __construct()
	 {
		 parent::__construct();
		 $this->clear_cache();
	 }
 
	 function clear_cache()
	 {
		 header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
		 header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
		 header('Cache-Control: post-check=0, pre-check=0', FALSE);
		 header('Pragma: no-cache');
	 }
 
	public function index()
	{
		$this->load->view("Login_view");
	}
	
    public function process()  
    {  
    	//print_r($this->input->post());exit;
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
		
		$result = $this->db->query("select * from tblusers where emailid = ? and password = ?",array($user,$pass));
		if($result->num_rows() == 1)
		{
			
			
			$ID =  $result->row(0)->Id;
			
			$Name =  $result->row(0)->Name;
			$mobile_no = $result->row(0)->mobile_no;
			$emailid = $result->row(0)->emailid;
			$user_type = $result->row(0)->user_type;
			$address = $result->row(0)->address;
			$company_id = $result->row(0)->company_id;
			$DateTime = $result->row(0)->DateTime;
			//$user_type = $result->row(0)->emailid;
			//echo $user_type;exit;
			
			
			
			$this->session->set_userdata("Name",$Name);//Session Data Set
			$this->session->set_userdata("user_id",$ID);

			$this->session->set_userdata("mobile_no",$mobile_no);
			$this->session->set_userdata("emailid",$emailid);
			$this->session->set_userdata("user_type",$user_type);
			$this->session->set_userdata("company_id",$company_id);
			$this->session->set_userdata("DateTime",$DateTime);
			$this->session->set_userdata("emailid",$emailid);
		
			if($user_type == "Admin")
			{
				redirect('Dash');	
			}
			else if($user_type == "Employee")
			{
			   	  redirect('EMP/Dash');
			}
			
		}
		else
		{
			$data['error'] = 'Your Account is Invalid';  
            $this->load->view('login_view', $data);  
		}
          
    }  
	public function Register()  
    {  
        $user = $this->input->post('user');  
        $pass = $this->input->post('pass');  
		
		$result = $this->db->query("select * from tblusers where Email = ? and Password = ?",array($user,$pass));
		if($result->num_rows() == 1)
		{
			
			$id =  $result->row(0)->id;//Variable Data Assing
			$FirstName =  $result->row(0)->FirstName;
			$LastName =  $result->row(0)->LastName;
			$Email =  $result->row(0)->Email;
			$PostingDate =  $result->row(0)->PostingDate;
			
			$this->session->set_userdata("FirstName",$FirstName);//Session Data Set
			 
            redirect("Dash?name=".$id) ;//Parameter Pass
		}
		else
		{
			$data['error'] = 'Your Account is Invalid';  
            $this->load->view('login_view', $data);  
		}
          
    }  
    public function logout()  
    {  
        //removing session  
        $user_data = $this->session->all_userdata();
        foreach ($user_data as $key => $value) {
            if ($key != 'session_id' && $key != 'ip_address' && $key != 'user_agent' && $key != 'last_activity') {
                $this->session->unset_userdata($key);
            }
        }
    $this->session->sess_destroy();
    redirect('Login'); 
    }  
}
