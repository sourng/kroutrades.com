
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
              <input type="text" class="form-control required" name="title">
            </div>
          </div>

           <div class="form-group">
            <label class="control-label col-sm-4" >Phone Brands *</label>
            <div class="col-sm-8">
              <input type="text" class="form-control required" id="text" name="brand">
            </div>
          </div>


          <div class="form-group">
            <label class="control-label col-sm-4">Condition *</label>
            <div class="col-sm-4">          
          
               <select name="condition" class="form-control required" id="condition">   
                  <option value="New">New</option> 
                  <option value="Used">Used</option> 
               </select>
            </div>
          </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Price *</label>
                    <div class="col-sm-4">          
                      <input type="number" class="form-control required" name="price" id="price">
                    </div>
                  </div>



          <div class="form-group">
                    <label class="control-label col-sm-4">Description * </label>
                    <div class="col-sm-8">          
                    <textarea name="description" id="description" class="required control" rows="10" aria-required="true" style="border: 1.37px solid #e6e6e6; border-radius: 5px; ;width: 100%"></textarea>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="control-label col-sm-4">Add photo * </label>
                    <div class="col-sm-8">          
                   <input  id="photo" name="photo" type="file" required="" class="required">
                    </div>
                  </div>


                     <div class="form-group">
                        <label class="control-label col-sm-4">Name *</label>
                        <div class="col-sm-8">          
                          <input type="text" class="form-control required" name="name">
                        </div>
                      </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Phone  *</label>
                    <div class="col-sm-4">          
                      <input type="text" class="form-control required" name="phone">
                    </div>
                  </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">Email  *</label>
                    <div class="col-sm-8">          
                      <input type="email" class="form-control required" name="email">
                    </div>
                  </div>


          <div class="form-group">
                    <label class="control-label col-sm-4">City/Province *</label>
                    <div class="col-sm-8">          
                      <input type="text" class="form-control required" name="province">
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
