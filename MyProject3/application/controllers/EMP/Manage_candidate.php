<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage_candidate extends CI_Controller {

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
	
		$view_data['fetch'] = $this->db->query('SELECT a.*,b.Name,b.current_salary,d.cat_name,e.job_type_Name,c.start_date,c.end_date,c.job_type,c.job_title FROM applied_job a
      LEFT JOIN profile_user b on a.user_id = b.refer_id 
      LEFT JOIN tbljob c on a.job_id = c.Id
      LEFT JOIN tbljobcategory d on d.Id = c.job_cat
      LEFT JOIN  type_job e on e.Id = c.job_type 
      where a.company_id = ?',array($Id));;
        //  print_r($view_data);exit;
		 

		$this->template->load('master_file', 'Candidate_manage_view',$view_data,false,"Nav_company_view.php");
	}
	public function candidatedetails()
	{
		$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		
		$Id = $this->input->get('Id');
	   
		$view_data['fetch'] = $this->dynamic_model->fetch_userdetails($Id);
		$view_data['education'] = $this->db->query('SELECT * from user_eduction where user_id = ?',array($Id));
		$view_data['experience'] = $this->db->query('SELECT * from user_experience where user_id = ?',array($Id));
		
		$this->template->load('master_file', 'Candidate_details_view',$view_data,false,"Dash_header.php","Home_footer.php");
	}
	public function shortlist()
	{ 
		 //print_r($this->input->post());exit;
		$ID = $this->input->get('Id');
         $status = $this->input->post('ok');
		$query = $this->db->query('UPDATE applied_job set status = ? where user_id = ?',array($status,$ID));
		 $this->session->set_flashdata("type1", "success");
		 $this->session->set_flashdata("message1", "Candidate shortlisted Successfully");
		 redirect(base_url()."EMP/Manage_candidate");
	}
	
}
    
