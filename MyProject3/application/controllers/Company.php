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
		$view_data["data"] = $this->db->query("select * from tblcompany order by company_name");
		$this->template->load('master_file', 'Company_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdatecompany()
	{
		$view_data["message"]  = "";
			if (isset($_POST['etCompanyName'])) {

				$company_name = $this->input->post('etCompanyName');

				if ($this->input->post('btnsubmit') == "Submit") {
					$query = $this->db->query("INSERT INTO tblcompany(company_name,user_id,Active,Deleted,DateTime) values(?,?,?,?,?)", array($company_name, 1, 1, 0, $this->common->getDate()));

					$view_data["message"] = "Company Name Inserted Successfully";

					$this->session->set_flashdata("message", "Company Name Inserted Successfully");
				} else {

					if ($this->input->post('btnsubmit') == "Update")

						$hidid = $this->input->post("hidid");
					$query = $this->db->query("update tblcompany set company_name = ? where Id = ?", array($company_name, $hidid));
					//$view_data["message"]  = "Company Name Updated Successfully";
					$this->session->set_flashdata("message", "Company Name Updated Successfully");
				}



			}
			
		
		
		redirect(base_url()."Company");
		
	}
	public function deleteCompany()
			{
				$id=$this->input->get('id');
			      $query = $this->db->query("delete from tblcompany where Id=$id");
				  $this->session->set_flashdata("message", "Company Delete  Successfully");
				  redirect(base_url()."Company");
				  
			}
	
			
}
