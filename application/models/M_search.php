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

    function get_product_load_more($start ='',$limit = '' ,$subcat2='')
     {  
       

        if ($subcat2 == '' || $subcat2 == 0) {

            $sql="SELECT * FROM products as p  limit " .$start .",".$limit;
        }else{
             $sql="SELECT * FROM products as p WHERE p.subcat2_id=". $subcat2 ." limit " .$start .",".$limit;
        }
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
