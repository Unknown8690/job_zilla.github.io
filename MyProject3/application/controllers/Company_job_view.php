<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_job_view extends CI_Controller {

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

		$Category = 0;
		$Keyword = 0;
		$Location = 0;
		$Type = 0;
		if(isset($_POST['catname']) and isset($_POST['Keyword']) and isset($_POST['location']) and isset($_POST['type']))
		{
		$Category = $this->input->post('catname');
		$Keyword  = $this->input->post('Keyword');
		$Location = $this->input->post('location');
		$Type = $this->input->post('type');
	   }
		

		//print_r($this->input->post());exit;
		
		$view_data['fetch'] = $this->dynamic_model->filter_job($Category,$Keyword,$Location,$Type);
		$view_data['cat'] = $this->db->query('SELECT * from tbljobcategory order by cat_name ASC');
		
		$this->template->load('master_file', 'Jobs_view',$view_data,false,"Dash_header.php","Home_footer.php");
	}
    public function jobdetail()
    {
    	$this->load->model('dynamic_model');
		$Id = $this->input->get('Id');
		
		$view_data['fetch'] = $this->db->query('SELECT job.*,state.state_name,city.city_name,company.company_name,type.job_type_Name
			FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
			LEFT JOIN  `cities` city ON city.city_id = job.city
			LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
			LEFT JOIN  `type_job` type ON type.Id = job.job_type
			where job.Id = ?',array($Id));
		$view_data['fetchre'] = $this->db->query('SELECT * from `tbljob_details` where job_id = ?',array($Id));
		$view_data['fetchrer'] = $this->db->query('SELECT * from `tbljob_details2` where job_id = ?',array($Id));
		$view_data['fetchlink'] = $this->db->query('SELECT * from `tbljob_links` where job_id = ?',array($Id));

		
		$this->template->load('master_file', 'Job_details',$view_data,false,"Dash_header.php","Home_footer.php");
    }
   
    public function apply()
    {        
        $Ids  = $this->input->get('Ids');
        $view_data['Ids'] = $Ids;

    	$this->load->model('dynamic_model');
		$user_name = $this->session->userdata("user_name");
		$view_data['user_name'] = $user_name;
		$cur_date = $this->common->getDate();
		$Id = $this->session->userdata('Id');
		$view_data["fetch"] = $this->dynamic_model->fetchprofile($Id);
		$this->template->load('master_file', 'Apply_job',$view_data,false,"Dash_header.php","Home_footer.php");
	     
	     $Name = $this->input->post('Name');
	     $Email = $this->input->post('Email');
	     $Message = $this->input->post('Message');
	     $add_date = $this->common->getDate();
	    $file_name = "";
        if (isset($_FILES['uploadfile'])) {
            $img_name = $_FILES['uploadfile']['name'];

            $img_size = $_FILES['uploadfile']['size'];
            $tmp_name = $_FILES['uploadfile']['tmp_name'];
            //print_r($tmp_name);exit;
            $error = $_FILES['uploadfile']['error'];

            $image_datetime = date_format(date_create($this->common->getDate()), 'YmdHis');

            $folder = "image/" . $image_datetime . $img_name;




            $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));


            $extensions_arr = array("jpg", "jpeg", "png", "gif", "pdf", "word", "txt");

            if (in_array($imageFileType, $extensions_arr)) {

                $moved = move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "image/" . $image_datetime . $img_name);


                if ($moved) {
                    $file_name = $folder;

                } else {
                }
            }
        }
	     if(isset($_POST['btnapply']))
	     {
	     	 $job_id  = $this->input->post('job_id');
             $query = $this->db->query('INSERT INTO applied_job (job_id, user_id, user_name, user_email, message, document,date) values(?,?,?,?,?,?,?)',array($job_id,$Id,$Name,$Email,$Message,$file_name,$this->common->getDate()));

             if($query == true)
             {
             	 redirect(base_url()."Dash");
             }
             else
             {
             	echo 'error';
             }
	     }
    
    }
    public function managejob()
    {
    	
    	$Id = $this->session->userdata('Id');
    	$this->load->model('dynamic_model');
    	 $view_data['fetch'] = $this->dynamic_model->fetch_userapplyjob($Id);
    	// print_r($view_data);exit;
    	$this->template->load('master_file', 'Manage_apply_job.php',$view_data,false,"Dash_header.php","Home_footer.php");
    }
    public function deletejob()
    {
    	$Id = $this->input->get('Id');
    	$query = $this->db->query("delete from `applied_job` where Id = $Id");
    	$this->session->set_flashdata('message', 'successfully Job Removed');
    	redirect(base_url().'Job/managejob');
    }
}

