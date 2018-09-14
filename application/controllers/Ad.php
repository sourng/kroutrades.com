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

		$this->load->view('front/ad/ad_form_',$data);

	}

	public function post($param1='', $param2=''){

		$cat_id = $this->ad->get_ad_form($param1);

		$data['cat_id'] = $cat_id[0]['cat_id'];
		$data['subcat2_id'] = $param1;
		$data['pro_name'] = $this->input->post('title');
		//$data[''] = $this->input->post('brand');
		$data['condition'] = $this->input->post('condition');
		$data['pro_price'] = $this->input->post('price');
		$data['pro_description'] = $this->input->post('description');

		$pro_image_name = uniqid(time(), true).'.jpg';

		$data['pro_feature'] = $pro_image_name;

		$this->db->insert('products',$data);		

		$pro_id = $this->db->insert_id();		

		$pro_image_name1 = $pro_id .'-'. uniqid(time(), true).'.jpg';	

		move_uploaded_file($_FILES['photo']['tmp_name'],'./uploads/product_features/' . $pro_image_name);

		copy('./uploads/product_features/' . $pro_image_name, './uploads/product_images/' .$pro_image_name1);




		
		

		$data2['pro_id'] = $pro_id ;	
		$data2['pro_image'] = $pro_image_name1;	
		$data2['pro_img_position'] = 0;

		$this->db->insert('products_images',$data2);


		


		$data3['comp_name'] = $this->input->post('name');
		$data3['comp_phone'] = $this->input->post('phone');
		$data3['comp_email'] = $this->input->post('email');
		//$data3[''] = $this->input->post('province');
		$data3['comp_location'] = $this->input->post('location');

		$this->db->insert('company',$data3);

		
		 redirect('detail/'.$pro_id);

	}



}