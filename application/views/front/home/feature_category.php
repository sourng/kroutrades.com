 <!-- featured category fashion -->
 <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-red show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="<?php echo base_url(); ?>uploads/products/fashion.png" />fashion</a></div>
                  <span class="toggle-menu"></span>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">           
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Best Seller</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li>
                    <li><a href="#">Women</a></li>
                    <li><a href="#">Men</a></li>
                    <li><a href="#">Kids</a></li>
                    <li><a href="#">Accessories</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="<?php echo base_url(); ?>uploads/products/ads2.jpg" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="<?php echo base_url(); ?>uploads/products/ads3.jpg" /></a>
                </div>
           </div>
           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="<?php echo base_url(); ?>uploads/products/f1.jpg" /></a>
                    </div>
                </div>
                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container">
						  
						
						
						<!-- tab product -->
                            <div class="tab-panel active" id="tab-4">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
																	
									<?php 
									foreach($best_seller as $rows) {			
										?>
									
										<li>
											<div class="left-block">
												<a href="<?php echo site_url();?>detail/<?php echo $rows['pro_id']; ?>">
												<img class="img-responsive" alt="<?php echo $rows['pro_feature']; ?>" src="<?php echo base_url(); ?>uploads/product_features/<?php echo $rows['pro_feature']; ?>" /></a>
												<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
												</div>
												<div class="add-to-cart">
													<input type="hidden" name="quantity" id="<?php echo $rows['pro_id']; ?>" value="1" class="quantity form-control">

													<?php
                                 $sellPrice=$rows['pro_price']-($rows['pro_price']*$rows['pro_discount'])/100;
                                $price=round($sellPrice,2);
                                 ?>
													<button title="Add to Cart" class="add_cart" data-productid="<?php echo  $rows['pro_id']; ?>" 
													data-profeature="<?php echo  $rows['pro_feature']; ?>" data-productname="<?php echo  $rows['pro_name']; ?>" data-productprice="<?php echo  $price;?>">Add to Cart</button>

													
												</div>
											</div>
											<div class="right-block">
												<h5 class="product-name">
													<a href="<?php echo site_url();?>detail"><?php echo $rows['pro_name'];  ?>
													</a></h5>
													


												<div class="content_price">
													<span class="price product-price">$<?php echo $price;  ?></span>
													<span class="price old-price">$<?php echo $rows['pro_price'];  ?></span>
												</div>
												<div class="product-star">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-o"></i>
												</div>
											</div>
										</li>									

										<?php
										//$i++;
									}
									?>
                                </ul>
                            </div>
							
							
							
							<!-- tab product -->
                            <div class="tab-panel" id="tab-5">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4}}'>
                                    
								<?php 
									for($i=1;$i<=5;$i++){
										?>
										<!--  -->
										<li>
											<div class="left-block">
												<a href="#">
												<img class="img-responsive" alt="product" src="<?php echo base_url(); ?>uploads/products/p<?php echo $i; ?>.jpg" /></a>
												<div class="quick-view">
														<a title="Add to my wishlist" class="heart" href="#"></a>
														<a title="Add to compare" class="compare" href="#"></a>
														<a title="Quick view" class="search" href="#"></a>
												</div>
												<div class="add-to-cart">
													<a title="Add to Cart" href="#">Add to Cart</a>
												</div>
											</div>
											<div class="right-block">
												<h5 class="product-name"><a href="#">Yellow Dress</a></h5>
												<div class="content_price">
													<span class="price product-price">$38,95</span>
													<span class="price old-price">$52,00</span>
												</div>
												<div class="product-star">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-o"></i>
												</div>
											</div>
										</li>									

										<?php
									}
									?>

                                </ul>
							</div>
							






                        </div>
                        
                    </div>
                </div>
           </div>
        </div>
		<!-- end featured category fashion -->
