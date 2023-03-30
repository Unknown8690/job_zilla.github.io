<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
		$fetch = $this->db->query("select * from tblcompanys order by Id");
		$view_data['fetch'] = $fetch->result();
		//print_r($view_data);exit;
		$this->template->load('master_file', 'Create_company_view',$view_data,false,"Nav_company_view.php");
	}
	public function addupdatecompany()
	{
		
			if (isset($_POST['submit'])) {

				$phone = $this->input->post('phone');
				$email = $this->input->post('email');
				$password = $this->input->post('password');
				$username = $this->input->post('username');


				if ($this->input->post('hiddenid') == "hii") {
					$query = $this->db->query("INSERT INTO tblcompanys(company_name,password,email,mobile,user_type,create_at) values(?,?,?,?,?,?)", array($username,$password,$email,$phone,'company',$this->common->getDate()));

				$this->session->set_flashdata("type1", "success");
				$this->session->set_flashdata("message1", "Company Created");

					
				} else {

					if ($this->input->post('hiddenid') != "hii")

						$hidid = $this->input->post("hiddenid");
					$query = $this->db->query("update tblcompanys set company_name = ?, email = ?,mobile = ?,password = ? where Id = ?", array($username,$email,$phone,$password,$hidid));
					$this->session->set_flashdata("type1", "success");
				$this->session->set_flashdata("message1", "Company Updated Successfully");
				}



			}
			
		
		
		redirect(base_url()."EMP/Company");
		
	}
	public function deleteCompany()
			{
				$id=$this->input->get('Id');
			      $query = $this->db->query("delete from tblcompanys where Id=$id");
				  $this->session->set_flashdata("type1", "success");
				  $this->session->set_flashdata("message1", "Company Deleted Successfully");
				  redirect(base_url()."EMP/Company");
				  
			}
	
			
}
