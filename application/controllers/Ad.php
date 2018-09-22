<?php
class Ad extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
	
		    $this->load->model('M_search','search'); 
		    $this->load->model('M_ad','ad'); 


            $this->load->library(['form_validation', 'encryption','session']);

            // Load session library
            $this->load->library('session');
            // Load database
            $this->load->model('login_database');
            $this->path_image = base_url()."uploads";

		}



	public function index(){

		$this->load->view('front/ad/ad');

	}

	public function category($param1=''){
		$data['param1'] =$param1;

		$data['category_sub2'] = $this->ad->get_category_sub2($param1);
		$ad_form = $this->ad->get_ad_form($param1);
		$data['form_name'] = $ad_form[0]['form_name'];

		$data['provinces'] = $this->ad->get_provinces();

		$this->load->view('front/ad/ad_form_',$data);

	}

	public function post($param1='', $param2=''){



		$data3['comp_name'] = $this->input->post('name');
		$data3['comp_phone'] = $this->input->post('phone');
		$data3['comp_email'] = $this->input->post('email');
		$data3['comp_province'] = $this->input->post('provinces');
		$data3['comp_location'] = $this->input->post('location');

		$this->db->insert('company',$data3);

		  $this->session->set_userdata('log_admin', '0');
                                $this->session->set_userdata('log_company', '1');
                                $this->session->set_userdata('account_type', 'company');
                                $this->session->set_userdata('email', $this->input->post('email'));
                                // $this->session->set_userdata('password', $password);
                                 $this->session->set_userdata('id', $this->db->insert_id());
                                 $this->session->set_userdata('name', $this->input->post('name'));
                                // $this->session->set_userdata('logo', $row['comp_logo']);


        $company_id = $this->db->insert_id();			

        //End company



		$cat_id = $this->ad->get_ad_form($param1);

		$data['cat_id'] = $cat_id[0]['cat_id'];
		$data['subcat2_id'] = $param1;
 		$data['pro_name'] = $this->input->post('title');

		
		if ($cat_id[0]['cat_id'] == 1) { //ad_mobile

			$data['condition'] = $this->input->post('condition');
			$data['pro_price'] = $this->input->post('price');
			
		}elseif ($cat_id[0]['cat_id'] == 2) { // ad_computer

			$data['condition'] = $this->input->post('condition');
			$data['pro_price'] = $this->input->post('price');

		
		}elseif ($cat_id[0]['cat_id'] == 4) { // ad_vehicles

			$data['modal'] = $this->input->post('modal');
			$data['year'] = $this->input->post('year');
			$data['tax_type'] = $this->input->post('tax_type');
			$data['pro_price'] = $this->input->post('price');
			$data['condition'] = $this->input->post('condition');

		}elseif ($cat_id[0]['cat_id'] == 5) { // ad_house

			$data['bedroom'] = $this->input->post('bedroom');
			$data['bathroom'] = $this->input->post('bathroom');
			$data['facing'] = $this->input->post('facing');
			$data['size'] = $this->input->post('size');
			$data['pro_price'] = $this->input->post('price');

		}elseif ($cat_id[0]['cat_id'] == 6) { // ad_jobs

			$data['experience'] = $this->input->post('experience');
			$data['salary'] = $this->input->post('salary');


		}

		
		$data['pro_description'] = $this->input->post('description');
		$data['company_id'] = $company_id;

		$pro_image_name = uniqid(time(), true).'.jpg';

		$data['pro_feature'] = $pro_image_name;

		$this->db->insert('products',$data);		

		$pro_id = $this->db->insert_id();		


		move_uploaded_file($_FILES['feature']['tmp_name'],'./uploads/product_features/' . $pro_image_name);

		//copy('./uploads/product_features/' . $pro_image_name, './uploads/product_images/' .$pro_image_name);

		//End Product


				$images = $_FILES['images']['tmp_name'];
				//$data['pro_image']= '';
				foreach ($images as $image => $value) {	
					$pro_image_name = $pro_id .'-'. uniqid(time(), true).'.jpg';	
					$data2['pro_id'] = $pro_id ;	
					$data2['pro_image'] = $pro_image_name;	
					$data2['pro_img_position'] = $image;

						if($value <> ''){
						$this->db->insert('products_images',$data2);
						move_uploaded_file($images[$image],'./uploads/product_images/' . $pro_image_name);				
					}
				}
		
		//End Product_image


		

	
				


		 redirect('/admin/index.php?set_password');

	}



}