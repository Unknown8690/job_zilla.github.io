<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Property extends CI_Controller {

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
		$this->load->model("Registration_model");
		$this->load->model("City_model");
		$this->load->model("Property_model");
		$this->load->model("Country_model");
		$this->load->model("tblyourself_model");
		$this->load->model("tblWant_model");
		$this->load->model("tblproperty_model");
		$this->load->model("tblprojectstatus_model");
		$userid="";
		$userid=$this->session->userdata("ID");
		if(isset($_GET["ID"]))
		{
			$userid= trim($this->input->get("ID"));
			
		}
			$view_data['state'] = $this->Registration_model->getCity();
			$view_data['cities'] = $this->City_model->getCity();
			$view_data['Property'] = $this->Property_model->getCity();
			$view_data['country'] = $this->Country_model->getCity();
			$view_data['self'] = $this->tblyourself_model->getCity();
			$view_data['want'] = $this->tblWant_model->getCity();
			$view_data['kind'] = $this->tblproperty_model->getCity();
			$view_data['Project'] = $this->tblprojectstatus_model->getCity();
			$result = $this->db->query("select * from real_estate_master where ID= ?",array($userid));
			$view_data["data"] = $result;
			$view_data["MESSAGE"] = "Welcome To My Admin Panel";
	
		$this->template->load('master_file', 'Property_view',$view_data,false,"Registration_header.php","Registration_footer.php");
		//$this->load->view("Dash_view");
	}
	
	 public function Process()
	  {  
	  //print_r("hii");exit;
	  //print_r($this->input->post());exit;
	  //$this->db->db_debug = TRUE;
	  $userid = $this->input->post("hidid");
	  if($userid!="")
	  {
		 //$userid=$this->session->userdata("ID");
	     $UserNo = trim($this->input->post('UserNo'));  
        $Property = trim($this->input->post('Property'));
		$address = trim($this->input->post('address'));
		$latitude  = trim($this->input->post('latitude')); 
		$longitude = trim($this->input->post('longitude')); 
		$discount = trim($this->input->post('discount')); 
		$drpProperty = trim($this->input->post('drpProperty'));
		$area = trim($this->input->post('area'));
		$drpCity = trim($this->input->post('drpCity'));
		$drpState = trim($this->input->post('drpState'));      
	  	$drpCountry = trim($this->input->post('drpCountry'));   
		 $date = $this->common->getDate();
	  
			  $result = $this->db->query("update real_estate_master set  	User_ID =?,Property_Name =?,Address  =?,Latitude =?,Longitude =?,Discount =?,Area =?,StateID=?,Property_Type=?,CityID =?,CountryID =?,DateTime=? where ID= ? ",array($UserNo,$Property,$address,$latitude,$longitude,$discount,$drpProperty,$area,$drpCity,$drpState,$drpCountry, $date,$userid));
			  if($result == true)
			  {	
					  redirect(base_url()."Property_view");
			  }
	  }

	  else{
		   $userid=$this->session->userdata("ID");
		 $UserNo = trim ($this->input->post('UserNo'));  
        $Property = trim($this->input->post('Property'));
		$address = trim($this->input->post('address'));
		$latitude  = trim($this->input->post('latitude')); 
		$longitude = trim($this->input->post('longitude')); 
		$discount = trim($this->input->post('discount')); 
		$drpProperty = trim($this->input->post('drpProperty'));
		$area = trim($this->input->post('area'));
		$drpCity = trim($this->input->post('drpCity'));
		$drpState = trim($this->input->post('drpState'));      
	  	$drpCountry = trim($this->input->post('drpCountry'));   
		 $date = $this->common->getDate();
		
	
		
		$insert = $this->db->query("insert into real_estate_master( User_ID,Property_Name,Address , Latitude  ,Longitude ,Discount ,Property_Type, Area ,CityID , StateID  ,CountryID ,DateTime ) values(?,?,?,?,?,?,?,?,?,?,?,?)",array($UserNo,$Property,$address,$latitude,$longitude ,$discount,$drpProperty,$area,$drpCity,$drpState,$drpCountry,$date));
		if($insert == true)
		{
				echo "Data inserted Successfully";exit;
				redirect(base_url()."Property_view");
		}
		  
	  }
	  }
}
