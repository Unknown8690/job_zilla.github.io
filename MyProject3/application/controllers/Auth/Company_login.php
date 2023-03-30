<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_login extends CI_Controller {

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
		$this->load->view("Company_login");
	}
	
    public function process()  
    {  
    	$this->load->view("Company_login");
    	
        $user = $this->input->post('company_name');  
        $pass = $this->input->post('password');  
		//print_r($user);exit;
		$this->load->model('dynamic_model');
		if(isset($_POST['submit']))
		{    $data1 = $this->dynamic_model->checkcompanypass($user,$pass);
			 $data = $this->dynamic_model->checkcompanyexist($user);
			if($this->dynamic_model->checkcompanyexist($user) == true)
			{
				$this->session->set_flashdata('error','Email Id is Not exist');
               redirect(base_url()."Auth/Company_login");
			}
			if($this->dynamic_model->checkcompanypass($user,$pass) == true)
			{
				$this->session->set_flashdata('error','Please Enter Correct Password');
               redirect(base_url()."Auth/Login");
			}

		$result = $this->db->query("select * from tblcompanys where email = ? and password = ?",array($user,$pass));
         
		if($result->num_rows() == 1)
		{     



			$Id =  $result->row(0)->Id;
		
			
			$company_name = $result->row(0)->company_name;
			//print_r($company_name);exit;
			$email = $result->row(0)->email;
			$mobile = $result->row(0)->mobile;
			$user_type = $result->row(0)->user_type;
			$password = $result->row(0)->password;
			$level = $result->row(0)->level;
			
			$this->session->set_userdata("company_name",$company_name);
			$this->session->set_userdata("company_id",$Id);
			$this->session->set_userdata("user_typecompany",$user_type);
			$this->session->set_userdata("level",$level);
			   if($this->session->userdata("level") == "1")
			   {
                   redirect(base_url()."EMP/User");
			   }
			   else
			   {
				redirect(base_url()."EMP/Dash");
				}	
			}
		}
		else
		{
		
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
    redirect('Auth/Company_login'); 
    }  

}