<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
    	$this->load->view("Login_view");
        $user = $this->input->post('username');  
        $pass = $this->input->post('password');
        $this->load->model('dynamic_model');
          
		if(isset($_POST['submit']))
		{    $data1 = $this->dynamic_model->checkpass($user,$pass);
			 $data = $this->dynamic_model->checkuserexist($user);
			if($this->dynamic_model->checkuserexist($user) == true)
			{
				$this->session->set_flashdata('error','Email Id is Not exist');
               redirect(base_url()."Auth/Login");
			}
			if($this->dynamic_model->checkpass($user,$pass) == true)
			{
				$this->session->set_flashdata('error','Please Enter Correct Password');
               redirect(base_url()."Auth/Login");
			}
		$result = $this->db->query("select * from users where email = ? and password = ?",array($user,$pass));
        
		if($result->num_rows() == 1)
		{
           

			$Id =  $result->row(0)->Id;
			
			$user_name =  $result->row(0)->user_name;
			$email = $result->row(0)->email;
			$mobile_number = $result->row(0)->mobile_number;
			$user_type = $result->row(0)->user_type;
			$password = $result->row(0)->password;
			
			//print_r($Id);exit;
			
			
			$this->session->set_userdata("user_name",$user_name);//Session Data Set
			$this->session->set_userdata("Id",$Id);

			$this->session->set_userdata("mobile_no",$mobile_no);
			$this->session->set_userdata("email",$email);
			$this->session->set_userdata("user_type",$user_type);
			$this->session->set_userdata("mobile_number",$mobile_number);
			$this->session->set_userdata("DateTime",$DateTime);
			$this->session->set_userdata("emailid",$emailid);
		         
		        $this->session->set_flashdata("type", "success");
				$this->session->set_flashdata("message1", "Login Successfully");
				
				redirect(base_url()."Dash");	
			}
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
    redirect('Auth/Login'); 
    }  

}