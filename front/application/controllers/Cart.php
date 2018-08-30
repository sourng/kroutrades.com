<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cart extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->helper('url');
	    $this->load->model('M_Products','mProduct'); 
		$this->load->model('Cart_model');
		
		if($this->session->userdata['logged_in']==false){
			redirect('front/login');
		}

		// if(!isset($this->session->userdata['logged_in'])){
		// 	// $this->load->view('cart');
		// 	redirect('cart');
        // }else{
		// 	// $this->load->view('front/login');
		// 	redirect('login');
        // }

	}

	public function index()
	{	
		$this->data['title'] = 'Shopping Carts';

		if (!$this->cart->contents()){
			$this->data['message'] = '<p>Your cart is empty!</p>';
		}else{
			$this->data['message'] = $this->session->flashdata('message');
		}

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


		// $this->load->view('cart', $this->data);
		// $this->load->view('front/checkout',$this->data);
		$this->load->view('front/checkout/order',$data);
	
	}

	public function add()
	{
		$this->load->model('Cart_model');
	
		$insert_room = array(
			'id' => $this->input->post('id'),
			'name' => $this->input->post('name'),
			'price' => $this->input->post('price'),
			'qty' => 1
		);		

		$this->cart->insert($insert_room);
			
		redirect('cart');
	}
	
	function remove($rowid) {
		if ($rowid=="all"){
			$this->cart->destroy();
		}else{
			$data = array(
				'rowid'   => $rowid,
				'qty'     => 0
			);

			$this->cart->update($data);
		}
		
		redirect('cart');
	}	

	function update_cart(){
 		foreach($_POST['cart'] as $id => $cart)
		{			
			$price = $cart['price'];
			$amount = $price * $cart['qty'];
			
			$this->Cart_model->update_cart($cart['rowid'], $cart['qty'], $price, $amount);
		}
		
		redirect('cart');
	}	


		function order(){

			$cus_id=$this->session->userdata['logged_in']['cus_id'];

			$order_pay =$this->input->post('order_pay');

			if($order_pay == 'Credit Card'){
				$data = '';
				$data['email']=$this->input->post('c_email_address');
				$data['first_name']=$this->input->post('c_first_name');
				$data['name_on_card']=$this->input->post('c_name_on_card');
				$data['card_number']=$this->input->post('c_card_number');
				$data['c_card_expiration']=$this->input->post('c_card_expiration');
				$data['c_cvv_number']=$this->input->post('c_cvv_number');
				$data['c_year']=$this->input->post('c_year');

				$data['cus_id']=$cus_id;
	
				$this->db->insert('pay_credit_card',$data);

			}elseif($order_pay == 'Net Banking'){
				$data = '';
				$data['name']=$this->input->post('net_banking');
				$data['cus_id']=$cus_id;
				$this->db->insert('pay_net_bank',$data);

			}elseif($order_pay == 'Debit Card'){
				$data = '';
				$data['name_on_card']=$this->input->post('d_name_on_card');
				$data['card_number']=$this->input->post('d_card_number');
				$data['card_expiration']=$this->input->post('d_card_expiration');
				$data['cvv_number']=$this->input->post('d_cvv_number');
				$data['year']=$this->input->post('d_year');
				$data['cus_id']=$cus_id;
				$this->db->insert('pay_dedit_card',$data);

			}
			
			$order_cart = $this->cart->contents();

			foreach ($order_cart as $item){
				$order['pro_id'] = $item['id'];
				$order['cus_id'] = $cus_id;

				$this->db->insert('orders',$order);
				$order_id = $this->db->insert_id();
		
				$order_item['order_id'] = $order_id;
				$order_item['pro_id'] = $item['id'];
				$order_item['qty'] = $item['qty'];
				$order_item['unitprice'] = $item['price'];
				$order_item['price'] = $item['subtotal'];
				$this->db->insert('orders_item',$order_item);
			}
			
		$this->cart->destroy();
		redirect('cart');

		}
}