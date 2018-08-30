

<!DOCTYPE html>
<html>
<?php
if (isset($this->session->userdata['logged_in'])) {
$username = ($this->session->userdata['logged_in']['username']);
$email = ($this->session->userdata['logged_in']['email']);
} else {
header("location: login");
}
?>


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


<!-- bootstrap-theme.min.css -->
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/bootstrap-theme.min.css" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/smart_wizard.min.css" />
    <!-- Optional SmartWizard theme -->
    <link href="<?php //echo base_url();?>public/assets/css/smart_wizard_theme_circles.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php //echo base_url();?>public/assets/css/smart_wizard_theme_arrows.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>public/assets/css/smart_wizard_theme_dots.min.css" rel="stylesheet" type="text/css" />

    
    <title><?php echo $email; ?>Kute shop - themelock.com</title>



   <!-- Card Style -->

   
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- <link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'> -->
<!-- <link href='//fonts.googleapis.com/css?family=Alegreya+Sans:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'> -->
<!-- <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'> -->
<script type="text/javascript" src="<?php// echo base_url(); ?>public/js/jquery.min.js"></script>
   

   </head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">

    <?php $this->load->view('include/top_header'); ?>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    
	<?php $this->load->view('include/main_header'); ?>
    <!-- END MANIN HEADER -->
    

    <!-- END MANIN HEADER -->
   <?php  $this->load->view('include/nav_top_menu'); ?>

</div>
<!-- end header -->

