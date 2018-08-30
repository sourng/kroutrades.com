<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        $this->load->view('include/detail_head_script');
    ?> 
    
    <title><?php echo $pro_detail[0]['pro_name']; ?></title>
</head>
<body class="product-page right-sidebar">

<div id="header" class="header">
<div class="top-header">
    <?php 
        $this->load->view('include/detail_top_header');
    ?> 
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <?php 
        $this->load->view('include/main_header');
    ?> 
    <!-- END MANIN HEADER -->
    <?php 
		// $this->load->view('include/detail_navmenu_header');
		$this->load->view('include/nav_top_menu');
    ?>     
</div>

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <?php $this->load->view('include/detail_breadcrumb'); ?> 
        <!-- ./breadcrumb -->
        
        
        <!-- row -->
        <div class="row">

            <!-- Detail Right Sidebar -->
            <?php $this->load->view('front/detail/detail_right_sidebar'); ?>
            <!-- ./Detail Right Sidebar -->

            <!-- Center colunm-->

            <!-- Product-image -->
                <?php $this->load->view('front/detail/product_image'); ?>              
              <!-- ./tab product -->


            <!-- Related Product -->
                <?php $this->load->view('front/detail/related_product'); ?>
             <!-- ./box product -->

                        <!-- box product -->
            <!-- You might also like -->
			<?php $this->load->view('front/detail/also_like_product'); ?>     
                        <!-- ./box product -->
		</div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<!-- Footer -->
<?php $this->load->view('include/footer'); ?>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.elevatezoom.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/fancyBox/jquery.fancybox.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>


<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>



<!-- For Cart -->
<!-- jquery-3.2.1.js -->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    
     $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_feature    = $(this).data("profeature");

            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('front/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id,product_feature: product_feature, product_name: product_name, product_price: product_price, quantity: quantity},
                success: function(data){
                    //alert("Hello");
                    $('#detail_cart').html(data);
                    $('#count_cart').load("<?php echo site_url('front/load_cart_count');?>");
                
                }
            });
        });
 
         
        $('#detail_cart').load("<?php echo site_url('front/load_cart');?>");

        $('#count_cart').load("<?php echo site_url('front/load_cart_count');?>");
       

        
 
         
        $(document).on('click','.romove_cart',function(){
            var row_id=$(this).attr("id"); 
            $.ajax({
                url : "<?php echo site_url('front/delete_cart');?>",
                method : "POST",
                data : {row_id : row_id},
                success :function(data){
                    $('#detail_cart').html(data);
                    $('#count_cart').load("<?php echo site_url('front/load_cart_count');?>");

                }
            });
        });
    });
</script>

</body>
</html>
