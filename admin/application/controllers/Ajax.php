<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ajax extends CI_Controller {

	    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
      	$this->load->model('m_product', '', true);
      	$this->load->model('m_check', '', true);

      	$this->load->helper('url');
    }
	 
	public function index()
	{	
		redirect(base_url() . 'index.php?login', 'refresh');
	}

	public function dashboard()
	{	
		$page_data['page_name'] = 'dashboard';
		$page_data['page_head'] = 'dashboard_head';
		$page_data['page_footer'] = 'dashboard_footer';
		$this->load->view('index',$page_data);
	}

	public function product($param1 = '', $param2 = '', $param3 = '')
	{	

		if ($param1 == 'list'){

			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'product_head';
			$page_data['page_footer'] = 'product_footer';
			$status='Y';

			if ($param2 == 'active'){
			$status='Y';
			} elseif ($param2 == 'deleted'){
				$status='N';
			}

			$page_data['form_name']='form_product_list';
			$page_data['product'] = $this->m_product->get_product_view($status);
		}elseif ($param1 == 'add') {

			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['category'] = $this->m_product->get_category_view();
			$page_data['form_name']='form_product_add';
			
			if ($param2 == 'save') {

				$data['cat_id'] = $this->input->post('category');
				$data['pro_name'] = $this->input->post('product_name');

				$sizes = $this->input->post('size');
				$data['pro_size']= '';
				foreach ($sizes as $size=>$value) {			
					$data['pro_size'] .= $value.',';					
				}
				$data['pro_size'] = rtrim($data['pro_size'],",");
				$data['pro_price'] = $this->input->post('price');
				$data['pro_discount'] = $this->input->post('discount');
				$data['pro_detail'] = $this->input->post('detail');
				$data['pro_description'] = $this->input->post('description');

				$pro_image = uniqid(time(), true).'.jpg';
				$data['pro_feature'] = $pro_image;

				$this->db->insert('products',$data);

				$pro_id = $this->db->insert_id();				
				move_uploaded_file($_FILES['feature']['tmp_name'],'./public/images/product_images/' . $pro_image);

				if ($this->input->post('save-type') == 'save-new') {
					redirect('admin/product/add');
				}else{
					redirect('admin/product/list');
				}
				

			}
		}

		$this->load->view('ajax',$page_data);

	}


	public function email($param1='',$param2='',$param3='')
	{	

		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

		$email = 'company@gmail.com';

		if ($this->m_check->check_email($email) == true) {
			echo 'true';
		}else{
			echo 'false';
		}
	}

}
