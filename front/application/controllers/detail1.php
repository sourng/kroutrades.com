<?php
class detail1 extends CI_Controller{

	public function index($page=''){
		$this->load->helper('url');
		$data['pageName']=$page;
		$data['Info']="Information on Home Page";
		$data['hotcategory']='hot_category';
		$data['brandShowCase']='brand_show_case';
		$this->load->view('front/detail1',$data);
	}
}



