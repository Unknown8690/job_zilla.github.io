<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


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