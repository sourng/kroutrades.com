<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_order extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }


   function get_order() 
    {  
        $sql="SELECT ords.*,ords_item.*,pro.*,cus.*,com.* from
                orders as ords join
                orders_item as ords_item join
                products as pro join
                customers as cus join
                company as com on
                ords.order_id = ords_item.order_id and
                ords.cus_id = cus.cus_id and
                ords.pro_id and ords_item.pro_id = pro.pro_id and
                pro.company_id = com.company_id
            ";
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

    function get_pay_credit_card($cus_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('pay_credit_card');       
        $this->db->where('cus_id' ,$cus_id);
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

    function get_pay_dedit_card($cus_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('pay_dedit_card');       
        $this->db->where('cus_id' ,$cus_id);
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


    function get_pay_net_bank($cus_id='') 
    {  
        $this->db->select('*');    
        $this->db->from('pay_net_bank');       
        $this->db->where('cus_id' ,$cus_id);
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

