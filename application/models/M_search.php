<?php
class M_search extends CI_Model{
	
	function get_product($str)
	 {  
        $sql="SELECT * from products where pro_name like '%".$str."%' or pro_keyword like '%".$str."%' or tags like '%".$str."%' ";
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

    function get_category($cat, $str)
     {  
        $sql="SELECT * from products where subcat2_id =".$cat." and pro_status='Y' and pro_name like '%".$str."%' or pro_keyword like '%".$str."%' or tags like '%".$str."%' ";
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