<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Your shopping cart</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Shopping Cart Summary</span>
        </h2>
        <!-- ../page heading-->
         <div id="smartwizard"> 
            <ul> 
                <li><a href="#step-1">01. Summary</a></li> 
                <li><a href="#step-2">02. Signed in</a></li> 
                <li><a href="#step-3">03. Payment</a></li> 
                <!-- <li><a href="#step-4">04. Payment</a></li>  -->
                <!-- <li><a href="#step-5">05. Confirm</a></li> -->
            </ul>
 
 
 
            <div> 
                <div id="step-1" class=""> 
                     <div class="heading-counter warning" style="padding: 15px;">Your shopping cart contains:
                			<span style="color:white; background-color:#FF4523; padding: 8px;"> 1 </span> Product
            		</div>

            <div class="order-detail-content" style="width: 100%;
    overflow-x: scroll; padding-right:25px;">
                <table class="table table-bordered table-responsive cart_summary" >
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>
                    <tbody>
                    		<?php foreach ($this->cart->contents() as $items): ?>

                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="http://175.100.31.84/bookshop/admin/public/images/product_features/<?php echo $items['img']; ?>" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#"><?php echo $items['name']; ?></a></p>
                                <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>   
                                <small><a href="#">Size : S</a></small>
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span><?php echo number_format($items['price'],2); ?> $</span></td>
                            <td class="qty">
                                <!-- <input class="form-control input-sm" type="text" value="1">
                                <a href="#"><i class="fa fa-caret-up"></i></a>
                                <a href="#"><i class="fa fa-caret-down"></i></a> -->
                                
                                <div class="product-quantity">
                                    <input type="number" min="1" value="<?php echo $items['qty'] ?>">
                                </div>
                                <!-- <input  class="quantity qty<?php //echo $items['rowid'] ?> form-control" type="number" min="1" value="<?php echo $items['qty'] ?>">                     -->

                            </td>
                            <td class="price">
                            <div class="product-line-price">45.99</div>
                                <span><?php echo number_format($items['subtotal'],2); ?> $</span>
                            </td>
                            <td class="action">
                                <!-- <a href="#">Delete item</a> -->

                                <button type="button" id="'.$items['rowid'].'" class="romove_cart btn btn-danger btn-sm">X</button>
                            </td>
                        </tr>

                    	<?php endforeach; ?>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (tax incl.)</td>
                            <td colspan="2"><?php echo number_format($this->cart->total(),2); ?> $</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong><?php echo number_format($this->cart->total(),2); ?> $</strong></td>
                        </tr>
                    </tfoot>    
                </table>
                <!-- <div class="cart_navigation">
                    <a class="prev-btn" id="prev-btn" href="#">Continue shopping</a>
                    <a class="next-btn" id="next-btn" href="#">Proceed to checkout</a>
                     <button class="btn btn-primary" id="reset-btn" type="button">Reset</button> 
                </div> -->
            </div>


                </div> 
                <div id="step-2" class="">                                    
                    
                    <div class="container">
                        <h2 style="font-size:33px;">You are signed in !</h2>
                        <h4>Please check your information before you process order!</h4>
                        <hr>
                        <div class="row">
                            <div class="col-md-3"> 
                               <?php 
                                $cus_id=$this->session->userdata['logged_in']['cus_id'];
                                // $cus_id=$this->session->userdata['logged_in']['cus_id'];
                                $cus_avtar=$this->session->userdata['logged_in']['cus_avtar'];
                                
                               ?>
                               <img src="<?php ?>uploads/customers/<?php echo $cus_avtar; ?>" alt="<?php echo $cus_avtar; ?>">
                               <h2>Name  <span style="color:red;"><?php echo $username; ?></span></h2>
                               <h2>Email  <span style="color:red;"><?php echo $email; ?></span></h2>
                              
                            </div>
                            <div class="col-md-3"> 
                               <?php 
                                $cus_address=$this->session->userdata['logged_in']['cus_address'];                              
                                $cus_phone=$this->session->userdata['logged_in']['cus_phone'];                              
                               ?>  
                               <h2>Address  <span style="color:red;"><?php echo $cus_address; ?></span></h2>
                               <h2>Phone  <span style="color:red;"><?php echo $cus_phone; ?></span></h2>
                            </div>

                        </div>
                       

         
                    </div>
                    
                    
                    
                </div> 
                <div id="step-3" class=""> 
                      <!-- Card Process -->

                      <div>
			
			
						<div class="sap_tabs">
							<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
								<div class="pay-tabs">
									<h2>Select Payment Method</h2>
									  <ul class="resp-tabs-list">
										  <li onclick="order_pay('Credit Card');" class="resp-tab-item" aria-controls="tab_item-0" role="tab" style="height: 50px;"><span><label class="pic1"></label>Credit Card</span></li>

										  <li onclick="order_pay('Net Banking');" class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span><label class="pic3"></label>Net Banking</span></li>
										 <!--  <li onclick="order_pay('PayPal');" class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span><label class="pic4"></label>PayPal</span></li>  -->
										  <li onclick="order_pay('Debit Card');" class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span><label class="pic2"></label>Debit Card</span></li>
										  <div class="clear"></div>
									  </ul>	
								</div>

                                <form id="form-order" action="<?php echo site_url() ?>cart/order" method="POST">

                                    <input type="hidden" value="Credit Card" name="order_pay" id="order_pay">

								<div class="resp-tabs-container">
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
										<div class="payment-info">
											<h3>Personal Information</h3>
										
												<div class="tab-for">				
													<h5>EMAIL ADDRESS</h5>
														<input type="text"  name="c_email_address">
													<h5>FIRST NAME</h5>													
														<input type="text"  name="c_first_name">
												</div>			
											
											<h3 class="pay-title">Credit Card Info</h3>
											
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text"  name="c_name_on_card">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="" name="c_card_number">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" name="c_card_expiration" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" name="c_year" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="" name="c_cvv_number">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>
									</div>
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
										<div class="payment-info">
											<h3>Net Banking</h3>
											<div class="radio-btns">
                                                <div class="swit">
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Andhra Bank');" type="radio" name="radio" checked=""><i></i>Andhra Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Allahabad Bank');" type="radio" name="radio"><i></i>Allahabad Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Bank of Baroda<');" type="radio" name="radio"><i></i>Bank of Baroda</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Canara Ban');" type="radio" name="radio"><i></i>Canara Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('IDBI Bank');" type="radio" name="radio"><i></i>IDBI Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Icici Bank');" type="radio" name="radio"><i></i>Icici Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Indian Overseas Bank');" type="radio" name="radio"><i></i>Indian Overseas Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('Punjab National Bank');" type="radio" name="radio"><i></i>Punjab National Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('South Indian Bank');" type="radio" name="radio"><i></i>South Indian Bank</label> </div>
                                                    </div>
                                                    <div class="check_box">
                                                        <div class="radio"> <label><input onclick="net_bank('State Bank Of India');" type="radio" name="radio"><i></i>State Bank Of India</label> </div>
                                                    </div>
                                                                                                </div>
                                                    <div class="swit">
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('City Union Bank');" type="radio" name="radio" ><i></i>City Union Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('HDFC Bank');" type="radio" name="radio"><i></i>HDFC Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('IndusInd Bank');" type="radio" name="radio"><i></i>IndusInd Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('Syndicate Bank');" type="radio" name="radio"><i></i>Syndicate Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('Deutsche Bank');" type="radio" name="radio"><i></i>Deutsche Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('Corporation Bank');" type="radio" name="radio"><i></i>Corporation Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('UCO Bank');" type="radio" name="radio"><i></i>UCO Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('Indian Bank');" type="radio" name="radio"><i></i>Indian Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('Federal Bank');" type="radio" name="radio"><i></i>Federal Bank</label> </div>
                                                        </div>
                                                        <div class="check_box">
                                                            <div class="radio"> <label><input onclick="net_bank('ING Vysya Bank');" type="radio" name="radio"><i></i>ING Vysya Bank</label> </div>
                                                        </div>
                                                    </div>
                                                    <div class="clear"></div>

                                                    <input type="hidden" id="net_banking" name="net_banking" value="Andhra Bank">
                                                </div>
											<a href="#">Continue</a>
										</div>
									</div>
								<!-- 	<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
										<div class="payment-info">
											<h3>PayPal</h3>
											<h4>Already Have A PayPal Account?</h4>
											<div class="login-tab">
												<div class="user-login">
													<h2>Login</h2>
													
													<form>
														<input type="text" value="name@email.com" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'name@email.com';}" required="">
														<input type="password" value="PASSWORD" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'PASSWORD';}" required="">
															<div class="user-grids">
																<div class="user-left">
																	<div class="single-bottom">
																			<ul>
																				<li>
																					<input type="checkbox"  id="brand1" value="">
																					<label for="brand1"><span></span>Remember me?</label>
																				</li>
																			</ul>
																	</div>
																</div>
																<div class="user-right">
																	<input type="submit" value="LOGIN">
																</div>
																<div class="clear"></div>
															</div>
													</form>
												</div>
											</div>
										</div>
									</div> -->
									<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">	
										<div class="payment-info">
											
											<h3 class="pay-title">Dedit Card Info</h3>
										
												<div class="tab-for">				
													<h5>NAME ON CARD</h5>
														<input type="text" value="" name="d_name_on_card">
													<h5>CARD NUMBER</h5>													
														<input class="pay-logo" type="text" value="0000-0000-0000-0000" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '0000-0000-0000-0000';}" required="" name="d_card_number">
												</div>	
												<div class="transaction">
													<div class="tab-form-left user-form">
														<h5>EXPIRATION</h5>
															<ul>
																<li>
																	<input type="number" class="text_box" type="text" value="6" min="1" name="d_card_expiration" />	
																</li>
																<li>
																	<input type="number" class="text_box" type="text" value="1988" min="1" name="d_year" />	
																</li>
																
															</ul>
													</div>
													<div class="tab-form-right user-form-rt">
														<h5>CVV NUMBER</h5>													
														<input type="text" value="xxxx" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'xxxx';}" required="" name="d_cvv_number">
													</div>
													<div class="clear"></div>
												</div>
												<input type="submit" value="SUBMIT">
											
											<div class="single-bottom">
													<ul>
														<li>
															<input type="checkbox"  id="brand" value="">
															<label for="brand"><span></span>By checking this box, I agree to the Terms & Conditions & Privacy Policy.</label>
														</li>
													</ul>
											</div>
										</div>	
									</div>
								</div>	

                            </form>
							</div>
						</div>	

		</div>

                      <!-- End Card Process -->
                </div> 
                

                </div> 
            </div>


         </div>



    </div>

     
