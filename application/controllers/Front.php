<?php
class Front extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
		    $this->load->model('M_Products','mProduct'); 
            $this->load->model('M_category','mCate'); 
		    $this->load->model('M_image','image'); 

		    //Load Library and model.
			//$this->load->library('cart');
            //$this->load->model('billing_model');
            
           // Load form validation library
            $this->load->library(['form_validation', 'encryption','session']);

            // Load session library
            $this->load->library('session');
            // Load database
            $this->load->model('login_database');

            $this->path_image = base_url(). "timthumb.php?src=".base_url()."uploads";

		}



	public function index($page=''){

		$data['pageName']=$page;
		$data['Info']="Information on Home Page";
		$data['hotcategory']='hot_category';
		$data['brandShowCase']='brand_show_case';

		$sql_best_seller="SELECT * FROM products";
		$data['best_seller']=$this->mProduct->get_by_sql($sql_best_seller);

		$sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
			FROM categories as cat INNER JOIN category_sub1 as cats1
			ON cat.cat_id=cats1.cat_id
			GROUP BY cat.cat_id";
		$data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

		$sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
		FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
		$data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

		$sql_cat_sub2="SELECT * FROM category_sub2";
		$data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);
		$data['category']=$this->mCate->get_all_category();


		$this->load->view('front/home',$data);
	}

	// Category
	public function category($param1='',$param2='',$param3=''){
		$data=array();
		$data['param1']=$param1;
		$data['param2']=$param2;
		$data['param3']=$param3;

		$data['pageName']=$param1;
		$data['Info']="Information on Home Page";
		$data['hotcategory']='hot_category';
		$data['brandShowCase']='brand_show_case';

		$sql_best_seller="SELECT * FROM products";
		$data['best_seller']=$this->mProduct->get_by_sql($sql_best_seller);

		$sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
			FROM categories as cat INNER JOIN category_sub1 as cats1 ON cat.cat_id=cats1.cat_id GROUP BY cat.cat_id";
		$data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

		$sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
		FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
		$data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

		$sql_cat_sub2="SELECT * FROM category_sub2";
		$data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);


		$sqlProCatList="SELECT * FROM products as p WHERE p.subcat2_id=". $param2 .' limit 0,6';
		$data['ProCatList']=$this->mProduct->get_by_sql($sqlProCatList);
		


        $data['category']=$this->mCate->get_all_category();
		$this->load->view('front/category/category',$data);
	}










	// ============= working on cart ==================

	public function add_to_cart(){ 
		$size=$this->input->post('size')?$this->input->post('size'):'M';
		$color=$this->input->post('color')?$this->input->post('color'):'Blue';
		$sku=$this->input->post('sku')?$this->input->post('sku'):'None';
		$condition=$this->input->post('condition')?$this->input->post('condition'):'New';

        $data = array(
            'id' => $this->input->post('product_id'), 
            'name' => $this->input->post('product_name'), 
            'price' => $this->input->post('product_price'), 
            'qty' => $this->input->post('quantity'),
            'img'=>$this->input->post('product_feature'),
            'options' => array('size' =>$size,
                                'color' => $color,
                                'sku' => $sku,
                                'Condition' => $condition
                                ),
        );
        $this->cart->insert($data);
        echo $this->show_cart(); 
         // echo $this->load_cart_count();
    }

    public function show_cart()
    {
    	$output = '';
        $no = 0;
    	$output.='
    	                
                ';
               $output.=' 
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">'. count($this->cart->contents()).' Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                ';
                               
                                 foreach ($this->cart->contents() as $items) {           
                                	$no++;                            
                                $output.='
                                <li class="product-info" id="cart-'.$items['rowid'].'">
                                    <h4 class="p-name" style="padding:10px 5px 10px 5px;">'.$items['name'].'</h4>
                                    <div class="p-left">
                                        <!-- <a href="#" class="remove_link"></a> -->
                                        <button type="button" id="'. $items['rowid'] .'" class="romove_cart btn btn-danger btn-sm remove_link" style="color:white; border-radius: 0px;">Cancel</button>

                                        <a href="#">
                                        <img class="img-responsive" src="'. base_url() .'uploads/product_features/'. $items['img'] .'" alt="'. $items['img'] .'">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p>Price :<i class="p-rice">'. number_format($items['price'],2).'$</i></p>
                                        <p>Qty:'. $items['qty'].'</p>
                                        <p>Amount: '. number_format($items['subtotal'],2).'$</p>
                                        
                                        
                                        
                                    </div>
                                </li>
                                ';
                                   }

                              $output.='  
                            </ul>
                        </div>
                         <div class="toal-cart">
                                <span>Total</span>
                                <span class="toal-price pull-right">'. number_format($this->cart->total(),2) .'$</span>
                            </div>
                        <div class="cart-buttons">
                            <a href="'. site_url().'cart" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            
    	';

    	return $output;
    	 // echo $this->load_cart_count();
    	
    }
 public function show_total_price_cart()
    {
    	echo number_format($this->cart->total(),2) .' $' ;
   }

  public function show_count_cart()
    {
    	echo  count($this->cart->contents());
   }



    public function show_cart1(){ 
        $output = '';
        $no = 0;
        $output.='
        		

        	<div class="cart-block-content">
	            <h5 class="cart-title">'. count($this->cart->contents()) .' Items in my cart</h5>
	            <div class="cart-block-list" >
	        <ul>

        ';
        foreach ($this->cart->contents() as $items) {
            $no++;
            $output .='
                            
                <li class="product-info">
                <h4 class="p-name" style="padding:10px 5px 10px 5px;">​ '.$items['name'].'</h4>
	                <div class="p-left"> 
	                    <a href="#">
	                    <img class="img-responsive" style="height:94px;" src="'. base_url() .'uploads/products/'.$items['img'].'" alt="p2">
	                    </a>
	                </div>
	                <div class="p-right">	                    
	                    <p>Price:<i class="p-rice">'.number_format($items['price'],2).' $</i></p>
	                    <p>Qty: '.$items['qty'].'</p>
	                    <p>Amount: '.number_format($items['subtotal'],2).' $</p>

	                    

	                    <button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">X</button>
	                    
	                </div>
	            </li>

	            
            ';
        }
        $output .= '
	         <div class="toal-cart">
	            <span>Total</span>
	            <span class="toal-price pull-right">'.number_format($this->cart->total(),2).' $</span>
	        </div>

         </ul> 
         </div>
                        
        <div class="cart-buttons">
            <a href="'.site_url().'order" class="btn-check-out">Checkout</a>
        </div>               
            
        ';
        return $output;

        echo $this->load_cart_count();
        // echo $this->load_cart_count_menu();
    }


    public function load_cart(){ 
        echo $this->show_cart();
        // echo $this->load_cart_count();
    }

		
	public function delete_cart(){ 
        $data = array(
            'rowid' => $this->input->post('row_id'), 
            'qty' => 0, 
        );
        $this->cart->update($data);
        
        echo $this->show_cart();
        // echo $this->load_cart_count();
    }

     public function load_cart_count(){ 

     	$output = '';
     	$output .= '
	        <span class="title">Shopping cart</span>
                    <span class="total">'.count($this->cart->contents()).' items - '. number_format($this->cart->total(),2) .' $</span>
           <span class="notify notify-left">'.count($this->cart->contents()).'</span>
        ';
     	echo $output;

       // echo count($this->cart->contents());
    }

    public function load_cart_count_menu(){      	
     	echo count($this->cart->contents());
    }












