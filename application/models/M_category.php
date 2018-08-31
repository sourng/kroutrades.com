<?php
class M_category extends CI_Model{
	function get_all_category(){
	
		$this->db->select('*');    
        $this->db->from('categories');  
        
      
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