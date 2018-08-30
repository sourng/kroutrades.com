<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
      	$this->load->model('m_login', '', true);
    }
	 
	public function index()
	{	
		$this->m_login->check_log();
	}

	public function signin($param1 = '', $param2 = '', $param3 = '')
	{	
		$page_data['page_name'] = 'signin';
		$page_data['page_head'] = 'signin_head';
		$page_data['page_footer'] = 'signin_footer';


		if ($param1 == 'log') {

			$account_type = $this->input->post('account');

			if ($account_type == 'admin') {
				
				$table ='user';
				$email_column ='user_email';
				$password_column ='user_password';
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$this->m_login->get_login($table ,$email_column ,$password_column, $email ,$password);
				

			}elseif($account_type == 'company'){

				$table ='company';
				$email_column ='comp_email';
				$password_column ='comp_pass';
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$this->m_login->get_login($table ,$email_column ,$password_column, $email ,$password);

			}




		}


		$this->load->view('signin',$page_data);		

	}
	

	public function signup($param1 = '', $param2 = '', $param3 = '')
	{	
		$page_data['page_name'] = 'signup';
		$page_data['page_head'] = 'signup_head';
		$page_data['page_footer'] = 'signup_footer';
		$this->load->view('signup',$page_data);
	}

	public function signout()
	{	
	
        $this->session->sess_destroy();
       	//$this->session->set_flashdata('logout_notification', 'logged_out');
        redirect(base_url() . 'index.php?login', 'refresh');
	}
}