// ==================== LOGIN and LOGUT ====================

// Show login page
public function login() {

    $data['pageName']='User Login';
    $data['Info']="Information on Home Page";
    $data['hotcategory']='hot_category';
    $data['brandShowCase']='brand_show_case';

    $sql_best_seller="SELECT * FROM products";
    $data['best_seller']=$this->mProduct->get_by_sql($sql_best_seller);

    $sql_menu_cat="SELECT cat.cat_id,cat.pro_cat_name,cat.pro_cat_icon,cat.pro_cat_img,count(cat.cat_id) as subcount
        FROM categories as cat INNER JOIN category_sub1 as cats1
        ON cat.cat_id=cats1.cat_id
        GROUP BY cat.cat_id";
    $data['menu_category']=$this->mProduct->get_by_sql($sql_menu_cat);

    $sql_cat_sub1="SELECT cats2.*,cats1.subcat_name,cats1.sub_cat1_id,cats1.cat_id
    FROM category_sub1 as cats1 INNER JOIN category_sub2 as cats2 ON cats1.sub_cat1_id=cats2.sub_cat1_id GROUP BY cats2.sub_cat1_id";
    $data['menu_cat_sub1']=$this->mProduct->get_by_sql($sql_cat_sub1);

    $sql_cat_sub2="SELECT * FROM category_sub2";
    $data['menu_cat_sub2']=$this->mProduct->get_by_sql($sql_cat_sub2);
    

$this->load->view('front/login_form',$data);
    }

// Check for user login process
public function user_login_process() {

    // $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
    // $this->form_validation->set_rules('password', 'Password', 'trim|required|xss_clean');
    $this->form_validation->set_rules('username', 'Username', 'trim|required');
    $this->form_validation->set_rules('password', 'Password', 'trim|required');
    
    if ($this->form_validation->run() == FALSE) {
        if(isset($this->session->userdata['logged_in'])){
            //  $this->load->view('front/admin_page');
            redirect('front');
        }else{
             $this->load->view('front/login_form');
        }
    } else {
    $data = array(
    'username' => $this->input->post('username'),
    'password' => $this->input->post('password')
    );
    $result = $this->login_database->login($data);
    if ($result == TRUE) {
        $username = $this->input->post('username');
        $result = $this->login_database->read_user_information($username);
        if ($result != false) {
        $session_data = array(
        'username' => $result[0]->cus_name,
        'email' => $result[0]->cus_email,
        'cus_id'=>$result[0]->cus_id,
        'cus_phone'=>$result[0]->cus_phone,
        'cus_address'=>$result[0]->cus_address,
        'cus_avtar'=>$result[0]->cus_avtar,        
        );
    
    // Add user data in session
        $this->session->set_userdata('logged_in', $session_data);
        // $this->load->view('front/admin_page');
        redirect('front');
        }
    } else {
            $data = array(
            'error_message' => 'Invalid Username or Password'
            );
            $this->load->view('front/login_form', $data);
            }
        }
    }

    

    // Logout from admin page
    public function logout() {

        // Removing session data
        $sess_array = array(
            'username' => '',
            'email' => '',
            'cus_id'=> '',
            'cus_phone'=> '',
            'cus_address'=> ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        // $this->load->view('front/index', $data);
        redirect('front/index');
    }




}



