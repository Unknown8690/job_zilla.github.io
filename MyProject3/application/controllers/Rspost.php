<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rspost extends CI_Controller {

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
		
		$userid="";
		$userid=$this->session->userdata("ID");
		if(isset($_GET["ID"]))
		{
			$userid= trim($this->input->get("ID"));
			
		}
			$view_data['state'] = $this->Registration_model->getState();
			$view_data['cities'] = $this->City_model->getCity();
			$view_data['Property'] = $this->Property_model->getProperty();
			
			$result = $this->db->query("select * from rspost where ID= ?",array($userid));
			$view_data["data"] = $result;
			$view_data["MESSAGE"] = "Welcome To My Admin Panel";
	
		$this->template->load('master_file', 'RSPost_view',$view_data,false,"Registration_header.php","Registration_footer.php");
		//$this->load->view("Dash_view");
	}
	
	 public function Process()
	  {  
	  //print_r("hii");exit;
	  //print_r($this->input->post());exit;
	  //$this->db->db_debug = TRUE;
	  $ID = $this->input->post("hidid");
	  
	     $Type = trim($this->input->post('drpType'));  
        $RSName = trim($this->input->post('RSName'));
		$txtContactNo = trim($this->input->post('txtContactNo'));
		$txtEmail  = trim($this->input->post('txtEmail')); 
		$address = trim($this->input->post('address')); 
		$drpState = trim($this->input->post('drpState')); 
		$drpCity = trim($this->input->post('drpCity'));
		$txtMonthly_Price = trim($this->input->post('txtMonthly_Price'));
		$txtYearly_Price = trim($this->input->post('txtYearly_Price'));
		
		$date = $this->common->getDate();
	  if($ID!="")
	  {
		      
			if (is_uploaded_file($_FILES['File_Path']['tmp_name'])) 
			{
				$tempstring = explode('.',$_FILES['File_Path']['name']);
  
    $file_ext=strtolower(end($tempstring));
    $expensions= array("jpeg","jpg","png", "JPEG","JPG", "PNG");
    if(in_array($file_ext,$expensions)=== false)
    {
        echo "Invalid File Type";exit;
    }
    else
    {
        $File_Path = "uploads/".$_FILES["File_Path"]["name"];
        $tmp_name = $_FILES['File_Path']['tmp_name'];
        $pic_name = $_FILES['File_Path']['name'];

        move_uploaded_file($tmp_name, $File_Path);
        

     $result = $this->db->query("update rspost set Name =?,Address  =?,ContactNo =?,EmailID =?,StateID =?,CityID =?,Monthly_Price=?,Yearly_Price=? =?,Type =?,ImagePath=?,DateTime=? where ID= ? "
			  ,array($RSName,$address,$txtContactNo,$txtEmail,$drpState,$drpCity,$txtMonthly_Price,$txtYearly_Price,$Type,$File_Path, $date,$ID));
			  if($result == true)
			  {	
					  redirect(base_url()."Registration1");
			  }
        
    } 

			}
			else {
	$result = $this->db->query("update rspost set Name =?,Address  =?,ContactNo =?,EmailID =?,StateID =?,CityID =?,Monthly_Price=?,Yearly_Price=? =?,Type =?,DateTime=? where ID= ? "
			  ,array($RSName,$address,$txtContactNo,$txtEmail,$drpState,$drpCity,$txtMonthly_Price,$txtYearly_Price,$Type, $date,$ID));
			  if($result == true)
			  {	
					  redirect(base_url()."Registration1");
			  }
}

		 
	  
			  
	  }

	  else{
		   $ID=$this->session->userdata("ID");
		
		
	 if (is_uploaded_file($_FILES['File_Path']['tmp_name'])) 
{
		$tempstring = explode('.',$_FILES['File_Path']['name']);
  
    $file_ext=strtolower(end($tempstring));
    $expensions= array("jpeg","jpg","png", "JPEG","JPG", "PNG");
    if(in_array($file_ext,$expensions)=== false)
    {
        echo "Invalid File Type";exit;
    }
    else
    {
        $File_Path = "uploads/".$_FILES["File_Path"]["name"];
        $tmp_name = $_FILES['File_Path']['tmp_name'];
        $pic_name = $_FILES['File_Path']['name'];

        move_uploaded_file($tmp_name, $File_Path);
        

     
        
    }     
}  
		
		$insert = $this->db->query("insert into rspost( Name  ,ContactNo,Address , EmailID  ,StateID ,CityID ,Monthly_Price, Yearly_Price ,ImagePath , Type   ,DateTime ) values(?,?,?,?,?,?,?,?,?,?,?)",array($RSName, $txtContactNo,$address,$txtEmail,$drpState,$drpCity,$txtMonthly_Price,$txtYearly_Price,$File_Path,$Type, $date));
		if($insert == true)
		{
				echo "Data inserted Successfully";exit;
				redirect(base_url()."Registration");
		}
		  
	  }
	 
	  }
}
