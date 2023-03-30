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
	    $user_id = $this->session->userdata("user_id");
       $data['data'] = $this->dynamic_model->fetch_data($user_id);
		$this->template_emp->load('master_file', 'EMP/GRN_view',$data,false,"Dash_header.php","Dash_footer.php");
	}
    public function addupdateGRN()
    {


        $this->load->model('dynamic_model');
       $invoice_date = $this->input->post('date');
       $company = $this->input->post('company');
       $invoice_no = $this->input->post('invoice_no');
       $venor_id = $this->input->post('venor_id');
       $mobile = $this->input->post('mobile');
       $address = $this->input->post('address');
       $item_id = $this->input->post('item_id');
       $remark = $this->input->post('remark');
       $qty = $this->input->post('qty');
       $unit = $this->input->post('unit');
       $rate = $this->input->post('rate');
       $dis = $this->input->post('dis');
       $amount = $this->input->post('amount');
       $user_id = $this->session->userdata("user_id");
       $data = $this->dynamic_model->fetch_data($user_id);
       //print_r($dataget);exit;


            $file_name = "";
			if(isset($_FILES['uploadfile']))
			{
				$img_name=$_FILES['uploadfile']['name'];

			    $img_size=$_FILES['uploadfile']['size'];
			    $tmp_name=$_FILES['uploadfile']['tmp_name'];
			    $error=$_FILES['uploadfile']['error'];

			     $image_datetime = date_format(date_create($this->common->getDate()),'YmdHis');
			    $folder = "image/".$image_datetime.$img_name; 



			    $imageFileType = strtolower(pathinfo($img_name,PATHINFO_EXTENSION));

				
				$extensions_arr = array("jpg","jpeg","png","gif","pdf","word","txt");
			 
				if( in_array($imageFileType,$extensions_arr) )
				{

                $moved = move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "image/" . $image_datetime.$img_name );
      
       if( $moved ) {
	  $file_name =  $folder;
          
} else {
}
				}
			}
       if($this->input->post('btnSubmit') == 'Submit')
       {
       		$add_date = $this->common->getDate();
       		$ipaddress = $this->common->getRealIpAddr();
           $query = $this->db->query('insert into tblgrn(user_id,datetime,invoice_date,ipaddress,company_id,invoice_no,vendor_id,item_id,remark,qty,unite_id,rate,discount,Amount,document_path) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',array($user_id,$this->common->getDate(),$invoice_date,$this->common->getRealIpAddr(),$company,$invoice_no,$venor_id,$item_id,$remark,$qty,$unit,$rate,$dis,$amount,$file_name));
            $this->session->set_flashdata('message', 'Good Recipt Vouncher Enter Sucessfully');
       }
       else
       {
       	echo "error";
       }
        redirect(base_url()."EMP/GRN");

    }



   
}