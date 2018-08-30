<!-- box product -->
<div class="page-product-box">
                            <h3 class="heading">Related Products</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
        						<?php
								foreach($pro_related as $rows){
									?>
									<li>
                                    <div class="product-container">
                                        <div class="left-block">
                                            <a href="<?php echo site_url();?>detail/<?php echo $rows['pro_id']; ?>">
                                                <img class="img-responsive" alt="product" src="<?php echo base_url(); ?>uploads/product_features/<?php echo $rows['pro_feature']; ?>" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#add">Add to Cart</a>
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
                                        </div>
                                    </div>
                                </li>
									<?php
								}
								?>					   
							
								
                            </ul>
                        </div>
                        <!-- ./box product -->
