<style type="text/css">
    .pddb20 {
        padding-bottom: 20px;
    }

    .pddt20 {
        padding-bottom: 20px;
    }

    .img {
        width: 100px;
        height: 80px;
        margin: 0.2em -0.7em 0 0;
    }

    .remove_img_preview {
       position: relative;
        bottom: 95px;
        right: -80px;
        background: #ffffff9e;
        color: #b50707;
        border-radius: 50px;
        font-size: 15px;
        padding: 0 5px 0;
        text-align: center;
        cursor: pointer;
        font-weight: bold;
    }

    .remove_img_preview:before {
        content: "×";
    }

     .hidden{
        display: none;
     }
   .image_bg {
    
    right: -15px;
    width: 370px;
    font-size: 13px;
    padding: 10px;
    background-color: #fffbf6;
    border: 1px solid #fee6d7;
}
</style>

<div class="container">




<?php echo form_open('ad/post/'.$param1 , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>



    <div class="row">
      <div class="col-md-6">

       <!--    <div class="form-group">
            <label class="control-label col-sm-4" >Category :</label>
            <div class="col-sm-8">
              <input type="text" class="form-control"  name="category">
            </div>
          </div> -->


          <div class="form-group">
            <label class="control-label col-sm-4">Title *</label>
            <div class="col-sm-8">          
              <input type="text" class="form-control required" name="title" autocomplete="OFF">
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Modal *</label>
            <div class="col-sm-4">          
          
               <select name="modal" class="form-control required" id="modal">   

                    <option value="camry">Camry</option>
                    <option value="camry-hybrid">Camry Hybrid</option>
                    <option value="prius">Prius</option>
                    <option value="alphard">Alphard</option>
                    <option value="avalon">Avalon</option>
                    <option value="avenza">Avenza</option>
                    <option value="corolla">Corolla</option>
                    <option value="fortuner">Fortuner</option>
                    <option value="hiace" ">Hiace</option>
                    <option value="highlander">Highlander</option>
                    <option value="highlander-hybrid">Highlander Hybrid</option>
                    <option value="hilux-rivo">Hilux RIVO</option>
                    <option value="hilux-vigo">Hilux Vigo</option>
                    <option value="land-cruiser">Land Cruiser</option>
                    <option value="land-cruiser-prado">Land Cruiser PRADO</option>
                    <option value="matrix">Matrix</option>
                    <option value="rav4">RAV4</option>
                    <option value="scion">Scion</option>
                    <option value="sienna">Sienna</option>
                    <option value="tacoma">Tacoma</option>
                    <option value="tundra">Tundra</option>
                    <option value="venza">Venza</option>
                    <option value="yaris">Yaris</option>
                    <option value="4runner">4Runner</option>
                    <option value="celica">Celica</option>
                    <option value="cressida">Cressida</option>
                    <option value="echo" >Echo</option>
                    <option value="ipsum">Ipsum</option>
                    <option value="paseo">Paseo</option>
                    <option value="previa">Previa</option>
                    <option value="sequoia">Sequoia</option>
                    <option value="solara">Solara</option>
                    <option value="supra" ">Supra</option>
                    <option value="t100" >T100</option>
                    <option value="tercel">Tercel</option>
                    <option value="truck-xtracab-sr5">Truck Xtracab SR5</option>
                    <option value="tundramax">TundraMax</option>
                    <option value="xtra" >Xtra</option>
                    <option value="other" ">Other - ផ្សេងៗ</option>
               </select>
            </div>
          </div>

            <div class="form-group">
            <label class="control-label col-sm-4">Year *</label>
            <div class="col-sm-2">          
          
               <select name="year" class="form-control required" id="year">   
                  <?php for ($y=2019; $y >=1990 ; $y--) { ?>
                      <option value="<?php echo $y ?>"><?php echo $y ?></option>
                  <?php } ?>
               </select>
            </div>
          </div>

          <div class="form-group">
            <label class="control-label col-sm-4">Tax Type *</label>
            <div class="col-sm-4">          
          
               <select name="tax_type" class="form-control required" id="tax_type">   
                  <option value="Tax Paper">Tax Paper</option> 
                  <option value="Plate Number">Plate Number</option> 
               </select>
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-sm-4">Condition *</label>
            <div class="col-sm-2">          
          
               <select name="condition" class="form-control required" id="condition">   
                  <option value="New">New</option> 
                  <option value="Used">Used</option> 
               </select>
            </div>
          </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Price *</label>
                    <div class="col-sm-4">          
                      <input type="number" min="0" class="form-control required" name="price" id="price" autocomplete="OFF">
                    </div>
                  </div>



          <div class="form-group">
                    <label class="control-label col-sm-4">Description * </label>
                    <div class="col-sm-8">          
                    <textarea name="description" id="description" class="required control" rows="10" aria-required="true" style="border: 1.37px solid #e6e6e6; border-radius: 5px; ;width: 100%"></textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-4">Add Feature * </label>
                    <div   class="image_bg col-sm-8" >          
                              <input class="required" id="input-img-image-001" name="feature" type="file"  onchange="loadFile(event,'001')" value="001" />
                             <img class="img" style="width: 100%;height: 100%" id="img-image-001" src="<?php echo base_url() ?>uploads/product_images/image.png" />
                
                    </div>
                  </div>

            <div class="form-group">
                    <label class="control-label col-sm-4">Add Image * </label>
                    <div   class="image_bg col-sm-8" >          
           
                      
                     <div id='images-list'>

                                    
                                 

                                   <?php for ($i = 0; $i < 6; $i++) { ?>
    
                                    <div class="col-sm-4 col-xs-6 images" id="image-<?php echo $i ?>">
                                      
                                        <input class="hidden" id="input-img-image-<?php echo $i ?>" name="images[]" type="file"  onchange="loadFile(event,<?php echo $i ?>)"/>
                
                                                <img class="img" id="img-image-<?php echo $i ?>" src="<?php echo base_url() ?>uploads/product_images/image.png"   />
                        
                                                                             
                                    </div>
                                <?php  } ?>

                                </div>
                  
              

                  </div>
            </div>
               

                     <div class="form-group">
                        <label class="control-label col-sm-4">Name *</label>
                        <div class="col-sm-8">          
                          <input type="text" class="form-control required" name="name" autocomplete="OFF">
                        </div>
                      </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Phone  *</label>
                    <div class="col-sm-4">          
                      <input type="text" class="form-control required" name="phone" id="phone" autocomplete="OFF" maxlength="10">
                    </div>
                  </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Email  *</label>
                    <div class="col-sm-8">          
                      <input type="email" class="form-control required" name="email" autocomplete="OFF">
                    </div>
                  </div>




          <div class="form-group">
            <label class="control-label col-sm-4">City/Province *</label>
            <div class="col-sm-4">          
          
               <select name="provinces" class="form-control required" id="provinces">   

                 

                  <?php  foreach ($provinces as $row) : ?>
                        
                         <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option> 
                      
                    <?php endforeach; ?>


               </select>
            </div>
          </div>





          <div class="form-group">
                    <label class="control-label col-sm-4">Location Details * </label>
                    <div class="col-sm-8">          
                    <textarea name="location" id="location" class="required control" rows="5" aria-required="true" style="border: 1.37px solid #e6e6e6; border-radius: 5px; ;width: 100%"></textarea>
                    </div>
                  </div>


      </div>  

       <div class="col-md-6">
         
                  <div class="posting_rule">
                      <span class="rule_title"><i class="icon-warning"></i> Posting Rule</span>
                      <ul>
                      <li>No posting of same ad or similar ad to multiple categories and inappropriate category</li>
                      <li>No posting of false, inaccurate, misleading, defamatory content</li>
                      <li>You must honestly and accurately describe the item for which you are posting an ad.</li>
                      <li>khmer24.com assumes no responsibility for the accuracy of any advertisements posted on the site</li>
                      </ul>
                      <div>
                      <a target="_blank" href="https://www.khmer24.com/en/posting-rule.html">More rules...</a>
                      </div>
                </div>
      </div>  


       <div class="col-md-12">

   <!--  <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-11">
        <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
        </div>
      </div>
    </div> -->

    <div class="form-group">        
      <div class="col-sm-offset-1 col-sm-11">
        <button type="submit" id="btn_submit" class="btn btn-primary">Post</button>
      </div>
    </div>



       </div>

    </div>

  



<?php echo form_close();?>
</div>
