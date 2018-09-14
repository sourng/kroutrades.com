<?php
class M_size extends CI_Model{
	
	function get_size($pro_id)
	 {  
        $sql="SELECT pro_size from products where pro_id =".$pro_id;
            $query=$this->db->query($sql);
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
