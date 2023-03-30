<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

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
		
        $view_data['state_name'] = $this->dynamic_model->fetch_state();
		$view_data['unit_name'] = $this->dynamic_model->fetch_unit();
		$view_data["data"] = $this->db->query("select * from tbl_vendor order by vendor_name");
		$this->template->load('master_file', 'Vendor_view',$view_data,false,"Dash_header.php","Dash_footer.php");
	}
	public function addupdatevendor()
	{
		//print_r($this->input->post());
		//exit;
		
		$view_data["message"]  = "";
		if(isset($_POST['vendor_name']))
		{
            
			$vendor_name = $this->input->post('vendor_name');
			$vendor_code = $this->input->post('vendor_code');
			$mobile_no = $this->input->post('mobile');
			$email_id = $this->input->post('email');
			$credit_period = $this->input->post('credit_period');
			$address = $this->input->post('address');
			$city_id = $this->input->post('city');
			$state_id = $this->input->post('state');
			$pincode = $this->input->post('pincode');
			$Gst_no = $this->input->post('gst_no');
			$pan_no = $this->input->post('pan_no');
			$Bank_name = $this->input->post('bank_name');
			$Bank_account = $this->input->post('account_no');
			$IFSC = $this->input->post('ifsccode');
			$datetime=$this->common->getDate();


			//echo $city_id;
			//exit;
			
			
             if($this->input->post('btnSubmit') == "Submit")
             {
					

					  $query = $this->db->query("INSERT INTO tbl_vendor(vendor_name,vendor_code,mobile_no,email_id,credit_period,address,city_id,state_id,country,pincode,Gst_no,pan_no,Bank_name,Bank_account,IFSC,user_id,Active,Deleted,DateTime) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($vendor_name,$vendor_code,$mobile_no,$email_id,$credit_period,$address,$city_id,$state_id,'india',$pincode,$Gst_no,$pan_no,$Bank_name,$Bank_account,$IFSC,1,1,0,$this->common->getDate()));


					 $view_data["message"]  = "Vendor Created Successfully";

					$this->session->set_flashdata("message","Vendor Created Successfully");
             }
             else 
             {   
                 
             	  if($this->input->post('btnSubmit') == "Update")
             	  
             	    $hidid = $this->input->post("hidid");
					$query = $this->db->query("update tbl_vendor set  vendor_name = ?, vendor_code  = ?,mobile_no = ?, email_id  = ?,credit_period = ?, address  = ?,state_id = ?,city_id = ?, pincode  = ?,Gst_no = ?, pan_no  = ?, Bank_name = ?, Bank_account =?, IFSC = ? where Id = ?",array($vendor_name,$vendor_code,$mobile_no,$email_id,$credit_period,$address,$state_id,$city_id,$pincode,$Gst_no,$pan_no,$Bank_name,$Bank_account,$IFSC,$hidid));
					$this->session->set_flashdata("message","Vendor  Updated Successfully");
             }

		}
		
		redirect(base_url()."Vendor");
		
	}
	 public function getCities()
	 {
	 	$state_id = $this->input->post("state_id");
	 	$this->load->model('dynamic_model');
        $city_list = $this->dynamic_model->fetch_city($state_id);
		echo $city_list;exit;
    
	 }
	 public function deletedVendor()
	 {

		$id=$this->input->get('id');	      
		$query = $this->db->query("delete from tbl_vendor where Id=$id");
		$this->session->set_flashdata("message","Vendor  Deleted Successfully");
	     redirect(base_url()."Vendor");
	 }
	
}
