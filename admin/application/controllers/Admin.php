<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	    function __construct()
    {
        parent::__construct();
        $this->load->database();
        /*cache control*/
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
      	$this->load->model('m_product', '', true);
      	$this->load->model('m_login', '', true);
      	$this->load->model('m_order', '', true);
      	$this->load->library('form_validation');
      	$this->load->helper('url');
      	$this->upload_path = '../uploads';
    }
	 
	public function index()
	{	
		$this->m_login->check_log();		
		
	}

	public function dashboard()
	{	
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');
        $page_data['page'] = 'dashboard';
		$page_data['page_name'] = 'dashboard';
		$page_data['page_head'] = 'dashboard_head';
		$page_data['page_footer'] = 'dashboard_footer';
		$page_data['folder'] = 'admin';
		$page_data['page_sub'] = '';
		$this->load->view('index',$page_data);
	}

	public function profile()
	{	
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');
        $page_data['page'] = 'profile';
		$page_data['page_name'] = 'profile';
		$page_data['page_head'] = 'product_head';
		$page_data['page_footer'] = 'product_footer';
		$page_data['folder'] = 'admin';
		$page_data['page_sub'] = '';
		$this->load->view('index',$page_data);
	}

	public function product($param1 = '', $param2 = '', $param3 = '')
	{	
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');


		$page_data['folder'] = 'admin';
		$page_data['action'] = 'product_action';
		$page_data['page'] = 'product';
		$page_data['page_sub'] = '';

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
			$page_data['product_size'] = $this->m_product->get_products_size();
			$page_data['company'] = $this->m_product->get_company();
			$page_data['form_name']='form_product_add';
			
			if ($param2 == 'save') {

				$data['company_id'] = $this->input->post('company');
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

					redirect('admin/product/add');
				}else{
					redirect('admin/product/list');
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
			$page_data['company'] = $this->m_product->get_company();			
			$page_data['form_name']='form_product_edit';

			 if ($param2 == 'update') {

			 	$pro_id = $param3;
			 	$data['company_id'] = $this->input->post('company');
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
					redirect('admin/product/list/active');
				}else{
					redirect('admin/product/list/deleted');
				}*/
				
				redirect('admin/product/edit/'.$pro_id);

			 }


		}elseif ($param1 == 'delete') {

			$pro_id = $param2;
			$data['pro_status'] = 'N';
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products',$data);

			redirect('admin/product/list/active');


		}elseif ($param1 == 'restore') {

			$pro_id = $param2;
			$data['pro_status'] = 'Y';
			$this->db->where('pro_id', $pro_id);
			$this->db->update('products',$data);

			redirect('admin/product/list/deleted');
		}

		$this->load->view('index',$page_data);

	}

	public function category($param1 = '', $param2 = '', $param3 = '' ,$param4 = '')
	{
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

		$page_data['folder'] = 'admin';
		$page_data['action'] = 'product_category_action';
		$page_data['page'] = 'category';
		$page_data['page_sub'] = 'main';

		if ($param1 == 'list'){			
			
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'product_head';
			$page_data['page_footer'] = 'product_footer';
			$page_data['form_name']='form_category_list';
			$status='Y';
			if ($param2 == 'active'){
			$status='Y';
			} elseif ($param2 == 'deleted'){
				$status='N';
			}
			$page_data['category'] = $this->m_product->get_category_view($status);
		}elseif ($param1 == 'add') {

			
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['form_name']='form_catgory_add';

			if ($param2 == 'save') {
				$data['pro_cat_name'] = $this->input->post('category_name');
				$data['pro_cat_icon'] = $this->input->post('category_icon');

				$this->db->insert('categories',$data);

				if ($this->input->post('save-type') == 'save-new') {

					redirect('admin/category/add');
				}else{
					redirect('admin/category/list');
				}
			}

		}elseif ($param1 == 'edit') {
			$cat_id = $param2;

			$page_data['cat_id'] = $cat_id ;
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['category'] = $this->m_product->get_category_edit($cat_id);
			$page_data['form_name']='form_catgory_edit';

			if ($param2 == 'update') {
				$cat_id = $param3;
				$data['pro_cat_name'] = $this->input->post('category_name');
				$data['pro_cat_icon'] = $this->input->post('category_icon');
				$this->db->where('cat_id', $cat_id);
				$this->db->update('categories',$data);

				$status = $this->input->post('edit-type');

				if ($status == 'Y') {
					redirect('admin/category/list/active');
				}else{
					redirect('admin/category/list/deleted');
				}

			}


		}elseif ($param1 == 'delete') {

			$cat_id = $param2;
			$data['cat_status'] = 'N';
			$this->db->where('cat_id', $cat_id);
			$this->db->update('categories',$data);

			redirect('admin/category/list/deleted');

		}elseif ($param1 == 'restore') {

			$cat_id = $param2;
			$data['cat_status'] = 'Y';
			$this->db->where('cat_id', $cat_id);
			$this->db->update('categories',$data);

			redirect('admin/category/list/deleted');

		}elseif ($param1 == 'sub1') {
			$page_data['page_sub'] = 'sub1';
			$page_data['action'] = 'product_category_sub1_action';
			if ($param2 == 'list'){			
				
				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'product_head';
				$page_data['page_footer'] = 'product_footer';
				$page_data['form_name']='form_category_sub1_list';
				$status='Y';
				if ($param3 == 'active'){
				$status='Y';
				} elseif ($param3 == 'deleted'){
					$status='N';
				}
				$page_data['category'] = $this->m_product->get_category_sub1_view($status);

			}elseif ($param2 == 'add' ) {

				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'form_head';
				$page_data['page_footer'] = 'form_footer';
				$page_data['form_name']='form_catgory_sub1_add';
				$page_data['category'] = $this->m_product->get_category_view();

				if ($param3 == 'save') {

					$data['cat_id'] = $this->input->post('category');
					$data['subcat_name'] = $this->input->post('category_name');
					$data['subcat_icon'] = $this->input->post('category_icon');

					$this->db->insert('category_sub1',$data);

					if ($this->input->post('save-type') == 'save-new') {

						redirect('admin/category/sub1/add/'.$this->input->post('category'));
					}else{
						redirect('admin/category/sub1/list');
					}

				}

			}elseif ($param2 == 'edit' ) {

				$sub_cat1_id = $param3;

				$page_data['sub_cat1_id'] = $sub_cat1_id;

				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'form_head';
				$page_data['page_footer'] = 'form_footer';
				$page_data['form_name']='form_catgory_sub1_edit';

				$page_data['category'] = $this->m_product->get_category_view();
				$page_data['category_sub1'] = $this->m_product->get_category_sub1_edit($sub_cat1_id);

				if ($param3 == 'update') {
					$sub_cat1_id = $param4;
					$data['cat_id'] = $this->input->post('category');
					$data['subcat_name'] = $this->input->post('category_name');
					$data['subcat_icon'] = $this->input->post('category_icon');
					$this->db->where('sub_cat1_id', $sub_cat1_id);
					$this->db->update('category_sub1',$data);

					$status = $this->input->post('edit-type');

					if ($status == 'Y') {
						redirect('admin/category/sub1/list/active');
					}else{
						redirect('admin/category/sub1/list/deleted');
					}

				}

			}elseif ($param2 == 'delete' ) {	
				$sub_cat1_id = $param3;
				$data['subcate_status'] = 'N';
				$this->db->where('sub_cat1_id', $sub_cat1_id);
				$this->db->update('category_sub1',$data);

				redirect('admin/category/sub1/list/deleted');

			}elseif ($param2 == 'restore' ) {
				$sub_cat1_id = $param3;
				$data['subcate_status'] = 'Y';
				$this->db->where('sub_cat1_id', $sub_cat1_id);
				$this->db->update('category_sub1',$data);

				redirect('admin/category/sub1/list/active');
			}



		}elseif ($param1 == 'sub2') {

			
			$page_data['page_sub'] = 'sub2';
			$page_data['action'] = 'product_category_sub2_action';
			if ($param2 == 'list'){			
				
				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'product_head';
				$page_data['page_footer'] = 'product_footer';
				$page_data['form_name']='form_category_sub2_list';
				$status='Y';
				if ($param3 == 'active'){
				$status='Y';
				} elseif ($param3 == 'deleted'){
					$status='N';
				}
				$page_data['category'] = $this->m_product->get_category_sub2_view($status);

			}elseif ($param2 == 'add' ) {

				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'form_head';
				$page_data['page_footer'] = 'form_footer';
				$page_data['form_name']='form_catgory_sub2_add';
				$page_data['category_sub1'] = $this->m_product->get_category_sub1_view();

				if ($param3 == 'save') {

					$data['sub_cat1_id'] = $this->input->post('category');
					$data['subcat_name'] = $this->input->post('category_name');
					$data['subcat_icon'] = $this->input->post('category_icon');

					$this->db->insert('category_sub2',$data);

					if ($this->input->post('save-type') == 'save-new') {

						redirect('admin/category/sub2/add/'.$this->input->post('category'));

					}else{
						redirect('admin/category/sub2/list');
					}

				}

			}elseif ($param2 == 'edit' ) {

				$subcat2_id = $param3;

				$page_data['subcat2_id'] = $subcat2_id;

				$page_data['page_name'] = 'product';
				$page_data['page_head'] = 'form_head';
				$page_data['page_footer'] = 'form_footer';
				$page_data['form_name']='form_catgory_sub2_edit';

				$page_data['category_sub1'] = $this->m_product->get_category_sub1_view();
				$page_data['category_sub2'] = $this->m_product->get_category_sub2_edit($subcat2_id);

				if ($param3 == 'update') {
					$subcat2_id = $param4;
					$data['sub_cat1_id'] = $this->input->post('category');
					$data['subcat_name'] = $this->input->post('category_name');
					$data['subcat_icon'] = $this->input->post('category_icon');
					$this->db->where('subcat2_id', $subcat2_id);
					$this->db->update('category_sub2',$data);

					$status = $this->input->post('edit-type');

					if ($status == 'Y') {
						redirect('admin/category/sub2/list/active');
					}else{
						redirect('admin/category/sub2/list/deleted');
					}

				}

			}elseif ($param2 == 'delete' ) {	
				$subcat2_id = $param3;
				$data['subcate_status'] = 'N';
				$this->db->where('subcat2_id', $subcat2_id);
				$this->db->update('category_sub2',$data);

				redirect('admin/category/sub1/list/deleted');

			}elseif ($param2 == 'restore' ) {
				$subcat2_id = $param3;
				$data['subcate_status'] = 'Y';
				$this->db->where('subcat2_id', $subcat2_id);
				$this->db->update('category_sub2',$data);

				redirect('admin/category/sub1/list/active');
			}


		}
		$this->load->view('index',$page_data);
	}

	public function company($param1 = '', $param2 = '', $param3 = '')
	{	
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');


		$page_data['folder'] = 'admin';
		$page_data['action'] = 'company_action';
		$page_data['page'] = 'company';
		$page_data['page_sub'] = '';

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

			$page_data['form_name']='form_company_list';
			$page_data['company'] = $this->m_product->get_company($status);

		}elseif ($param1 == 'add') {
			
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';
			$page_data['category'] = $this->m_product->get_category_view();
			$page_data['product_size'] = $this->m_product->get_products_size();
			$page_data['company'] = $this->m_product->get_company();
			$page_data['form_name']='form_company_add';
			
			if ($param2 == 'save') {

				$data['comp_name'] = $this->input->post('company_name');
				$data['site'] = $this->input->post('company_site');
				$data['fb'] = $this->input->post('company_fb');
				$data['comp_detail'] = $this->input->post('company_detail');
				$data['comp_extra1'] = $this->input->post('company_extra1');
				$data['comp_extra2'] = $this->input->post('company_extra2');
				$data['comp_extra3'] = $this->input->post('company_extra3');
				$data['comp_extra4'] = $this->input->post('company_extra4');
				$data['comp_address'] = $this->input->post('company_address');
				$data['comp_location'] = $this->input->post('company_location');
				$data['comp_email'] = $this->input->post('company_email');
				$data['comp_phone'] = $this->input->post('company_phone');
				$data['comp_pass'] = $this->input->post('password');
				//$data[''] = $this->input->post('confirm_password');
				
				$logo = uniqid(time(), true).'.jpg';
				$data['comp_logo'] = $logo;
		
						$this->db->insert('company',$data);
						$company_id = $this->db->insert_id();				
						move_uploaded_file($_FILES['logo']['tmp_name'],$this->upload_path.'/product_company/' . $logo);

						if ($this->input->post('save-type') == 'save-new') {

							redirect('admin/company/add');
						}else{
							redirect('admin/company/list');
						}
					

				

			}
		}elseif ($param1 == 'edit') {

			$company_id = $param2;


			$page_data['company_id'] = $company_id;
			$page_data['page_name'] = 'product';
			$page_data['page_head'] = 'form_head';
			$page_data['page_footer'] = 'form_footer';			
			$page_data['company'] = $this->m_product->get_company('',$company_id);			
			$page_data['form_name']='form_company_edit';

			 if ($param2 == 'update') {

			 	$company_id = $param3;
			 	$data['comp_name'] = $this->input->post('company_name');
				$data['site'] = $this->input->post('company_site');
				$data['fb'] = $this->input->post('company_fb');
				$data['comp_detail'] = $this->input->post('company_detail');
				$data['comp_extra1'] = $this->input->post('company_extra1');
				$data['comp_extra2'] = $this->input->post('company_extra2');
				$data['comp_extra3'] = $this->input->post('company_extra3');
				$data['comp_extra4'] = $this->input->post('company_extra4');
				$data['comp_address'] = $this->input->post('company_address');
				$data['comp_location'] = $this->input->post('company_location');
				$data['comp_email'] = $this->input->post('company_email');
				$data['comp_phone'] = $this->input->post('company_phone');
				$data['comp_pass'] = $this->input->post('password');
				//$data[''] = $this->input->post('confirm_password');

				

				$logo= $_FILES['logo']['tmp_name']; 
                $logo2= $this->input->post('logo2');

               if($logo!=''){
					$logo = uniqid(time(), true).'.jpg';
					$data['comp_logo'] = $logo;         
                    move_uploaded_file($_FILES['logo']['tmp_name'],$this->upload_path.'/product_company/' . $logo);
               }else{                       
                        $data['comp_logo'] = $logo2; 
               } 


				$this->db->where('company_id',$company_id);			
				$this->db->update('company',$data);

				/*$status = $this->input->post('edit-type');

				if ($status == 'Y') {
					redirect('admin/company/list/active');
				}else{
					redirect('admin/company/list/deleted');
				}*/

				redirect('admin/company/edit/'.$company_id);	
				

			 }


		}elseif ($param1 == 'delete') {

			$company_id = $param2;
			$data['comp_status'] = 'N';
			$this->db->where('company_id', $company_id);
			$this->db->update('company',$data);

			redirect('admin/company/list/active');


		}elseif ($param1 == 'restore') {

			$company_id = $param2;
			$data['comp_status'] = 'Y';
			$this->db->where('company_id', $company_id);
			$this->db->update('company',$data);

			redirect('admin/company/list/deleted');
		}

		$this->load->view('index',$page_data);

	}

	public function order($param1 = '', $param2 = '', $param3 = '' ,$param4 = '')
	{
		 if ($this->session->userdata('log_admin') != 1)
            redirect(base_url(), 'index.php?login', 'refresh');

       
		$page_data['folder'] = 'admin';
		$page_data['action'] = 'order_action';
		$page_data['page'] = 'order';
		$page_data['page_sub'] = '';

		if ($param1 == 'list'){
			
			$page_data['page_name'] = 'order';
			$page_data['page_head'] = 'product_head';
			$page_data['page_footer'] = 'product_footer';			
			
			$page_data['order'] = $this->m_order->get_order();			
			$page_data['form_name']='form_order_list';


		}
        $this->load->view('index',$page_data);
    }

}