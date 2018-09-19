<?php
class M_ad extends CI_Model{

	function get_category(){	

        $this->db->select('*');   
        $this->db->from('categories');  
        $this->db->where('cat_status','Y');  

		$query=$this->db->get();
          
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }else{
                return false;
            }
	}

    function get_category_sub1(){  

        $this->db->select('*');   
        $this->db->from('category_sub1');  
        $this->db->where('subcate_status','Y');  

        $query=$this->db->get();
          
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }else{
                return false;
            }
    }

    function get_category_sub2($subcat2_id =''){  

        $this->db->select('*');   
        $this->db->from('category_sub2'); 
         
            if ($subcat2_id != '') {
                 $this->db->where('subcat2_id',$subcat2_id);  
            }
       
        $this->db->where('subcate_status','Y');  
         //$this->db->group_by('sub_cat1_id');   

        $query=$this->db->get();
          
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }else{
                return false;
            }
    }


    function get_ad_form($subcat2_id = '')
     {  
        $sql="Select sub1.*,sub2.* from category_sub1 as sub1 join category_sub2 as sub2 on sub1.sub_cat1_id = sub2.sub_cat1_id where sub2.subcat2_id =".$subcat2_id;
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
	

 function get_provinces(){  

        $this->db->select('*');   
        $this->db->from('op_provinces'); 
        $query=$this->db->get();
          
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