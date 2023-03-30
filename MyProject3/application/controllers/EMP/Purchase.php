<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Purchase extends CI_Controller {

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
        if ($this->session->userdata('user_type') != "Employee") {
            redirect(base_url() . 'Login');
        }  	
    }
	public function index()
	{
        $this->load->model('dynamic_model');
		$data['company'] = $this->dynamic_model->fetch_company();
		$data['vendor'] = $this->dynamic_model->fetch_vendor();
		$data['item'] = $this->dynamic_model->fetch_item();
		$data['unit'] = $this->dynamic_model->fetch_unit();
		$data['grn'] = $this->dynamic_model->fetch_GRN();
	    $user_id = $this->session->userdata("user_id");
        $data['data'] = $this->dynamic_model->fetch_data($user_id);
		$this->template_emp->load('master_file', 'EMP/Purchase_view',$data,false,"Dash_header.php","Dash_footer.php");
	}

	
			
}
