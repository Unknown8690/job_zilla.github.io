<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Table extends CI_Controller {

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
		$result = $this->db->query("select * from tblusers");
		
		$view_data["data"] = $result;
		$this->template->load('master_file', 'Table_view',$view_data,false,"Table_header.php","Table_footer.php");
		//$this->load->view("Dash_view");
	}
	public function Process($id)  
    {  
       
		
		
		
		$delete = $this->db->query("delete from tblusers where id=?",array($id));
		if($delete == true)
		{
				
				redirect(base_url()."Table");
		}
		
          
    }  
}
