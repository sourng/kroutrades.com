<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_product extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }


   function get_product_view($status='',$company_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('products');       
        $this->db->where('pro_status' ,$status);
        
        if ($company_id != '') {
            $this->db->where('company_id' ,$company_id);    
        }       
          
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

    function get_product_edit($pro_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('products');       
        $this->db->where('pro_id' ,$pro_id);       
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

    function get_category_view($status='') 
    {  
        $this->db->select('*');    
        $this->db->from('categories');
        if ($status != '') {
            $this->db->where('cat_status' ,$status);    
        }            
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

     function get_category_edit($cat_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('categories');
        $this->db->where('cat_id' ,$cat_id); 
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

      function get_category_sub1_view($status='') 
    {  
        $this->db->select('*');    
        $this->db->from('category_sub1');
         if ($status != '') {
            $this->db->where('subcate_status' ,$status);    
        }    
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

      function get_category_sub1_edit($sub_cat1_id) 
    {  
        $this->db->select('*');    
        $this->db->from('category_sub1');
        $this->db->where('sub_cat1_id' ,$sub_cat1_id); 
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

     function get_category_sub2_view($status) 
    {  
        $this->db->select('*');    
        $this->db->from('category_sub2');
         if ($status != '') {
            $this->db->where('subcate_status' ,$status);    
        }    
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

      function get_category_sub2_edit($subcat2_id) 
    {  
        $this->db->select('*');    
        $this->db->from('category_sub2');
        $this->db->where('sub_cat2_id' ,$subcat2_id); 
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

     function get_products_images_edit($pro_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('products_images');  
        $this->db->where('pro_id' ,$pro_id);          
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


    function get_products_size($pro_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('product_size');         
        $query = $this->db->get();              
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }
    }


    function get_company($comp_status='',$company_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('company');
        if ($company_id != '') {
            $this->db->where('company_id',$company_id);
        }elseif ($comp_status != '') {
            $this->db->where('comp_status' ,$comp_status);    
        }          
        $query = $this->db->get();              
            if ($query->num_rows()>0) {
                foreach ($query->result_array() as $row) {
                    $data[]=$row;
                }
                return $data;
            }
    }


}

