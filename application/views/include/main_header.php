<style type="text/css">
    .srbox {
      width: 560px;
        margin: 0px 0px 10px 0px;
     
     
  }
    .sr-bg{         
      position: absolute;
      background-color: #f7f7f7;
       overflow-y: scroll;
      z-index: 9999;
      display: none;
          border-radius: 0px 0px 10px 10px;
    }
    .mg-top{
      margin-top: 41px;
    }
    .sr-ontop{
    	position: fixed;
		top: 9px;
		margin-left: 130px;
		 }

    .pro:hover{
      background: #fff;
      cursor: pointer;
    }

   @media only screen and (max-width: 600px) {
      .srbox{
         width: 370px;
      }
    }
</style>

<div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="<?php echo site_url(); ?>"><img alt="Kute shop - themelock.com" src="<?php echo base_url(); ?>public/assets/images/logo.png" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form  id="search-form" class="form-inline" method="POST" onsubmit="Cat();">
                      <div class="form-group form-category">
                        <select class="select-category" id="Categories" onchange="Cat();">
                            <option  id="category-0" data-cat-id="0" value="0" >All Categories</option>
                        
                             <?php foreach ($category as $row) :?>
                                  <option id="category-<?php echo $row['subcat2_id'] ?>" data-cat-id="<?php echo $row['cat_id'] ?>" value="<?php echo $row['subcat2_id'] ?>" 
                                  	<?php if($row['subcat2_id'] == $this->uri->segment(4)){
	                                  	 echo ' selected';
	                                  	} ?>>
                                  	<?php echo $row["subcat_name"] ?></option>
                             <?php endforeach; ?>
                        </select>
                      </div>


                      <div class="form-group input-serach">
                        <input type="text" onKeyUp="live_serach(this.value);Cat();" autocomplete="off" id="search" class="textbox" placeholder="search ..." tabindex="1">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
               <div class="sr-bg">
                    <div class="srbox">
                         <div id="livesearch">
                          
                         </div>     
                    </div>
               </div>
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
    <script type="text/javascript">

    </script>
