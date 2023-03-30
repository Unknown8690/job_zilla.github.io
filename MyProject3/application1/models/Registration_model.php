<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration_model extends CI_Model {

    // Get cities
    function getState(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblstate');
        $response = $q->result_array();
        return $response;
    }
	
}

class City_model extends CI_Model {

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
	
	
	class Property_model extends CI_Model {

    // Get cities
    function getProperty(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblproperty');
        $response = $q->result_array();
        return $response;
    }
	
}

	class Country_model extends CI_Model {

    // Get cities
    function getCountry(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblcountry');
        $response = $q->result_array();
        return $response;
    }
	}
	
		class tblyourself_model extends CI_Model {

    // Get cities
    function getyourself(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblyourself');
        $response = $q->result_array();
        return $response;
    }
	}
	
		class tblWant_model extends CI_Model {

    // Get cities
    function getWant(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblWant');
        $response = $q->result_array();
        return $response;
    }
	}


 
   	class tblproperty_model extends CI_Model {

    // Get cities
    function getkindproperty(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblkindproperty');
        $response = $q->result_array();
        return $response;
    }
	}
	
		class tblprojectstatus_model extends CI_Model {

    // Get cities
    function getprojectstatus(){
        $response = array();
        // Select record
        $this->db->select('*');
        $q = $this->db->get('tblprojectstatus');
        $response = $q->result_array();
        return $response;
    }
	}
	
	