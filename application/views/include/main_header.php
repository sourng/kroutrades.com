<div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="<?php echo site_url(); ?>"><img alt="Kute shop - themelock.com" src="<?php echo base_url(); ?>public/assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>


               <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">     
                
                <a class="cart-link" href="<?php echo base_url(); ?>cart" id="count_cart">
                    <span class="title">Shopping cart</span>
                    <span class="total"><?php echo count($this->cart->contents())?> items - <?php echo number_format($this->cart->total(),2); ?> $</span>
                    <span class="notify notify-left"><?php echo count($this->cart->contents()); ?></span>
                </a>
                 <div id="detail_cart">               
                </div>

            </div>
            
           
        </div>
        
    </div>
