<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jobs extends CI_Controller {

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
		$this->load->library('pagination');
		$start_row = intval($this->uri->segment(3));
		//echo $start_row;exit;
		$per_page = 5;

		$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		$fromdate = date('Y/m/d', strtotime('first day of this month'));
    $todate = date('Y/m/d', strtotime('last day of this month'));
 // print_r($this->input->post());exit;
          $current_date = date_format(date_create($this->common->getDate()), 'Ymd');
          $newdate = date("Y-m-d",strtotime('-1 day',strtotime($current_date)));
         // print_r($newdate);exit;
          $query = $this->db->query("delete from tbljob where end_date = ?",array($newdate));
		$Category = 0;
		$Keyword = 0;
		$Location = 0;
		$Type = 0;
		if(isset($_POST['catname']) and isset($_POST['Keyword']) and isset($_POST['location']) and isset($_POST['type']) and isset($_POST['fromdate']) and isset($_POST['todate']))
		{
		$Category = $this->input->post('catname');
		//print_r($Category);exit;
		$Keyword  = $this->input->post('Keyword');
		$Location = $this->input->post('location');
		$Type = $this->input->post('type');
		$fromdate = $this->input->post('fromdate');
		$todate = $this->input->post('todate');
	   }
		
		 $view_data['Types'] = $Type;

		//print_r($this->input->post());exit;
         $view_data['fromdate'] = $fromdate;
         $view_data['todate'] = $todate;
		$view_data['fetch'] = $this->dynamic_model->filter_job($fromdate,$todate,$Category,$Keyword,$Location ,$Type,$start_row,$per_page);
		$query = $this->db->query('SELECT FOUND_ROWS() AS TotalCount');
					$total_row = $query->row()->TotalCount;
					//echo $total_row;exit;
				$config['base_url'] = base_url()."Jobs/Index";
				$config['total_rows'] = $total_row;
                $config['per_page'] = $per_page;
                //print_r($config);exit;
		     $view_data['fromdate'] = $fromdate;
		      $this->pagination->initialize($config); 
         $view_data['page'] = $this->pagination->create_links();
        // echo $view_data['pagination'];exit;
         $view_data['todate'] = $todate;
         $view_data['cat'] = $this->db->query('SELECT * from tbljobcategory order by cat_name ASC');
		 
		$this->template->load('master_file', 'Job_view',$view_data,false,"Home_header.php","Home_footer.php");
	}
    public function jobdetail()
    {
    	$this->load->model('dynamic_model');
		$Id = $this->input->get('Id');
		
		$view_data['fetch'] = $this->db->query('SELECT job.*,state.state_name,city.city_name,company.company_name
			FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
			LEFT JOIN  `cities` city ON city.city_id = job.city
			LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
			where job.Id = ?',array($Id));
		$view_data['fetchre'] = $this->db->query('SELECT * from `tbljob_details` where job_id = ?',array($Id));
		$view_data['fetchrer'] = $this->db->query('SELECT * from `tbljob_details2` where job_id = ?',array($Id));
		$view_data['fetchlink'] = $this->db->query('SELECT * from `tbljob_links` where job_id = ?',array($Id));

		
		$this->template->load('master_file', 'Job_detail',$view_data,false,"Home_header.php","Home_footer.php");
    }
   
    public function apply()
    {        
       
    	$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		
		$this->template->load('master_file', 'Apply_job',$view_data,false,"Home_header.php","Home_footer.php");
	
    }
}
