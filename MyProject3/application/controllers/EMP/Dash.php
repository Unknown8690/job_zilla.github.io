<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

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
        ini_set('display_errors', 1);
        $this->db->db_debug = TRUE;
        $this->load->model('dynamic_model');
    }
     function is_logged_in()
    {
        if ($this->session->userdata('user_typecompany') != "company") {
            redirect(base_url() . 'Auth/Company_login');
        }
    }
    
	public function index()
	{  
        $Id = $this->session->userdata('company_id');
		$cur_date = $this->common->getDate();
		$view_data["countJob"] = $this->dynamic_model->count_job($Id);
        //print_r($view_data);exit;
		$company_name = $this->session->userdata("company_name");
		$view_data['company_name'] = $company_name;
       
      


       
        
        $view_data['postjob'] = $postjob;
        //print_r($view_data);exit;
	    $this->template->load('master_file','Company_dash',$view_data,false,"Nav_company_view.php");
	}
    public function profile()
    {  
        $Id = $this->session->userdata('company_id');
        $cur_date = $this->common->getDate();
        $view_data["countJob"] = $this->dynamic_model->count_job($Id);
        //print_r($view_data);exit;
        $company_name = $this->session->userdata("company_name");
        $view_data['company_name'] = $company_name;
       
         
       $company_name = $this->input->post('company_name');
       $company_phone = $this->input->post('company_phone');
       $company_Email = $this->input->post('company_Email');
       $company_website = $this->input->post('company_website');
       $company_since = $this->input->post('company_since');
       $Description = $this->input->post('Description');
       $teamsize = $this->input->post('teamsize');
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
        
       // $view_data['postjob'] = $postjob;
        $view_data['viewjob'] = $this->dynamic_model->company_profile($Id);
        if(isset($_POST['submit']))
        {
            if($this->input->post('hidcom') == "hii")
            {
           $query = $this->db->query("insert into tblcompanyprofile(company_id,company_name,company_phone,company_email,company_website,est,teamsize,description,create_at,image) values(?,?,?,?,?,?,?,?,?,?)",array($Id,$company_name,$company_phone,$company_Email,$company_website,$company_since,$teamsize,$Description,$this->common->getDate(),$file_name));
          }
          else
          {
            if($this->input->post("hidcom") != "hii")
            $query = $this->db->query('');
          }
        }
        else
        {

        }

        //print_r($view_data);exit;
        $this->template->load('master_file','Company_profile_view',$view_data,false,"Nav_company_view.php");
    }
    public function postjob()
    {  
        $job_id = $this->input->get('Id');
        
        $view_data['job_id'] = $job_id;
        $view_data['fetch'] = $this->dynamic_model->fetch_editjob($job_id);
        $view_data['cat_job'] = $this->db->query('SELECT * from `type_job` order by job_type_Name ASC ');
        $view_data["main"] = $this->dynamic_model->fetch_Requirments($job_id);
        $view_data["mains"] = $this->dynamic_model->fetch_resposblity($job_id);
         $view_data['category'] = $this->db->query('SELECT * from tbljobcategory order by Id ASC');
         $view_data['states'] = $this->db->query('SELECT * from states order by state_id ASC');
        $this->template->load('master_file','Post_jobview',$view_data,false,"Nav_company_view.php");
        

            //variables



         // print_r($this->input->post());exit;
            $cur_date = $this->common->getDate();
             $Company_Id = $this->session->userdata("company_id");
            //print_r($this->input->post());exit;
             $jobtitle = $this->input->post('jobtitle');
             $jobcat = $this->input->post('jobcat');
             $jobtype = $this->input->post('jobtype');
             $salary = $this->input->post('salary');
             $Experience = $this->input->post('Experience');
             $Qualification = $this->input->post('Qualification');
             $Gender = $this->input->post('Gender');
             $email = $this->input->post('email');
             $mobile = $this->input->post('mobile');
             $Location = $this->input->post('Location');
             $Country = $this->input->post('Country');
             $State = $this->input->post('State');
             $city = $this->input->post('citys');
             $Pincode = $this->input->post('Pincode');
             $Website = $this->input->post('Website');
             $Since = $this->input->post('Since');
             $Addresscompany = $this->input->post('Addresscompany');
             $Description = $this->input->post('Description');
             $Startdate = $this->input->post('Startdate');
             $enddate = $this->input->post('enddate');
             $Linkdin = $this->input->post('Linkdin');
             $Twitter = $this->input->post('Twitter');
             $Instagram = $this->input->post('Instagram');
             $facebook = $this->input->post('facebook');
             $Pinterest = $this->input->post('Pinterest');
             $Whatsapp = $this->input->post('Whatsapp');
              $draft = 'No';
             
            //array variables
              //print_r($this->input->post());exit;
             $Requirment = $this->input->post('Requirment');

             $Responsabilities = $this->input->post('Responsabilities');


             if(isset($_POST['btndraft']))
             {
                    if($this->input->post("hiddenpostno") == "Hii")
                 {
                       $query = $this->db->query("insert into tbljob(refer_id, since, job_title, job_type, job_cat, salary, experience, qulification, gender, location, country, state_id, city, pincode, comapny_email, company_phone, company_address, discription, start_date, end_date, create_at, image,company_link,save_draft) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($Company_Id,$Since,$jobtitle,$jobtype,$jobcat,$salary,$Experience,$Qualification,$Gender,$Location,'India',$State,$city,$Pincode,$email,$mobile,$Addresscompany,$Description,$Startdate,$enddate,$this->common->getDate(),0,$Website,'Yes'));

                        if($query == true)
                       {
                           $insert_id = $this->db->insert_id();
                      $reqcount = count($Requirment);
                      $reqcounts = count($Responsabilities);
                      for($i = 0; $i < $reqcount; $i++){
                        if($Requirment[$i] > 0)
                        {
                $query1 = $this->db->query("insert into tbljob_details(job_id,company_id, Requirments
                  ) values(?,?,?)",array($insert_id,$Company_Id,$Requirment[$i]));
                        }
                    }

                    for($i = 0; $i < $reqcounts; $i++){
                                   if($Responsabilities[$i] > 0)
                                   {
                      $query2 = $this->db->query("insert into tbljob_details2(job_id,company_id,Responsabilities) values(?,?,?)",array($insert_id,$Company_Id,$Responsabilities[$i]));
                  }
    
                                }
                       }
                $query3 = $this->db->query("insert into tbljob_links(company_id,job_id,instagram, Linkdin, whatsapp, facebook, printser, twitter) values(?,?,?,?,?,?,?,?)",array($Company_Id,$insert_id,$Instagram,$Linkdin,$Whatsapp,$facebook,$Pinterest,$Twitter));
                 $this->session->set_flashdata("message", "Job Published Sucessfully"); 
                redirect(base_url()."EMP/Dash/postjob");
                 }
             }
             else
            
             if(isset($_POST['btnpublish']))
             {
                 if($this->input->post("hiddenpostno") == "Hii")
                 {
                       $query = $this->db->query("insert into tbljob(refer_id, since, job_title, job_type, job_cat, salary, experience, qulification, gender, location, country, state_id, city, pincode, comapny_email, company_phone, company_address, discription, start_date, end_date, create_at, image,company_link,save_draft) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)",array($Company_Id,$Since,$jobtitle,$jobtype,$jobcat,$salary,$Experience,$Qualification,$Gender,$Location,'India',$State,$city,$Pincode,$email,$mobile,$Addresscompany,$Description,$Startdate,$enddate,$this->common->getDate(),0,$Website,'No'));

                        if($query == true)
                       {
                           $insert_id = $this->db->insert_id();
                      $reqcount = count($Requirment);
                      $reqcounts = count($Responsabilities);
                      for($i = 0; $i < $reqcount; $i++){
                        if($Requirment[$i] > 0)
                        {
                $query1 = $this->db->query("insert into tbljob_details(job_id,company_id, Requirments
                  ) values(?,?,?)",array($insert_id,$Company_Id,$Requirment[$i]));
                        }
                    }

                    for($i = 0; $i < $reqcounts; $i++){
                                   if($Responsabilities[$i] > 0)
                                   {
                      $query2 = $this->db->query("insert into tbljob_details2(job_id,company_id,Responsabilities) values(?,?,?)",array($insert_id,$Company_Id,$Responsabilities[$i]));
                  }
    
                                }
                       }
                $query3 = $this->db->query("insert into tbljob_links(company_id,job_id,instagram, Linkdin, whatsapp, facebook, printser, twitter) values(?,?,?,?,?,?,?,?)",array($Company_Id,$insert_id,$Instagram,$Linkdin,$Whatsapp,$facebook,$Pinterest,$Twitter));
                 $this->session->set_flashdata("message", "Job Published Sucessfully"); 
                redirect(base_url()."EMP/Dash/postjob");
                 }
                 else 
                 {
                        if($this->input->post("hiddenpostno") != "Hii")
                        {
                        $jobids = $this->input->post('hiddenpostno');
            $querys = $this->db->query("update tbljob set since = ?, job_title = ?, job_type = ?, job_cat = ?, salary = ?, experience = ?, qulification = ?, gender = ?, location = ?, country = ?, state_id = ?, city = ?, pincode = ?, comapny_email = ?, company_phone  = ?, company_address = ?, discription = ?, start_date = ?, end_date = ?,company_link = ?, save_draft = ? where Id = ?",array($Since,$jobtitle,$jobtype,$jobcat,$salary,$Experience,$Qualification,$Gender,$Location,'India',$State,$city,$Pincode,$email,$mobile,$Addresscompany,$Description,$Startdate,$enddate,$Website,$draft,$jobids));
              if($querys == true)
                       {
                    
                      $reqcount = count($Requirment);
                      $reqcounts = count($Responsabilities);
                      $query12 = $this->db->query("delete from tbljob_details where job_id = $jobids");
                      for($i = 0; $i < $reqcount; $i++){
                        if($Requirment[$i] > 0)
                        {
                $query1 = $this->db->query("insert into tbljob_details(job_id,company_id, Requirments
                  ) values(?,?,?)",array($jobids,$Company_Id,$Requirment[$i]));
                        }
                    }
                        $query13 = $this->db->query("delete from tbljob_details2 where job_id = $jobids");
                    for($i = 0; $i < $reqcounts; $i++){
                                   if($Responsabilities[$i] > 0)
                                   {
                      $query2 = $this->db->query("insert into tbljob_details2(job_id,company_id,Responsabilities) values(?,?,?)",array($jobids,$Company_Id,$Responsabilities[$i]));
                  }
    
                                }
                       }
                       $query14 = $this->db->query("delete from tbljob_links where job_id = $jobids");
                $query3 = $this->db->query("insert into tbljob_links(company_id,job_id,instagram, Linkdin, whatsapp, facebook, printser, twitter) values(?,?,?,?,?,?,?,?)",array($Company_Id,$jobids,$Instagram,$Linkdin,$Whatsapp,$facebook,$Pinterest,$Twitter));
                 $this->session->set_flashdata("message", "Job Updated Sucessfully"); 
                redirect(base_url()."EMP/Dash/postjob?Id=$jobids");
                    }
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
       

}
              

   
     
	
	

