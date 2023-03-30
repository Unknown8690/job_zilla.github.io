<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dynamic_model extends CI_Model {


	public function __construct(){

		parent::__construct();

	}
	public function fetch_unit()
	{
       
       $this->db->order_by('unit_name', 'ASC');
       $query = $this->db->query('SELECT id,unit_name from tbl_unit order by unit_name');
       return $query->result();

	}
	public function fetch_Company()
	{
       
       $this->db->order_by('company_name  ', 'ASC');
       $query = $this->db->query('SELECT Id,company_name from tblcompany order by company_name');
       return $query->result();

	}
	public function fetch_site()
	{
       
       $this->db->order_by('company_name  ', 'ASC');
       $query = $this->db->query('SELECT a.id,a.site_name,a.address,a.company_id,a.store,a.purchase,a.user_id,a.Active,a.DateTime,b.company_name 
	   FROM `tbl_site` a
	   left join tblcompany b on a.company_id = b.Id');
       return $query;

	}
	
	public function fetch_state()
	{
        $this->db->order_by('state_name','ASC');
		$query =$this->db->query('SELECT * from states  order by state_name ASC');
		return $query->result();
	}
	public function fetch_city($state_id)
	{
		$city_list = '';
        $query = $this->db->query('SELECT * from cities where state_id = ?',array($state_id));
		foreach($query->result() as  $city)
		{
				$city_list .= '<option class="bs-title-option" value="'.$city->city_id.'">'.$city->city_name.'</options>';
		}
		return $city_list;
    
	}
	public function get_dep_category()
	{
		$this->db->order_by('Decategory_name', 'ASC');
		$query = $this->db->get('department_category');
		return $query->result();

	}
	public function checkemailexist($email)
    {
    	$query = $this->db->query('SELECT count(Id) as total FROM `tblusers` where emailid = ?',array($email));
    	if($query->row(0)->total >0)
    	{
    		return true;
    	}
    		return false;

    }
    public function fetch_vendor()
    {  
    	$this->db->order_by('vendor_name', 'ASC');
    	$query = $this->db->query('SELECT id,vendor_name,mobile_no,address from tbl_vendor order by vendor_name');
    	return $query->result();

    }
    public function fetch_item()
    {
    	$this->db->order_by('item_name','ASC');
    	$query = $this->db->query('SELECT id,item_name from tbl_item order by id');
    	return $query->result();
    }
    public function fetch_data($Id)
    {
     $query = $this->db->query ('SELECT * FROM `tblgrn` LEFT JOIN `tblusers` ON `tblusers`.`Id` = `tblgrn`.`user_id` LEFT JOIN `tbl_vendor` ON `tbl_vendor`.`id` = `tblgrn`.`vendor_id` LEFT JOIN `tblcompany` ON `tblcompany`.`Id` = `tblgrn`.`company_id` LEFT JOIN `tbl_item` ON `tbl_item`.`id` = `tblgrn`.`item_id`  LEFT JOIN `tbl_unit` ON `tbl_unit`.`id` = `tblgrn`.`unit_id` ORDER BY `invoice_no` ASC');
    return $query->result();
    }
    public function fetch_GRN()
    { 

    	$this->db->order_by('Id','ASC');
    	$query = $this->db->query('SELECT Id,invoice_date,company_id,invoice_no,item_id,remark,qty,unit_id from tblgrn order by Id');
    	return $query->result();

    }
    public function fetch_cat()
    {
    	$this->db->order_by('cat_name','ASC');
    	$query = $this->db->query('SELECT Id,cat_name from tbljobcategory order by cat_name');
    	return $query->result();
    }
    public function fetchprofile($Id)
    {   
    	
    	$this->db->select('*');
    	$this->db->where('refer_id',$Id);
    	$row = $this->db->get('profile_user');
    	return $row->row_array();

    	

    }
    public function fetchstaets($Id)
    {
          $query = $this->db->query('SELECT profile.*,state.state_id,state.state_name from `profile_user` profile LEFT JOIN `states` state ON state.state_id = profile.state_id where profile.refer_id = ?',array($Id)) ;

           return $query->row_array();
    }
    public function fetchcity($Id)
    {
          $query = $this->db->query('SELECT profile.*,city.city_id,city.city_name from `profile_user` profile LEFT JOIN `cities` city ON city.city_id = profile.city where profile.refer_id = ?',array($Id)) ;

           return $query->row_array();
    }
    public function fetch_education($Id)
    {
    	$query = $this->db->query('SELECT * FROM `user_eduction` WHERE user_id = ?',array($Id));
        if($query != "")
        {
    	return $query->result();
        }
        else
        {
       
        }
    }
    public function fetch_experience($Id)
    {
    	$query = $this->db->query('SELECT * FROM `user_experience` WHERE user_id = ?',array($Id));
    	return $query->result();
    }
   public function fetch_editjob($job_id)
   {
      $query = $this->db->query('SELECT job.*,job.job_cat,state.state_name,city.city_name,company.company_name,cat.cat_name,link.instagram,link.Linkdin,link.whatsapp,link.facebook,link.printser,link.twitter,details.Requirments,details2.Responsabilities,type.job_type_Name
            FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
            LEFT JOIN `tbljobcategory` cat ON cat.Id = job.job_cat
            LEFT JOIN  `cities` city ON city.city_id = job.city
            LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
            LEFT JOIN `tbljob_links` link ON link.company_id = job.refer_id
            LEFT JOIN `tbljob_details` details ON details.job_id = job.Id
            LEFT JOIN `tbljob_details2` details2 ON details2.job_id = job.Id
            LEFT JOIN  `type_job` type on type.Id = job.job_type
            where job.Id = ?',array($job_id));
      return $query->row_array();
   }
   public function fetch_Requirments($job_id)
   {
    $query = $this->db->query('SELECT job.*,details.Requirments FROM `tbljob` job LEFT JOIN `tbljob_details` details ON details.job_id = job.Id
     
       where job.Id = ?',array($job_id));
      return $query->result();
   }
   public function fetch_resposblity($job_id)
  {
    $query = $this->db->query('SELECT job.*,details2.Responsabilities FROM `tbljob` job LEFT JOIN `tbljob_details2` details2 ON details2.job_id = job.Id
     
       where job.Id = ?',array($job_id));
      return $query->result();
  }
  public function count_job($Id)
  {
    $query = $this->db->query('SELECT count(refer_id) as total FROM `tbljob` where refer_id = ?',array($Id));
    return $query->row_array();
  }
  public function fetch_userapplyjob($Id)
  {
     /*$query = $this->db->query('SELECT job.*,state.state_name,city.city_name,company.company_name,cat.cat_name,app.date,app.status,app.Id as user_id,type.job_type_Name
      FROM `tbljob` job LEFT JOIN `states` state ON state.state_id = job.state_id
      LEFT JOIN  `cities` city ON city.city_id = job.city
      LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
      LEFT JOIN `tbljobcategory` cat On cat.Id = job.job_cat
      LEFT JOIN  `type_job` type ON type.Id = job.job_type   
      LEFT JOIN `applied_job` app ON app.job_id = job.Id
      where app.user_id = ?',array($Id));*/
      $query = $this->db->query('SELECT app.*,state.state_name,job.job_title,city.city_name,cat.cat_name,job.job_type,type.job_type_Name from `applied_job` app
      LEFT JOIN `tbljob` job ON app.job_id = job.Id
      LEFT JOIN `states` state ON state.state_id = job.state_id
       LEFT JOIN  `cities` city ON city.city_id = job.city
      LEFT JOIN `tblcompanys` company ON company.Id = job.refer_id
      LEFT JOIN `tbljobcategory` cat On cat.Id = job.job_cat
      LEFT JOIN  `type_job` type ON type.Id = job.job_type   
     
       where app.user_id = ?',array($Id));
    return $query->result();
  }
  public function filter_job($fromdate,$todate,$Category = 0,$Keyword = '',$Location = 0,$Type = 0,$start_row = 0,$per_page =10 )
  {
    $query = $this->db->query("SELECT  SQL_CALC_FOUND_ROWS a.*,b.job_type_Name from tbljob a
        LEFT JOIN type_job b on b.Id = a.job_type
        where 
        a.start_date BETWEEN ? and ? and
        if(? > 0,a.job_cat = ?,true) and
        if(? != '',a.job_title = ?,true) and
        if(? > 0,a.state_id = ?,true) and
        if(? > 0,a.job_type = ?,true) and
            a.save_draft = 'No'
          order by a.Id limit ?,?
        ",array($fromdate,$todate,$Category,$Category,$Keyword,$Keyword,$Location,$Location,$Type,$Type,$start_row,$per_page));
    return $query;
  }
  public function filter_jobs($fromdate,$todate,$Category = 0 ,$Keyword = 0,$Location = 0,$Type = 0)
  {
    //print_r($Category);exit;
    $query = $this->db->query("SELECT a.*,b.job_type_Name from tbljob a
        LEFT JOIN type_job b on b.Id = a.job_type
        where 
        a.start_date BETWEEN ? and ? and
        if(? > 0,a.job_cat = ?,true) and
        
        if(? > 0,a.job_title like ?,true) and
        if(? > 0,a.state_id = ?,true) and
        if(? > 0,a.job_type = ?,true) and
            a.save_draft = 'No'
        ",array($fromdate,$todate,$Category,$Category,$Keyword,$Keyword,$Location,$Location,$Type,$Type));
    return $query;
  }
  public function checkuserexist($user)
  {
        $query = $this->db->query('SELECT count(Id) as total FROM `users` where email = ?', array($user));
    if ($query->row(0)->total > 0) {
      return false;
    }
    return true;
  }
  public function checkcompanyexist($email)
  {
     $query = $this->db->query('SELECT count(Id) as total FROM `tblcompanys` where email = ?', array($email));
    if ($query->row(0)->total > 0) {
      return false;
    }
    return true;
  }
  public function checkpass($user,$pass)
  {
     $query = $this->db->query('SELECT count(Id) as total FROM `users` where email = ?', array($user));
      $query1 = $this->db->query('SELECT count(Id) as total FROM `users` where email= ? and password = ?', array($user,$pass));
     //  print_r($query->result());
      // print_r($query1->result());exit;
    if ($query->row(0)->total > 0 and $query1->row(0)->total == 1) {
      return false;
    }
    return true;
  }
   public function checkcompanypass($user,$pass)
  {
     $query = $this->db->query('SELECT count(Id) as total FROM `tblcompanys` where email = ?', array($user));
      $query1 = $this->db->query('SELECT count(Id) as total FROM `tblcompanys` where email= ? and password = ?', array($user,$pass));
     
    if ($query->row(0)->total > 0 and $query1->row(0)->total == 1) {
      return false;
    }
    else
    {
      return true;  
    }
    
  }
  public function fetch_appliedjob($userid)
  {
    $query = $this->db->query("select count(user_id) as total from `applied_job` where user_id = ?",array($userid));
   
    return $query->row_array();
  }
  public function checkapplyornot($job_id,$user_ids)
  {

    $query = $this->db->query('SELECT count(Id) as total FROM `applied_job` where job_id = ? and user_id = ?',array($job_id,$user_ids));

    if($query->row(0)->total > 0)
   {
        return false;
    }
   else
    {
      return true;
   }
  }
  public function fetch_userdetails($Id)
  {
    $query = $this->db->query('SELECT a.*,b.Name,b.current_salary,d.cat_name,e.job_type_Name,c.start_date,c.end_date,c.job_type,c.job_title,f.state_name,b.expected_salary,b.experience,b.phone,b.email,b.qulification,b.address,b.description FROM applied_job a
            LEFT JOIN profile_user b on a.user_id = b.refer_id 
            LEFT JOIN tbljob c on a.job_id = c.Id
            LEFT JOIN tbljobcategory d on d.Id = c.job_cat
            LEFT JOIN  type_job e on e.Id = c.job_type 
            LEFT JOIN states f on f.state_id = b.state_id
            where a.user_id = ?',array($Id));
    return $query->row_array();
  }
  public function fetch_users_application($Id)
  {
    $query = $this->db->query('SELECT a.*,b.Name,b.current_salary,d.cat_name,e.job_type_Name,c.start_date,c.end_date,c.job_type,c.job_title FROM applied_job a
      LEFT JOIN profile_user b on a.user_id = b.refer_id 
      LEFT JOIN tbljob c on a.job_id = c.Id
      LEFT JOIN tbljobcategory d on d.Id = c.job_cat
      LEFT JOIN  type_job e on e.Id = c.job_type 
      where a.company_id = ?',array($Id));
     return $query->result();
  }
  public function company_profile($Id)
  {
    $query = $this->db->query('SELECT * from tblcompanyprofile  where company_id = ?',array($Id));
    return $query->row_array();
  }
  public function checkandresetpassword($token,$emails)
  {
    $query = $this->db->query('SELECT count(Id) as total from `users` where verify_token = ? and email = ?',array($token,$emails));
   // print_r($query->row(0)->total);exit;
   if($query->row(0)->total > 0)
   {
    return true;
   }
   else
   {
    return false;
   }
  }

}