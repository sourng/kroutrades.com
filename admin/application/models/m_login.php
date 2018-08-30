<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_login extends CI_Model {
	
	function __construct()
    {
        parent::__construct();
    }


   function get_login($table='' ,$email_column='' ,$password_column='', $email='' ,$password='') 
    {  
                $this->db->select('*');    
                $this->db->from($table);       
                $this->db->where($email_column,$email);       
                $this->db->where($password_column,$password);       
                $query = $this->db->get();              
                    if ($query->num_rows()>0) {

                        if ($table == 'company') {
                             foreach ($query->result_array() as $row) {

                                $this->session->set_userdata('log_admin', '0');
                                $this->session->set_userdata('log_company', '1');
                                $this->session->set_userdata('account_type', $table);
                                $this->session->set_userdata('email', $email);
                                // $this->session->set_userdata('password', $password);
                                 $this->session->set_userdata('id', $row['company_id']);
                                 $this->session->set_userdata('name', $row['comp_name']);
                                 $this->session->set_userdata('logo', $row['comp_logo']);
                                 $this->session->set_userdata('detail', $row['comp_detail']);
                                 $this->session->set_userdata('phone', $row['comp_phone']);



                                redirect(base_url() . 'index.php?company/dashboard', 'refresh');

                            }
                        }elseif($table == 'user'){
                             foreach ($query->result_array() as $row) {                          
                                $this->session->set_userdata('log_admin', '1');
                                $this->session->set_userdata('log_company', '0');
                                $this->session->set_userdata('account_type', $table);
                                $this->session->set_userdata('email', $email);
                                 // $this->session->set_userdata('password', $password);
                                $this->session->set_userdata('id', $row['user_id']);

                                 $this->session->set_userdata('name', $row['user_name']);
                                 $this->session->set_userdata('logo', '');
                                 $this->session->set_userdata('detail','');
                                 $this->session->set_userdata('phone', '');

                                redirect(base_url() . 'index.php?admin/dashboard', 'refresh');

                            }
                        }

                    }else{
                        echo 'Wrong';
                    }
    }


    function check_log(){
        $log_admin = $this->session->userdata('log_company');
        $log_company = $this->session->userdata('log_company');
        $account_type = $this->session->userdata('account_type');
        $email = $this->session->userdata('email');
        $password = $this->session->userdata('password');

        if ($log_admin == 1 || $log_company == 1) {

            if ($account_type == 'user') {
                redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
            }else{
                redirect(base_url() . 'index.php?'.$account_type.'/dashboard', 'refresh');
            }

            
        }else{
            redirect(base_url() . 'index.php?login/signin', 'refresh');
        }
    }
}
