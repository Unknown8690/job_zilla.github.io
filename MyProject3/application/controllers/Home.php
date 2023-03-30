<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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

         
       
       
    }

	public function index()
	{
		
		$view_data["data"] = $this->db->query('SELECT a.*,state.state_name,city.city_name,type.job_type_Name
		  FROM tbljob a
           LEFT JOIN `states` state ON state.state_id = a.state_id
           LEFT JOIN `cities` city ON city.city_id = a.city
           LEFT JOIN `type_job` type ON type.Id = a.job_type
		  limit 5');
		$view_data['cat'] = $this->db->query('SELECT * from tbljobcategory order by cat_name');
		$view_data['type'] = $this->db->query('SELECT * from type_job order by job_type_Name ASC');
		$countjob = $this->db->query('SELECT count(Id) as total from tbljob');
		$view_data['countsjob'] =  $countjob->row_array();
		$this->template->load('master_file', 'Home_view',$view_data,false,"Home_header.php","Home_footer.php");
	}
	
}
