<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/responsive.css" />


    
    <title>Category Stype2 - Kute shop - themelock.com</title>

    <style>
        .loading {
            margin-left: 50px;
          border: 16px solid #f3f3f3;
          border-radius: 50%;
          border-top: 16px solid #ff3366;
          width: 120px;
          height: 120px;
          -webkit-animation: spin 2s linear infinite; /* Safari */
          animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
          0% { -webkit-transform: rotate(0deg); }
          100% { -webkit-transform: rotate(360deg); }
        }

        @keyframes spin {
          0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }
</style>
</head>
<body class="category-page right-sidebar search">
<!-- HEADER -->
<div id="header" class="header">

  
     <?php $this->load->view('include/top_header'); ?>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    

    <?php $this->load->view('include/main_header'); ?>

    <!-- END MANIN HEADER -->
   
    <?php  $this->load->view('include/nav_top_menu'); ?>

</div>
<!-- end header -->

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page"><?php 
            //echo $param2?$param2:'Categories'; 

            $subcat1_id=$param2?$param2:1; 
            $sqlGetSubCat2="SELECT subcat_name FROM category_sub1 WHERE sub_cat1_id=".$subcat1_id;
            $subCat2=$this->mProduct->get_by_sql($sqlGetSubCat2);
            echo $subCat2[0]['subcat_name'];

            ?></span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <!-- Today Deals -->
                    <?php $this->load->view('front/category/today_deals'); ?>
                <!-- End Today Deals -->

                <!-- ./block category  -->
                <!-- block filter -->
                <?php $this->load->view('front/category/right_filter'); ?>
                <!-- ./block filter  -->
                
                <!-- right silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="<?php echo base_url(); ?>public/assets/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>
                </div>
                <!--./right silde-->
                <!-- SPECIAL -->
                    <?php $this->load->view('front/category/special_product'); ?>
                <!-- ./SPECIAL -->
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">TAGS</p>
                    <div class="block_content">
                        <div class="tags">
                            <?php for($i=1;$i<=5;$i++){
                                ?>
                                <a href="#"><span class="level<?php echo $i;?>">actual <?php echo $i;?></span></a>
                                <?php
                            }
                            ?>
                            
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
                <!-- Testimonials -->
                <div class="block left-module">
                    <p class="title_block">Testimonials</p>
                    <div class="block_content">
                        <ul class="testimonials owl-carousel" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplay="true" data-autoplayHoverPause = "true" data-items="1">
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="<?php echo base_url()?>public/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="<?php echo base_url()?>public/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                            <li>
                                <div class="client-mane">Roverto & Maria</div>
                                <div class="client-avarta">
                                    <img src="<?php echo base_url()?>public/assets/data/testimonial.jpg" alt="client-avarta">
                                </div>
                                <div class="testimonial">
                                    "Your product needs to improve more. To suit the needs and update your image up"
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./Testimonials -->
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        <li>
                            <img src="<?php echo base_url();?>public/assets/data/category-slide.jpg" alt="category-slider">
                        </li>
                        <li>
                            <img src="<?php echo base_url();?>public/assets/data/slide-cart2.jpg" alt="category-slider">
                        </li>
                    </ul>
                </div>
                <!-- ./category-slider -->

                <!-- category short-description -->
                <div class="cat-short-desc">
                    <div class="desc-text text-left">
                        <p>
                            Mauris accumsan nulla vel diam. Sed in lacus ut enim adipiscing aliquet. Nulla venenatis. In pede mi, aliquet sit amet, euismod in, auctor ut, ligula. Aliquam dapibus tincidunt metus. Praesent justo dolor, lobortis quis, lobortis dignissim, pulvinar ac, lorem. Vestibulum sed ante. Donec sagittis euismod purus. Sed ut perspiciatis sit voluptatem accusantim doloremque laudantim.
                        </p>
                    </div>
                    <div class="cat-short-desc-products">
                        <ul class="row">
                            <li class="col-sm-3">
                                <div class="product-container">
                                    <div class="product-thumb">
                                    <a href="#"><img src="<?php echo base_url(); ?>public/assets/data/sub-cat1.jpg" alt="Product"></a>
                                    </div>
                                    <h5 class="product-name">
                                        <a href="#">Sub category 1</a>
                                        <span>(90)</span>
                                    </h5>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-container">
                                    <div class="product-thumb">
                                    <a href="#"><img src="<?php echo base_url(); ?>public/assets/data/sub-cat2.jpg" alt="Product"></a>
                                    </div>
                                    <h5 class="product-name">
                                        <a href="#">Sub category 2</a>
                                        <span>(55)</span>
                                    </h5>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-container">
                                    <div class="product-thumb">
                                    <a href="#"><img src="<?php echo base_url(); ?>public/assets/data/sub-cat3.jpg" alt="Product"></a>
                                    </div>
                                    <h5 class="product-name">
                                        <a href="#">Sub category 3</a>
                                        <span>(100)</span>
                                    </h5>
                                </div>
                            </li>
                            <li class="col-sm-3">
                                <div class="product-container">
                                    <div class="product-thumb">
                                    <a href="#"><img src="<?php echo base_url(); ?>public/assets/data/sub-cat4.jpg" alt="Product"></a>
                                    </div>
                                    <h5 class="product-name">
                                        <a href="#">Sub category 4</a>
                                        <span>(70)</span>
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ./category short-description -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">
                        <?php 
                        $subcat2_id=$param1?$param1:1; 
                        $sqlGetSubCat2="SELECT subcat_name FROM category_sub2 WHERE subcat2_id=".$subcat2_id;
                        $subCat2=$this->mProduct->get_by_sql($sqlGetSubCat2);
                        echo $subCat2[0]['subcat_name'];                        

                        ?>
                        <!--  <?php
                          $cate = 'All Categories';
                          foreach ($category as $row) {
                                if ($param2 == $row['subcat2_id']) {
                                    $cate = $row['subcat_name'];
                                }
                            } 
                            echo $cate;
                         ?>  -->

                        </span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid ">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list selected" >
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                     
                    <ul class="row product-list style2 list">

                       <div id="ajax_load"></div>
                       <div id="ajax_load_more"></div>

                        
                        
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
               <!--  <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">Next &raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div> -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>

