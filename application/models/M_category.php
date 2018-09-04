<?php
class M_category extends CI_Model{
	function get_all_category(){
	   $sql = "Select distinct p.subcat2_id ,c.subcat_name,p.cat_id from products as p join category_sub2 as c on p.subcat2_id = c.subcat2_id group by p.subcat2_id";


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