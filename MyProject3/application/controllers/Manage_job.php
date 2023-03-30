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
		
		$view_data['fetch'] = $this->db->query("select * from tbljob order by Id");
		//print_r($view_data);exit;
		
		$this->template->load('master_file', 'Manage_job_view',$view_data,false,"Home_header.php","Home_footer.php");
	}
}
    
