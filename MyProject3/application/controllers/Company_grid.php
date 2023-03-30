<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_grid extends CI_Controller {

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
   

     
	
	public function index()
	{  
		$this->load->library('pagination');
		$start_row = intval($this->uri->segment(3));
		$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		$current_date = date_format(date_create($this->common->getDate()), 'Ymd');
		$newdate = date("Y-m-d",strtotime ( '-1 day' , strtotime ( $current_date ) )) ;
		//print_r($newdate);exit;
          $query = $this->db->query("delete from tbljob where end_date = ?",array($newdate));
        $fromdate = date('Y-m-d', strtotime('first day of this month'));
        $todate = date('Y-m-d', strtotime('last day of this month'));
        
        //echo $fromdate;exit;
		$Category = 0;
		$Keyword = "";
		$Location = 0;
		$Type = 0;
	
		if(isset($_POST['catname']) and isset($_POST['Keyword']) and isset($_POST['location']) and isset($_POST['type']) and isset($_POST['fromdate']) and isset($_POST['todate']))
		{
		$Category = $this->input->post('catname');
		$Keyword  = $this->input->post('Keyword');
		$Location = $this->input->post('location');
		$Type = $this->input->post('type');
		$fromdate = $this->input->post('fromdate');
		$todate = $this->input->post('todate');
		

	   }
		

		  
         $view_data['fromdate'] = $fromdate;
         $view_data['todate'] = $todate;
	     $view_data['company'] = $this->db->query('SELECT a.*,b.company_name,b.Id as co_id from tblcompanys b LEFT JOIN tblcompanyprofile a ON a.company_id = b.Id
	       where b.level != 1 and a.company_id  = b.Id ');
		
		
		$this->template->load('master_file', 'Company_grid_view',$view_data,false,"Home_header.php","Home_footer.php");
	}
  
}

