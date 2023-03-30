<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PGSell extends CI_Controller {

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
		$this->load->model("Realestate_model");
	
		$userid="";
		$userid=$this->session->userdata("ID");
		if(isset($_GET["ID"]))
		{
			$userid= trim($this->input->get("ID"));
			
		}
			
			$view_data['Real'] = $this->Realestate_model->getCity();
			$result = $this->db->query("select * from real_estate_pg_sell_rent   where ID= ?",array($userid));
			$view_data["data"] = $result;
			$view_data["MESSAGE"] = "Welcome To My Admin Panel";
	
		$this->template->load('master_file', 'PGSell_view',$view_data,false,"Registration_header.php","Registration_footer.php");
		//$this->load->view("Dash_view");
	}
	
	 public function Process()
	  {  


	  
	  //print_r($this->input->post());exit;
	  //$this->db->db_debug = TRUE;
	  $userid = $this->input->post("hidid");
	  //print_r($userid);exit;
	 if($userid!="")
	  {
		 //$userid= trim($this->input->get("ID"));
	     $CommanID = trim($this->input->post('CommanID'));  
        $title = trim($this->input->post('title'));
		$Comment = trim($this->input->post('Comment'));
		$drprealestate  = trim($this->input->post('drprealestate')); 
		$Created = trim($this->input->post('Created')); 
		 
		 $date = $this->common->getDate();
		  
//print_r($this->input->post());exit;
	   $result = $this->db->query("update real_estate_pg_sell_rent  set Comman_ID=?,Title=?,Comment=?,Is_real_estate=?,CreatedBy=?,DateTime=? where ID= ? ",array($CommanID,$title,$Comment,$drprealestate,$Created,$date,$userid));
			  if($result == true)
			  {	
					  redirect(base_url()."PGsell");
			  }
	  }
	  
	 	else{
		  	 $userid=$this->session->userdata("ID");
	     $CommanID = trim($this->input->post('CommanID'));  
        $title = trim($this->input->post('title'));
		$Comment = trim($this->input->post('Comment'));
		$drprealestate  = trim($this->input->post('drprealestate')); 
		$Created = trim($this->input->post('Created')); 
		 
		 $date = $this->common->getDate();

		$insert = $this->db->query("insert into real_estate_pg_sell_rent (Comman_ID,Title,Comment,Is_real_estate,CreatedBy, DateTime) values(?,?,?,?,?,?)",array($CommanID,$title,$Comment,$Created,$drprealestate,$date));
		if($insert == true)
		{
				echo "Data inserted Successfully";exit;
				redirect(base_url()."PGsell");
		}   
	  }
	  }
}
	  
	  
	
	  
	  



