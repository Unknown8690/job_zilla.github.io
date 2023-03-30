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
		$query = $this->db->get('states');
		return $query->result();
	}
	public function fetch_city($state_id)
	{
		$city_list = '';
        $query = $this->db->query('SELECT * from cities where state_id = ?',array($state_id));
		foreach($query->result() as  $city)
		{
				$city_list .= '<option value="'.$city->city_id.'">'.$city->city_name.'</options>';
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
    return $query->result ();
    }



}