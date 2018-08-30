<?php
class Detail extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
		    $this->load->model('M_Products','mProduct'); 

		    //Load Library and model.
			//$this->load->library('cart');
			//$this->load->model('billing_model');

		}

  public function index($proid=''){
    	$data=array();

		$sql_detail="SELECT * FROM products WHERE pro_id=".$proid;
		$data['pro_detail']=$this->mProduct->get_by_sql($sql_detail);

		$sql_detail_Pro_gallery="SELECT * FROM products_images WHERE pro_id=".$proid;
		$data['pro_detail_gallery']=$this->mProduct->get_by_sql($sql_detail_Pro_gallery);




		$sql_relate_pro="SELECT * FROM products WHERE pro_id<>".$proid;
		$data['pro_related']=$this->mProduct->get_by_sql($sql_relate_pro);

		// Menus
		$sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
			FROM categories as cat INNER JOIN category_sub1 as cats1 ON cat.cat_id=cats1.cat_id GROUP BY cat.cat_id";
		$data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

		$sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
		FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
		$data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

		$sql_cat_sub2="SELECT * FROM category_sub2";
		$data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);
		// End Menu


	    $data['proid']=$proid;
	    $data['Info']="Information on Home Page";
	    $data['hotcategory']='hot_category';
	    $data['brandShowCase']='brand_show_case';

    $this->load->view('front/detail',$data);
  }



}

