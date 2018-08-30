<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_check extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }


   function check_email($email='') 
    {  
        $this->db->select('*');    
        $this->db->from('company');       
        $this->db->where('comp_email' ,$email);
        $query = $this->db->get();              
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }else{
                return false;
            }
    }

   

}

