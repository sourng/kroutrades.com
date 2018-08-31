<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>

<!-- For Cart -->
<!-- jquery-3.2.1.js -->

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
                    $('#top_cart_count').load("<?php echo site_url('front/show_count_cart');?>");
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
                    $('#cart-'+row_id).remove();

                    $('.toal-price').load("<?php echo site_url('front/show_total_price_cart');?>");

                    

                     $.get("<?php echo site_url('front/show_count_cart');?>", function(count){
                         $('#top_cart_count').html(count);
                        $('.cart-title').html(count + ' Items in my cart');
                    });
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
    $("#search").val('');
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

</script>
