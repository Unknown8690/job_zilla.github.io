<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_job extends CI_Controller {

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
        ini_set('display_errors', 1);
        $this->db->db_debug = TRUE;
        $this->load->model('dynamic_model');
    }
     function is_logged_in()
    {
        if ($this->session->userdata('user_typecompany') != "company") {
            redirect(base_url() . 'Auth/Company_login');
        }
    }

	public function index()
	{ 
		$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		
		$Id = $this->session->userdata('company_id');
		//print_r($view_data);exit;
		$view_data['fetch'] = $this->db->query("SELECT job.*,state.state_name,city.city_name,company.company_name,cat.cat_name,type.job_type_Name
			FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
			LEFT JOIN  `cities` city ON city.city_id = job.city
			LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
			LEFT JOIN `tbljobcategory`cat ON cat.Id = job.job_cat
			LEFT JOIN `type_job`type ON type.Id = job.job_type
			LEFT JOIN `applied_job` app ON app.job_id = job.Id
			where job.save_draft = 'No' and job.refer_id = ?",array($Id));
		
		
		$this->template->load('master_file', 'Manage_job_view',$view_data,false,"Nav_company_view.php");
	}
	public function draft_job()
	{ 
		$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		
		$Id = $this->session->userdata('company_id');
		//print_r($view_data);exit;
		$view_data['fetch'] = $this->db->query("SELECT job.*,state.state_name,city.city_name,company.company_name,cat.cat_name,type.job_type_Name
			FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
			LEFT JOIN  `cities` city ON city.city_id = job.city
			LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
			LEFT JOIN `tbljobcategory`cat ON cat.Id = job.job_cat
			LEFT JOIN `type_job`type ON type.Id = job.job_type
			LEFT JOIN `applied_job` app ON app.job_id = job.Id
			where job.save_draft = 'Yes' and job.refer_id = ?",array($Id));
		
		$this->template->load('master_file', 'Draft_job_view',$view_data,false,"Nav_company_view.php");
	}
}
    
