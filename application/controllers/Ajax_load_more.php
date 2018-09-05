<?php
class Ajax_load_more extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
	
		    $this->load->model('M_search','search'); 
		     $this->load->model('M_image','image'); 

            $this->load->library(['form_validation', 'encryption','session']);

            // Load session library
            $this->load->library('session');
            // Load database
            $this->load->model('login_database');
            $this->path_image = base_url()."uploads";

		}



	public function index(){

	}

   


     public function product(){


     $product =$this->search->get_product_load_more($_POST["start"],$_POST["limit"],$_POST["subcat2"]);

	    if ($product != false) {
	    	 foreach ($product as $rows) { ?>
		     	
		     	 <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="<?php echo site_url();?>detail/<?php echo $rows['pro_id']; ?>">
                                        <img class="img-responsive" alt="product" src="<?php echo $this->image->get_image('uploads/product_features/', $rows['pro_feature'] , '500' , '500'); ?>" />
                                    </a>
                                    <div class="quick-view">
                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                        <a title="Add to compare" class="compare" href="#"></a>
                                        <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="<?php echo site_url();?>detail/<?php echo $rows['pro_id']; ?>"><?php echo $rows['pro_name']; ?></a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
									<?php
                                 $sellPrice=$rows['pro_price']-($rows['pro_price']*$rows['pro_discount'])/100;
                                $price=round($sellPrice,2);
                                 ?>

                                        <span class="price product-price">$<?php echo $price; ?></span>
                                        <span class="price old-price">$<?php echo $rows['pro_price']; ?></span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: #<?php echo $rows['sku']; ?></p>
                                        <p class="availability">Availability: <span>In stock</span></p>
                                        <div class="product-desc">
										<?php echo $rows['pro_description']; ?>
                                        </div>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add"><span></span>Add to Cart</a>
                                    </div>
                                </div>
                            </div>
                        </li>		

		   <?php  } 
		
	    }

    }

}

?>