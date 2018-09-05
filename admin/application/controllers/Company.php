<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

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
		$this->m_login->check_log();		
	}

	public function dashboard()
	{	
		 if ($this->session->userdata('log_company') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

		$page_data['page'] = 'dashboard';
		$page_data['page_name'] = 'dashboard';
		$page_data['page_head'] = 'dashboard_head';
		$page_data['page_footer'] = 'dashboard_footer';
		$page_data['folder'] = 'company';
		$this->load->view('index',$page_data);
	}

	public function product($param1 = '', $param2 = '', $param3 = '')
	{	
		 if ($this->session->userdata('log_company') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

		$session_company_id = $this->session->userdata('id');
		$page_data['folder'] = 'company';
		$page_data['page'] = 'product';
		
		
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
			$page_data['product'] = $this->m_product->get_product_view($status,$session_company_id);

		}elseif ($param1 == 'add') {
			
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['category'] = $this->m_product->get_category_view();
			$page_data['product_size'] = $this->m_product->get_products_size();
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

				$data['company_id'] = $session_company_id;

				$pro_image_name = uniqid(time(), true).'.jpg';
				$data['pro_feature'] = $pro_image_name;

				$this->db->insert('products',$data);

				$pro_id = $this->db->insert_id();				
				move_uploaded_file($_FILES['feature']['tmp_name'],$this->upload_path.'/product_features/' . $pro_image_name);

				$images = $_FILES['images']['tmp_name'];
				//$data['pro_image']= '';
					foreach ($images as $image => $value) {	
					$pro_image_name = $pro_id .'-'. uniqid(time(), true).'.jpg';	
					$data2['pro_id'] = $pro_id ;	
					$data2['pro_image'] = $pro_image_name;	
					$data2['pro_img_position'] = $image;

						if($value <> ''){
						$this->db->insert('products_images',$data2);
						move_uploaded_file($images[$image],$this->upload_path.'/product_images/' . $pro_image_name);				
					}
				}
				

				if ($this->input->post('save-type') == 'save-new') {

					redirect('company/product/add');
				}else{
					redirect('company/product/list');
				}

			}
		}elseif ($param1 == 'edit') {

			$pro_id = $param2;


			$page_data['pro_id'] = $pro_id;

			
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['category'] = $this->m_product->get_category_view();
			$page_data['product_edit'] = $this->m_product->get_product_edit($pro_id);
			$page_data['product_images'] = $this->m_product->get_products_images_edit($pro_id);			
			$page_data['product_size'] = $this->m_product->get_products_size();			
			$page_data['form_name']='form_product_edit';

			 if ($param2 == 'update') {

			 	$pro_id = $param3;

			 	$data['cat_id'] = $this->input->post('category');
				$data['pro_name'] = $this->input->post('product_name');

				$sizes = $this->input->post('size');
				$sizes =array_unique($sizes);
				$data['pro_size']= '';
				foreach ($sizes as $size=>$value) {			
					$data['pro_size'] .= $value.',';					
				}
				$data['pro_size'] = rtrim($data['pro_size'],",");
				$data['pro_price'] = $this->input->post('price');
				$data['pro_discount'] = $this->input->post('discount');
				$data['pro_detail'] = $this->input->post('detail');
				$data['pro_description'] = $this->input->post('description');				

				$feature= $_FILES['feature']['tmp_name']; 
                $feature2= $this->input->post('feature2');

               if($feature!=''){
					$pro_image_name = uniqid(time(), true).'.jpg';
					$data['pro_feature'] = $pro_image_name;         
                    move_uploaded_file($_FILES['feature']['tmp_name'],$this->upload_path.'/product_features/' . $pro_image_name);
               }else{                       
                        $data['pro_feature'] = $feature2; 
               } 


                $table = array
                    (
                        'products_images'
                    );
				$this->db->where('pro_id',$pro_id);
				$this->db->delete($table);				
				$this->db->update('products',$data);

				

				$images = $_FILES['images']['tmp_name'];
				$image_edit = $this->input->post('images_edit');
				//$data['pro_image']= '';
				foreach ($images as $image => $value) {	

					$pro_image_name = $pro_id .'-'. uniqid(time(), true).'.jpg';	
					$data2['pro_id'] = $pro_id ;					
					$data2['pro_img_position'] = $image;

					if ($value <> '') {
					$data2['pro_image'] = $pro_image_name;	
					
					move_uploaded_file($images[$image],$this->upload_path.'/product_images/' . $pro_image_name);	
							
					}else{

						$data2['pro_image'] = $image_edit[$image];
					}	
					$this->db->insert('products_images',$data2);			
			
				}

				/*$status = $this->input->post('edit-type');

				if ($status == 'Y') {
					redirect('company/product/list/active');
				}else{
					redirect('company/product/list/deleted');
				}*/
				redirect('company/product/edit/'.$pro_id);
			 }


		}elseif ($param1 == 'delete') {

			$pro_id = $param2;
			$data['pro_status'] = 'N';
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products',$data);

			redirect('ajax/product/list/active');


		}elseif ($param1 == 'restore') {

			$pro_id = $param2;
			$data['pro_status'] = 'Y';
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products',$data);

			redirect('ajax/product/list/deleted');
		}

		$this->load->view('index',$page_data);

	}


	public function order($param1 = '', $param2 = '', $param3 = '' ,$param4 = '')
	{
		 
		 if ($this->session->userdata('log_company') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

        $session_company_id = $this->session->userdata('id');
       
		$page_data['folder'] = 'company';
		$page_data['action'] = 'order_action';
		$page_data['page'] = 'order';
		$page_data['page_sub'] = '';

		if ($param1 == 'list'){
			
			$page_data['page_name'] = 'order';
			$page_data['page_head'] = 'product_head';
			$page_data['page_footer'] = 'product_footer';			
			
			$page_data['order'] = $this->m_order->get_order($session_company_id);			
			$page_data['form_name']='form_order_list';


		}
        $this->load->view('index',$page_data);
    }

}
