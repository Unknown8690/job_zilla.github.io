<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Changepassword extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
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
           $view_data = "";
            $this->template->load('master_file', 'Change_password',$view_data,false,"Home_header.php","Home_footer.php");
        
        
        
        
     } 

 }