<!-- Footer -->
<?php 
    $this->load->view('include/footer');
?>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->

<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>




<!-- For Cart -->
<!-- jquery-3.2.1.js -->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery-3.2.1.js"></script>
<script type="text/javascript">
    
     $(document).ready(function(){
        $('.add_cart').click(function(){
            var product_id    = $(this).data("productid");
            var product_name  = $(this).data("productname");
            var product_price = $(this).data("productprice");
            var quantity      = $('#' + product_id).val();
            $.ajax({
                url : "<?php echo site_url('front/add_to_cart');?>",
                method : "POST",
                data : {product_id: product_id, product_name: product_name, product_price: product_price, quantity: quantity},
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



$(document).click(function() {
    lightbg_clr();

})
function lightbg_clr() {
  
    $('#livesearch').css({"display":"none"});   
    //$("#search").focus();
    $(".sr-bg").css({"display":"none"}); 
    //$('#search-form')[0].reset();   
    /*$("#search").val('');*/
 };
function live_serach(str) {

   var cat = $('#Categories').val();
    var link =  "<?php echo site_url() ?>search/product/"+ str ;

    if (cat != 0) {
        link =  "<?php echo site_url() ?>search/category/"+cat +'/' + str ;
    }

    if (str.length == 0) {

        $("#livesearch").html("");
        $("#livesearch").css('border', '0px');
        $("#search-layer").css("width", "auto");
        $("#sr-bg").css("height", "0px");
        $("#livesearch").css("display", "block");
        return;
    } else {

        $("#search-layer").css("width", "100%");
        $("#search-layer").css("height", "100%");
        $("#livesearch").css("display", "block");
        $(".sr-bg").css({"display":"block"}); 
        $(".sr-bg").css("height", "200px");


        $.ajax({
            url: link,
            method: "GET",
            success: function(data) {
                $('#livesearch').html(data);
            }
        });

    }

}

function link(link=''){
   location.assign("<?php echo site_url() ?>detail/" + link);
}


   function Cat() {
    
    var subcat2_id = $('#Categories').val();
    var cat_id =$('#category-'+subcat2_id).data('cat-id');
    var str = $('input#search').val();

     $('form#search-form').attr('action', "<?php echo site_url() ?>front/category/"+cat_id+'/'+subcat2_id +'/'+ str);

};





$(document).ready(function(){
 var subcat2_id = $('#Categories').val();
 var limit = 1;
 var start = 0;
 var action = 'inactive';
 function load_data(limit, start)
 {
  $.ajax({
   url:"<?php echo site_url() ?>ajax_load_more/product",
   method:"POST",
   data:{limit:limit, start:start, subcat2:subcat2_id},
   cache:false,
    beforeSend: function() {
       $('#ajax_load_more').html(" <li class='col-sx-12 col-sm-4' id='loading'><div class='product-container'><div class='left-block'><div class='loading'></div></div></div></li>");
    },
   success:function(data)
   {
    $('#ajax_load').append(data);
    if(data == '')
    {
     $('#ajax_load_more').html(" <li class='col-sx-12 col-sm-4'><div class='product-container'><div class='left-block'><button type='button' class='btn btn-info'>No Data Found</button></div></div></li>");
     action = 'active';
    }
    else
    {
       

          setTimeout(function(){
            $('#loading').remove();
           }, 1000);
    
     action = "inactive";
    }
   }
  });
 }

 if(action == 'inactive')
 {
  action = 'active';
  load_data(limit, start);
 }
 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $(".product-list").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_data(limit, start);
   }, 1000);
  }
 });
 
});




</script>
</body>
</html>
