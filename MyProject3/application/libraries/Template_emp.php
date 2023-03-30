<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class template_emp
{
        var $template_data = array();
        function set($name, $value)
        {
            $this->template_data[$name] = $value;
        }
        function load($template = '', $view = '' , $view_data = array(), $return = FALSE,$header_files = false,$footer_files = false)
        {        
            $this->CI =& get_instance();
			$this->set('Contants_head', "", "", TRUE);  
			if($header_files != false)
			{
				$this->set('Contants_head', $this->CI->load->view('EMP/headerfiles/'.$header_files, "", TRUE));    
			}
			$this->set('Contants_foot', "", "", TRUE);  
			if($footer_files != false)
			{
				$this->set('Contants_foot', $this->CI->load->view('EMP/footerfiles/'.$footer_files, "", TRUE));    
			}
			$this->set('Contants', $this->CI->load->view($view, $view_data, TRUE));       
            return $this->CI->load->view('company/'.$template, $this->template_data, $return);
        }
}