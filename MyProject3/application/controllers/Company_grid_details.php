<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company_grid_details extends CI_Controller {

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
	
		$this->load->model('dynamic_model');


        
        //echo $fromdate;exit;
	
	  $company_id = $this->input->get('Id');


	     $company = $this->db->query('SELECT a.*,b.* from tblcompanys b LEFT JOIN tblcompanyprofile a ON a.company_id = b.Id
	       where a.company_id  = ? ',array($company_id));
	     $view_data['details'] = $company->row_array();
		
		
		$this->template->load('master_file', 'Company_grid_details_view',$view_data,false,"Home_header.php","Home_footer.php");
	}
  
}

