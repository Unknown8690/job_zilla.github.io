<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form extends CI_Controller {

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
		$view_data["data"] = "";
		$this->template->load('master_file', 'Form_view',$view_data,false,"Form_header.php","Form_footer.php");
		//$this->load->view("Dash_view");
	}
	public function Process()
	{
		print_r($this->input->post());exit;
		$Fname = $this->input->post('fname');
		$Lname = $this->input->post('lname');
		$Email = $this ->input->post('Email');
		$Password = $this->input->post('Password');
		$result = $this->db->query("select * from tblusers where Email= ?",array($Email));
		if($result->num_rows() == 1)
		{
			$data['error'] = 'Email Id Already Exists.';  
            $this->load->view('Register_view', $data);  
			return;
		}
		
		$insert = $this->db->query("insert into tblusers(FirstName,LastName,Email,Password) values(?,?,?,?,?)",array($fname,$lname,$Email,$password));
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
