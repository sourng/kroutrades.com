<div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">                            

    <!-- Menu Dynamic -->
    <?php 
    $i=1;
        foreach ($menu_category as $rows) {
            if($i<11){
            ?>
              <li>
                <a href="#" class="parent">
                    <img class="icon-menu" alt="Funky roots" src="<?php echo base_url(); ?>uploads/products/<?php echo $rows['pro_cat_img']; ?>"><?php echo $rows['pro_cat_name']; ?>
                </a>

                <!-- Sub Menu1 -->
                <?php 
                         
                            ?>
                    <div class="vertical-dropdown-menu">
                        <div class="vertical-groups col-sm-12">
                            <?php 
                             foreach ($menu_cat_sub1 as $nav_sub1) {  
                             if($rows['cat_id']==$nav_sub1['cat_id']){
                            ?>
                            <div class="mega-group col-sm-4">
                                <h4 class="mega-group-header"><span><?php echo $nav_sub1['subcat_name']; ?></span></h4>
                                <ul class="group-link-default">
                                    <?php 
                                        foreach ($menu_cat_sub2 as $nav2) {
                                            if($nav2['sub_cat1_id']==$nav_sub1['sub_cat1_id']){
                                                ?>
                                                 <li><a href="<?php echo site_url(); ?>front/category/<?php echo $nav2['subcat2_id']; ?>/<?php echo $nav2['sub_cat1_id'];  ?>"><?php echo $nav_sub1['subcat_name']; ?></a></li>
                                                <?php
                                            }
                                        }

                                    ?>
                                   
                                    
                                </ul>
                            </div>
                            <?php 
                              }   
                                 }

                             ?>
                            
                           
                                <div class="mega-custom-html col-sm-12">
                                    <a href="#"><img src="<?php echo base_url(); ?>uploads/products/banner-megamenu.jpg" alt="Banner"></a>
                                </div>
                          

                             

                        </div>
                    </div>

                <?php
                                                                                           
                                         

                                        ?>

                                        <!-- End Sub Menu1 -->


                                      </li>

                                    <?php  
                                                                       
                                }else{
                                    ?>
                                    <!-- Other Link Menu -->
                                    <li class="cat-link-orther">
                                        <a href="#" class="parent"><img class="icon-menu" alt="Funky roots" src="<?php echo base_url(); ?>uploads/products/<?php echo $rows['pro_cat_img']; ?>"><?php echo $rows['pro_cat_name']; ?>
                                        </a>

                                        <!-- Sub Menu1 -->
                                        <?php 
                                                ?>
                                            <div class="vertical-dropdown-menu">
                                                <div class="vertical-groups col-sm-12">
                                                    <?php 
                                                     foreach ($menu_cat_sub1 as $nav_sub1) {  
                                                     if($rows['cat_id']==$nav_sub1['cat_id']){
                                                    ?>
                                                    <div class="mega-group col-sm-4">
                                                        <h4 class="mega-group-header"><span><?php echo $nav_sub1['subcat_name']; ?></span></h4>
                                                        <ul class="group-link-default">
                                                            <?php 
                                                                foreach ($menu_cat_sub2 as $nav2) {
                                                                    if($nav2['sub_cat1_id']==$nav_sub1['sub_cat1_id']){
                                                                        ?>
                                                                         <li><a href="#"><?php echo $nav2['subcat_name']; ?></a></li>
                                                                        <?php
                                                                    }
                                                                }

                                                            ?>
                                                           
                                                            
                                                        </ul>
                                                    </div>
                                                    <?php 
                                                      }   
                                                         }
                                                     ?>


                                                    
                                                            <div class="mega-custom-html col-sm-12">
                                                            <a href="#"><img src="<?php echo base_url(); ?>uploads/products/banner-megamenu.jpg" alt="Banner"></a>
                                                        </div>


                                                </div>
                                            </div>

                                                    <?php
                                                                                           
                                         

                                        ?>

                                        <!-- End Sub Menu1 -->


                                      </li>


                                    <?php
                                }
                                $i++;
                            }



                            ?>


                            <!-- End Menu Dynamic -->





                        </ul>
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
                </div>



                <?php $this->load->view('include/nav_top');?>



            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"> <span id="top_cart_count"  style="color: white; background-color: #e50f28; padding:5px 15px 5px 15px; border-radius: 10px; "><?php echo count($this->cart->contents()); ?></span></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
