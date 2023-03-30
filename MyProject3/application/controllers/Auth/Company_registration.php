<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_registration extends CI_Controller {

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
		$this->load->view("Company_registration_view");
	}
	
    public function process()  
    {  
           
    	if(isset($_POST['btnsubmit']))
    	{
    	 
        $user = $this->input->post('username'); 
        $email = $this->input->post('email'); 
        $pass = $this->input->post('password');  
        $this->load->model('dynamic_model');
        $data = $this->dynamic_model->checkcompanyexist($email);
        if($this->dynamic_model->checkcompanyexist($email) == false)
		 	{
               $this->session->set_flashdata('error','Email Id is already exist');
               redirect(base_url()."Auth/Company_registration");
		 	}
		$query = $this->db->query("INSERT INTO tblcompanys(company_name,password,email,mobile,user_type,create_at) values(?,?,?,?,?,?)", array($user,$pass,$email,0,'company',$this->common->getDate()));


		if($query == true)
		{        $this->session->set_flashdata("message", "Registration Successfully");	
				redirect(base_url()."Auth/Company_login");
				
			}
		else
		{
		
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
    redirect('Auth/Company_login'); 
    }  

}