<!-- end Process Cart -->


</div>
<!-- ./page wapper-->
<!-- Footer -->
<?php $this->load->view('include/footer'); ?>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<!-- <script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>
 -->

 <?php 
	$this->load->view('include/footer_script_home');
?>

<script src="<?php echo base_url(); ?>public/js/easyResponsiveTabs.js" type="text/javascript"></script>
					<script type="text/javascript">
						$(document).ready(function () {
							$('#horizontalTab').easyResponsiveTabs({
								type: 'default', //Types: default, vertical, accordion           
								width: 'auto', //auto or any width like 600px
								fit: true   // 100% fit in a container
							});
						});
						
					</script>


<!-- Include SmartWizard JavaScript source -->
 
    <script type="text/javascript" src="<?php echo base_url(); ?>public/assets/js/jquery.smartWizard.min.js"></script> 
    <script type="text/javascript">
        $(document).ready(function(){
            // Smart Wizard
            $('#smartwizard').smartWizard({ 
                    selected: 0, 
                    theme: 'default',
                    transitionEffect:'fade',
                    toolbarSettings: {toolbarPosition: 'both',
                                      toolbarExtraButtons: [
                                            {label: 'Finish', css: 'btn-info', onClick: function(){ 
                                            		alert('Finish Clicked'); 
                                                    $('form#form-order').submit();
                                            	}
                                        	},
                                            {
                                            	label: 'Cancel', css: 'btn-danger', onClick: function(){ 
                                            		$('#smartwizard').smartWizard("reset"); }
                                            }
                                        ]
                                    }
                 });
                                         
            
            // External Button Events
            $("#reset-btn").on("click", function() {
                // Reset wizard
                $('#smartwizard').smartWizard("reset");
                return true;
            });
            
            $("#prev-btn").on("click", function() {
                // Navigate previous
                $('#smartwizard').smartWizard("prev");
                return true;
            });
            
            $("#next-btn").on("click", function() {
                // Navigate next
                $('#smartwizard').smartWizard("next");
                return true;
            });
            
            $("#theme_selector").on("change", function() {
                // Change theme
                $('#smartwizard').smartWizard("theme", $(this).val());
                return true;
            });

        //    function updateproduct(rowid)
		// 	{
		// 		alert("Hello"); 
		// 	var qty = $('.qty'+rowid).val();
		// 	var price = $('.price'+rowid).text();
		// 	var subtotal = $('.subtotal'+rowid).text();
		// 	    $.ajax({
		// 	            type: "POST",
		// 	            url: "<?php //echo site_url('shopping/update_cart');?>",
		// 	            data: "rowid="+rowid+"&qty="+qty+"&price="+price+"&subtotal="+subtotal,
		// 	            success: function (response) {
		// 	                    $('.subtotal'+rowid).text(response);
		// 	                    var total = 0;
		// 	                    $('.subtotal').each(function(){
		// 	                        total += parseFloat($(this).text());
		// 	                        $('.grandtotal').text(total);
		// 	                    });    

		// 	                   alert("Hello"); 
		// 	            }
		// 	        });
		// 	}
            
        });  











/* Set rates + misc */
var taxRate = 0.05;
var shippingRate = 15.00; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-tax').html(tax.toFixed(2));
    $('#cart-shipping').html(shipping.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
    if(total == 0){
      $('.checkout').fadeOut(fadeTime);
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}




function order_pay(pay='')
{
  $('#order_pay').val(pay);
}
function net_bank(net='')
{
  $('#net_banking').val(net);
}




    </script>  
</body>
</html>