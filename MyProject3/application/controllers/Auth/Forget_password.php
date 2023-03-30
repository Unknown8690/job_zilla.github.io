<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Forget_password extends CI_Controller {
 
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
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('email');
		$this->load->library('encryption');
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
		$this->load->view("Forget_password_view");
	}
	public function send_mail()
	{
		if(isset($_POST['submit']))
		{  
			$this->load->library('encryption');
			$email = $this->input->post('email');
			$token = md5(rand());

			$check_email = $this->db->query("SELECT * from users where email = ? ",array($email));
             if($check_email->num_rows() > 0)
             {
                $query = $this->db->query("Update users set verify_token = ? where email = ?",array($token,$email)); 
         
                  $from_email = "sahilgohel8690@gmail.com";
       $to_email = $this->input->post("email");
       $mails  = $this->encryption->encrypt($to_email);
       //echo $mails;exit;
     //  print_r($to_email);exit;
       $this->email->to($to_email);
       $this->email->from($from_email, "admin");
       $this->email->reply_to("sahilgohel8690@gmail.com", "Admin");
       $this->email->subject("Reset Password");
       $this->email->message("hii,<html><head><title>Reset Password</title></head><body>here is your link to reset password link<a href='http://localhost/MyProject3/Auth/Forget_password/process?token=$token&email=$mails' target='_blank'>Click Hear</a></body>");
   
        if($this->email->send())
       {    
            $this->session->set_flashdata("message", "Reset Link sent to your E-mail");
           	redirect(base_url()."Auth/Forget_password");
       }
     else
       {   $this->session->set_flashdata("error", "Email is Not register");
           redirect(base_url()."Auth/Forget_password");
       } 
              
             }
         }
            
		}
	
   public function process() {
      $email =  $this->input->get('email');
      $emails = $this->encryption->decrypt($email);
      //echo $emails;exit;
      $data['emailid'] = $emails;
       $this->load->view("Reset_password",$data);
       $this->load->model('dynamic_model');
       

       $token = $this->input->get('token');
       
       $password = $this->input->post('password');
       $emailid = $this->input->post('emailid');
       $data = $this->dynamic_model->checkandresetpassword($token,$emails);
      // print_r($this->input->get());exit;
       if(isset($_POST['submit']))
       {
           if($this->dynamic_model->checkandresetpassword($token,$emails) == false )
           {
           	$this->session->set_flashdata("error", "Some Error Occurred in password reset");
           	redirect(base_url()."Auth/Forget_password");
           }
          
           $query = $this->db->query("update users set password = ? where email  = ?",array($password,$emailid));
           	
           	if($query == true)
           	{
               $token = "";
           		$query = $this->db->query("update users set verify_token = ?",array($tokens));
           		$this->session->set_flashdata("message", "Password reset successfully");
             	redirect(base_url()."Auth/Login");
           	}
           	else
           	{
           			$this->session->set_flashdata("error", "Some Error Occurred in password reset");
           	       redirect(base_url()."Auth/Forget_password");
           	}
           
    }
}
}