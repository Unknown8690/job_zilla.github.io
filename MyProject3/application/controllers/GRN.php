<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class GRN extends CI_Controller {

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
		$this->load->model('dynamic_model');
		$user_id = $this->session->userdata("user_id");
        $data['data'] = $this->dynamic_model->fetch_data($user_id);
		$this->template->load('master_file', 'GRN_view',$data,false,"Dash_header.php","Dash_footer.php");
	}

	
			
}
