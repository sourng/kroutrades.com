<?php
class Search extends CI_Controller{
	public function __construct()
		{
		    parent::__construct();
			
			$this->load->helper('url');
	
		    $this->load->model('M_search','search'); 

            $this->load->library(['form_validation', 'encryption','session']);

            // Load session library
            $this->load->library('session');
            // Load database
            $this->load->model('login_database');
            $this->path_image = base_url()."uploads";

		}



	public function index(){

	}

    public function product($str=''){



     $product =$this->search->get_product($str);
     $s="";
	    if ($product != false) {
	    	 foreach ($product as $row) { 
		     	$s=$s. '
		     		<a>
		     		 <div class="pro col-md-12 col-xs-12" onclick="link('.$row['pro_id'].')">
		     		 	
							                  <div class="media block-update-card">
							                    <a class="pull-left" href="'.site_url().'detail/'.$row['pro_id'].'">
							                      <img width="40px" height="40px" class="" src="'.$this->path_image.'/product_features/'.$row['pro_feature'].'" alt="'.$row['pro_name'].'">
							                    </a>
							                   
							                    <div class="media-body update-card-body">  
							                                       
							                      <h4 class="media-heading" style="font-size: 15px; color: #5d5d5d;">'.$row['pro_name'].'</h4> 
							                       <p style="color:#ccc" >'.$row['pro_detail'].'</p>
							                     
							                    </div>
							                  </div>   
							                   
							                </div>
							                </a>
							             
		     	';
		     }
		     echo $s;
	    }else{
	    	echo '<div style=" text-align:  center; color: #ccc;">Search "'.$str.'" not found!</div>';
	    }

    }


     public function category($cat = '' , $str=''){



     $product =$this->search->get_category($cat , $str);
     $s="";
	    if ($product != false) {
	    	 foreach ($product as $row) { 
		     	$s=$s. '
		     			<a>
		     		 <div class="pro col-md-12 col-xs-12" onclick="link('.$row['pro_id'].')">
		     		 	
							                  <div class="media block-update-card">
							                    <a class="pull-left" href="'.site_url().'detail/'.$row['pro_id'].'">
							                      <img width="40px" height="40px" class="" src="'.$this->path_image.'/product_features/'.$row['pro_feature'].'" alt="'.$row['pro_name'].'">
							                    </a>
							                   
							                    <div class="media-body update-card-body">  
							                                       
							                      <h4 class="media-heading" style="font-size: 15px; color: #5d5d5d;">'.$row['pro_name'].'</h4> 
							                       <p style="color:#ccc" >'.$row['pro_detail'].'</p>
							                     
							                    </div>
							                  </div>   
							                   
							                </div>
							                </a>
		     	';
		     }
		     echo $s;
	    }else{
	    	echo '<div style=" text-align:  center; color: #ccc;">Search "'.$str.'" not found!</div>';
	    }

    }

}