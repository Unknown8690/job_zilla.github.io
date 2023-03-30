<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

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

         $this->is_logged_in();
        $this->clear_cache();
       
    }
	function clear_cache()
    {
        header('Expires: Sat, 26 Jul 1997 05:00:00 GMT');
        header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
    }
	function is_logged_in()
    {
        if ($this->session->userdata('user_type') != "Admin") {
            redirect(base_url() . 'Login');
        }
    }

	public function index()
	{
		$cur_date = $this->common->getDate();
		$view_data["data"] = "";
		
		$this->template->load('master_file', 'Dash_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addcompany()
	{
		
		
		$view_data["message"]  = "";
		if(isset($_POST['etCompanyName']))
		{

			$company_name = $this->input->post('etCompanyName');

             if($this->input->post('btnsubmit') == "Submit")
             {
					$query = $this->db->query("INSERT INTO tblcompany(company_name,user_id,Active,Deleted,DateTime) values(?,?,?,?,?)",array($company_name,1,1,0,$this->common->getDate()));

					$view_data["message"]  = "Company Name Inserted Successfully";

					$this->session->set_flashdata("message","Company Name Inserted Successfully");
             }
             else 
             {   
                 
             	  if($this->input->post('btnsubmit') == "Update")
             	  
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update tblcompany set company_name = ? where Id = ?",array($company_name,$hidid));
					//$view_data["message"]  = "Company Name Updated Successfully";
					$this->session->set_flashdata("message","Company Name Updated Successfully");
             }
         

         

		}
		
		$view_data["data"] = $this->db->query("select * from tblcompany order by company_name");
		$this->template->load('master_file', 'add_view',$view_data,false,"Dash_header.php","Dash_footer.php");
		
	}
	
}
