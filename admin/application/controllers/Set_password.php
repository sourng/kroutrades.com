<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Set_password extends CI_Controller {


	    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
      	$this->load->model('m_product', '', true);
      	$this->load->model('m_order', '', true);
      	$this->upload_path = '../uploads';

      	$this->load->helper('url');
    }


	public function index()

	{
		$company_id = $this->session->userdata('id');
		echo $company_id;

		$this->load->view('set_password');

	}

	public function login()
	{
		$company_id = $this->session->userdata('id');

		$data['comp_pass'] = $this->input->post('password');

		$this->db->where('company_id' ,$company_id);
		$this->db->update('company' ,$data);

		 redirect(base_url() . 'index.php?company/dashboard', 'refresh');
	}
}
