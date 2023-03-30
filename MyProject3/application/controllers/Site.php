<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

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
		$this->load->model('dynamic_model');

		$view_data["companys"] = $this->dynamic_model->fetch_company();
		$view_data["data"] = $this->dynamic_model->fetch_site();
		$this->template->load('master_file', 'Site_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addSite()
	{

		// print_r($this->input->post());
		// exit;
		
		$view_data["message"]  = "";
		    $datetime=$this->common->getDate();
			$site_name = $this->input->post('site_name');
			$company_name = $this->input->post('company_name');
			$address = $this->input->post('address');
            
		if(isset($_POST['site_name']))
		{
            
             
            
              
             if($this->input->post('btnSubmit') == "Submit" ) 
             {
					$query = $this->db->query("INSERT INTO tbl_Site(site_name,company_name,address,user_id,Active,Deleted,DateTime) values(?,?,?,?,?,?,?)",array($site_name,$company_name,$address,1,0,0,$this->common->getDate()));

					$view_data["message"]  = "Site Created Successfully";

					$this->session->set_flashdata("message","Site Created Successfully");
             }
             else 
             {
             
            
             	    $hidid = $this->input->post("hidid");
					 
					$query = $this->db->query("update tbl_Site set site_name = ?, company_name = ?, address = ?, user_id = ? where id = ?",array($site_name,$company_name,$address,1,$hidid));
					//$view_data["message"]  = "Company Name Updated Successfully";
					$this->session->set_flashdata("message","User Updated Successfully");
             }
            
         

         

		}
		redirect(base_url()."Site");
	}
		
		
		
	}
	

