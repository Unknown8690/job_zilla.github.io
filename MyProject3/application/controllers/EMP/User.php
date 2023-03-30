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
		$fetch = $this->db->query("select * from users order by Id");
		$view_data['fetch'] = $fetch->result();
		//print_r($view_data);exit;
		$this->template->load('master_file', 'Create_user_view',$view_data,false,"Nav_company_view.php");
	}
	public function adduser()
	{
		
			if (isset($_POST['submit'])) {

				$phone = $this->input->post('phone');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$username = $this->input->post('username');


				if ($this->input->post('hiddenid') == "hii") {
					$query = $this->db->query("INSERT INTO users(user_name,email,mobile_number,user_type,createat,password) values(?,?,?,?,?,?)", array($username,$email,$phone,'user',$this->common->getDate(),$password));

				$this->session->set_flashdata("type1", "success");
				$this->session->set_flashdata("message1", "User Created");

					$this->session->set_flashdata("message", "Company Name Inserted Successfully");
				} else {

					if ($this->input->post('hiddenid') != "hii")

						$hidid = $this->input->post("hiddenid");
					$query = $this->db->query("update users set user_name = ?, email = ?,mobile_number = ?,password = ? where Id = ?", array($username,$email,$phone,$password,$hidid));
					$this->session->set_flashdata("type1", "success");
				$this->session->set_flashdata("message1", "User Updated Successfully");
				}



			}
			
		
		
		redirect(base_url()."EMP/User");
		
	}
	public function deleteuser()
			{
				$id=$this->input->get('Id');
			      $query = $this->db->query("delete from users where Id=$id");
				$this->session->set_flashdata("type1", "success");
				$this->session->set_flashdata("message1", "User Deleted Successfully");
				  redirect(base_url()."EMP/User");
				  
			}
	
			
}
