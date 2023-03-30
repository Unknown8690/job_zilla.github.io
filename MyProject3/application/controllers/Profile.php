<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

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
        if ($this->session->userdata('user_type') != "user") {
            redirect(base_url() . 'Auth/Login');
        }
    }
	public function index()
	 {      

	 	    $this->load->model('dynamic_model');
	 	    $Id = $this->session->userdata("Id");
	 	      
             $view_data["data"] = $this->dynamic_model->fetchprofile($Id);
            //print_r($view_data);exit;
	        $view_data['cat'] = $this->dynamic_model->fetch_cat();
          $view_data['category'] = $this->db->query('SELECT * from tbljobcategory order by Id ASC');
           $view_data['states'] = $this->dynamic_model->fetch_state();
            
              
           $view_data['selectstate'] = $this->dynamic_model->fetchstaets($Id);
            $view_data['city'] = $this->dynamic_model->fetchcity($Id);
            $view_data['education'] = $this->dynamic_model->fetch_education($Id);
           // print_r($view_data);exit;
            $view_data['experience'] = $this->dynamic_model->fetch_experience($Id);
            //print_r($view_data);exit;
			$this->template->load('master_file', 'Profile_view',$view_data,false,"Dash_header.php","Home_footer.php");
		
		
		
		
	 } 
	public function save()
	  {    

	  	   $this->load->model('dynamic_model');
	 	   $Id = $this->session->userdata("Id");
	 	   $view_data['data'] = $this->db->query("select * from  profile_user where refer_id = ?",array($Id));
	  	   $view_data = "";
	  	
           $this->template->load('master_file', 'Profile_view',$view_data,false,"Dash_header.php","Home_footer.php");

	        }

	    public function saveprofile()
	        {
	        	print_r($this->input->post());exit;
           $Id = $this->session->userdata("Id");
	       $name = $this->input->post('name');
	       $phone = $this->input->post('phone');
	       $email = $this->input->post('email');
	       $qulification = $this->input->post('qulification');
	       $language = $this->input->post('language');
	       $cat = $this->input->post('cat');
	       $experience = $this->input->post('experience');
	       $currentsalary = $this->input->post('currentsalary');
	       $expsalary = $this->input->post('expsalary');
	       $age = $this->input->post('age');
	       $state = $this->input->post('state');
	       $city = $this->input->post('citys');
	       $address = $this->input->post('address');
	       $pincode = $this->input->post('pincode');
	       $description = $this->input->post('description');
	       $Id = $this->session->userdata("Id");
	       $date = $this->common->getDate();
	        $file_name = "";
        if (isset($_FILES['uploadfile'])) {
            $img_name = $_FILES['uploadfile']['name'];

            $img_size = $_FILES['uploadfile']['size'];
            $tmp_name = $_FILES['uploadfile']['tmp_name'];
            //print_r($tmp_name);exit;
            $error = $_FILES['uploadfile']['error'];

            $image_datetime = date_format(date_create($this->common->getDate()), 'YmdHis');

            $folder = "image/" . $image_datetime . $img_name;




            $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));


            $extensions_arr = array("jpg", "jpeg", "png");

            if (in_array($imageFileType, $extensions_arr)) {

                $moved = move_uploaded_file($_FILES["uploadfile"]["tmp_name"], "image/" . $image_datetime . $img_name);


                if ($moved) {
                    $file_name = $folder;

                } else {
                }
            }
        }

            $educationname = 0;
            $companyname = 0;
	       if(isset($_POST['educationname']) != "" and isset($_POST['companyname']) != "")
	       {
	       $educationname = $this->input->post('educationname');
	       $companyname = $this->input->post('companyname');
	        }
	       $universityname = $this->input->post('universityname');
	       $startdatess = $this->input->post('startdatess');
	       $enddatess = $this->input->post('enddatess');
	       $percentage =$this->input->post('percentage');

	       
	       $jobname = $this->input->post('jobname');
	      
	       $designation = $this->input->post('designation');
	       $startdatecompany = $this->input->post('startdatecompany');
	       $enddatecompany = $this->input->post('enddatecompany');
	       $discriptions = $this->input->post('discriptions');
           $locationscompany = $this->input->post('locationscompany');

           $file_name = "";
        if (isset($_FILES['myfile'])) {
            $img_name = $_FILES['myfile']['name'];

            $img_size = $_FILES['myfile']['size'];
            $tmp_name = $_FILES['myfile']['tmp_name'];
            //print_r($tmp_name);exit;
            $error = $_FILES['myfile']['error'];

            $image_datetime = date_format(date_create($this->common->getDate()), 'YmdHis');

            $folder = "image/" . $image_datetime . $img_name;




            $imageFileType = strtolower(pathinfo($img_name, PATHINFO_EXTENSION));


            $extensions_arr = array("jpg", "jpeg", "png", "gif", "pdf", "word", "txt");

            if (in_array($imageFileType, $extensions_arr)) {

                $moved = move_uploaded_file($_FILES["myfile"]["tmp_name"], "image/" . $image_datetime . $img_name);


                if ($moved) {
                    $file_name = $folder;

                } else {
                }
            }
           
        }

	       //print_r($Id);exit;
            
	      if(isset($_POST['btnsubmit']))
	      {
	      	if($this->input->post('hid') == 'hiii')
	      	  {     
                 $query = $this->db->query("INSERT into profile_user(refer_id,Name,email,phone,qulification,language,job_cat,experience,current_salary,expected_salary,age,address,country,state_id,city,pincode,description,update_at,image) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($Id,$name,$email,$phone,$qulification,$language,$cat,$experience,$currentsalary,$expsalary,$age,$address,'India',$state,$city,$pincode,$description,$this->common->getDate(),$file_name));
                        $this->session->set_flashdata("message","User Profile Set Successfully");
                        redirect(base_url()."Profile");
	      	    
	      	    if($query == true)
	      	  	{
	      	  		
	      	  	   $countered = count($educationname);
                        
	      	  		for ($i=0; $i < $countered ; $i++) { 
	      	  			if($educationname[$i] != 0)
	      	  		{
	      	  			$query = $this->db->query("INSERT INTO user_eduction(user_id, start_date, end_date, title, percentage, university_name) values(?,?,?,?,?,?)",array($Id,$startdatess[$i],$enddatess[$i],$jobname[$i],$percentage[$i],$universityname[$i]));
	      	  		}
	      	  	}

	      	  	}
	      	  	if($query == true)
	      	  	{
	      	  		 
	      	  		$countrates = count($jobname);
	      	  		for ($i=0; $i < $countrates ; $i++) { 
	      	  			if($jobname[$i] > 0)
	      	  		 {
	      	  			$query = $this->db->query("INSERT INTO user_experience(user_id,start_date,end_date,company_name,location,description,Postion) values(?,?,?,?,?,?,?)",array($Id,$startdatecompany[$i],$enddatecompany[$i],$companyname[$i],$locationscompany[$i],$discriptions[$i],$designation[$i]));
	      	  		}
	      	  	}
	      	  }
	          }
	          else
	          {
	          	if($this->input->post('hid') != "hiii")
	      	  	$query = $this->db->query("update profile_user set Name = ?, email = ?, phone = ?, qulification = ?, language = ?, job_cat = ?, experience = ?, current_salary = ?, expected_salary = ?, age = ?, address = ?, country = ?, state_id = ?, city = ?, pincode = ?, description = ?, update_at = ?, image = ? where refer_id = ?",array($name,$email,$phone,$qulification,$language,$cat,$experience,$currentsalary,$expsalary,$age,$address,'India',$state,$city,$pincode,$description,$this->common->getDate(),$file_name,$Id));

                 
	      	    if($query == true)
	      	  	{
	      	  		
	      	  			  $countered = count($educationname);
	      	  	     $query12 = $this->db->query("DELETE FROM `user_eduction` WHERE user_id = $Id");
	      	  		for ($i=0; $i < $countered ; $i++) 
	      	  		{ 
	      	  			if($educationname[$i] > 0)
	      	  		{
	      	  			$query = $this->db->query("INSERT INTO user_eduction(user_id, start_date, end_date, title, percentage, university_name) values(?,?,?,?,?,?)",array($Id,$startdatess[$i],$enddatess[$i],$educationname[$i],$percentage[$i],$universityname[$i]));
	      	  		}

	      	  		}
	      	  	 
	      	  	}
	      	  	if($query == true)
	      	  	{
	      	  		
	      	  	    $countrates = count($companyname);
	      	  		$query13 = $this->db->query("DELETE from `user_experience` where user_id = $Id");
	      	  		for ($i=0; $i < $countrates ; $i++)
	      	  		 { 
	      	  		 	if($companyname[$i]> 0)
	      	  		{
	      	  			$query = $this->db->query("INSERT INTO user_experience(user_id,start_date,end_date,company_name,location,description,Position) values(?,?,?,?,?,?,?)",array($Id,$startdatecompany[$i],$enddatecompany[$i],$companyname[$i],$locationscompany[$i],$discriptions[$i],$designation[$i]));
	      	  		}
	      	  		}
	      	  	
	      	  	
	      	  	}
            
              $this->session->set_flashdata("message","User Profile Updated Successfully");
             redirect(base_url()."Profile");
             }
	      }
	      	  

	        }
   public function getCities()
	 {   
	 	//print_r($this->input->post());
	 	$state_id = $this->input->post("state");
	 	$this->load->model('dynamic_model');
        $city_list = $this->dynamic_model->fetch_city($state_id);
		echo $city_list;exit;
    
	 }
	 public function getstates()
	 {
	 	 $Id = $this->input->post("Id");
	 	$query = $this->db->query('SELECT job.*,state.state_id from `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state where  job.Id = ?',array($Id));
	 	return $query->result();
	 }

	    }


	  
