<?php
class M_image extends CI_Model{
	
	function get_image($path='', $img='', $w='', $h='')
	 {  
      
       return base_url(). "timthumb.php?src=".base_url().$path.$img."&w=".$w."&h=".$h."&q=100";
    }


    function get_image_feature_random()
     {  
      
     
       $sql="SELECT pro_id , pro_feature from products order by RAND() limit 1";
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
