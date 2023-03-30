<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile_model extends CI_Model {

    // Get cities
    function getCity(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblcity');
        $response = $q->result_array();
        return $response;
    }

    
}
class Realestate_model extends CI_Model {

    // Get cities
    function getCity(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('is_real_estate');
        $response = $q->result_array();
        return $response;
    }
}



	
	