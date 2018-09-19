<?php
class M_category extends CI_Model{
	function get_all_category(){
	   $sql = "Select distinct p.cat_id ,c.subcat_name,c.sub_cat1_id,p.cat_id from products as p join category_sub1 as c on p.cat_id = c.cat_id ";


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