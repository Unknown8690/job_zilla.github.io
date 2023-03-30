<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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
		$this->load->view("Register_view");
	} 
	public function Process()  
    {  
        $fname = trim($this->input->post('fname'));  
        $lname = trim($this->input->post('lname'));
		 $userid = trim($this->input->post('userid'));  
        $password = trim($this->input->post('password')); 
		$password2 = trim($this->input->post('password2'));   
		$date = $this->common->getDate();
		
		
		
		
		$result = $this->db->query("select * from tblusers where Email= ?",array($userid));
		if($result->num_rows() == 1)
		{
			$data['error'] = 'Email Id Already Exists.';  
            $this->load->view('Register_view', $data);  
			return;
		}
		
		$insert = $this->db->query("insert into tblusers(FirstName,LastName,Email,Password,PostingDate) values(?,?,?,?,?)",array($fname,$lname,$userid,$password,$date));
		if($insert == true)
		{
				echo "Data inserted Successfully";exit;
				redirect(base_url()."Login");
		}
		else
		{
			$data['error'] = 'Your Account is Invalid';  
            $this->load->view('Register_view', $data);  
		}
          
    }  
   
}
