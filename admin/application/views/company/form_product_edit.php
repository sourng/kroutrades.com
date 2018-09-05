<style type="text/css">
    .pddb20 {
        padding-bottom: 20px;
    }

    .pddt20 {
        padding-bottom: 20px;
    }

    .img {
        width: 100px;
        height: 100px;
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
   
</style>

<?php echo form_open('company/product/edit/update/'.$pro_id , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

<section class="panel">
    <!-- <header class="panel-heading">
                                        <div class="panel-actions">
                                            <a href="#" class="fa fa-caret-down"></a>
                                            <a href="#" class="fa fa-times"></a>
                                        </div>

                                        <h2 class="panel-title">Basic Form Validation</h2>
                                        <p class="panel-subtitle">
                                            Basic validation will display a label with the error after the form control.
                                        </p>
                                    </header> -->
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Category <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <select name="category" class="form-control valid" required=""   data-plugin-selectTwo>

                                                                    <?php foreach ($category as $row) :?>
                                                                        <option value="<?php echo $row['cat_id'] ?>" 
                                                                            <?php if ($row['cat_id'] == $product_edit[0]['cat_id']) {
                                                                                echo "selected";
                                                                                } ?>

                                                                        ><?php echo $row['pro_cat_name'] ?></option>
                                                                    <?php endforeach;?>
                                                                    
                                                                </select>
                                <div class="pddb20"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Product Name <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="product_name" class="form-control" required value="<?php echo $product_edit[0]['pro_name'] ?>" />
                       
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Size <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <select name="size[]" id="size" multiple data-plugin-selectTwo class="form-control populate valid" required>        



                                                            <optgroup label="Choose an Size" >

                                                                <?php foreach ($product_size as $size) { ?>
                                                                  <option value="<?php echo $size['pro_size'] ;?>">

                                                                    <?php echo $size['pro_size'] ;?>
                                                                        
                                                                    </option>
                                                                <?php } ?>


                                                                  <?php  
                                                                     $size = $product_edit[0]['pro_size'];
                                                                     $size =explode(',',$size);
                                                                     foreach($size as $i =>$value) {
                                                                      $i >0;
                                                                          echo "<option value='$value' selected>$value</option>";

                                                                      }

                                                                    ?>
                                                
                                                            </optgroup>
                                                        </select>
                        <div class="pddb20"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Price <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" id="price" name="price" class="form-control" required value="<?php echo $product_edit[0]['pro_price'] ?>"/>
                    </div>
                    <div class="pddb20"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Discount <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" id="discount" name="discount" class="form-control" required value="<?php echo $product_edit[0]['pro_discount'] ?>"/>
                    </div>

                </div>
            </div>



            <div class="col-md-12">

                <div class="pddt20"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Detail <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="detail" rows="4" class="form-control" placeholder="Detail Product" required><?php echo $product_edit[0]['pro_detail'] ?></textarea>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Description <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="10" class="form-control" placeholder="Describe Product" required><?php echo $product_edit[0]['pro_description'] ?></textarea>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>

            <div class="col-md-12" style="border:solid 3px #e0e0e0;">
                <div class="pddt20"></div>
                <div class=" row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Feature</label>
                            <div class="col-sm-8">
                                <div class="fileupload fileupload-new" data-provides="fileupload">
                                    <div class="input-append">
                                        <div class="uneditable-input">
                                            <i class="fa fa-file fileupload-exists"></i>
                                            <span class="fileupload-preview"></span>
                                        </div>
                                        <span class="btn btn-default btn-file">
                                                                        <span class="fileupload-exists">Change</span>
                                        <span class="fileupload-new">Select file</span>
                                        <input id="feature" name="feature" type="file" />
                                        <input  name="feature2" type="hidden" value="<?php echo $product_edit[0]['pro_feature'] ?>" />
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>

                                    <label class="error" for="feature"></label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="pddt20"></div>
                            <label class="col-sm-3 control-label">Images</label>
                            <div class="col-sm-8">
                                  <div id='images-list'>

                                 <?php if ($product_images == false){ ?>  

                                     <?php for ($i = 0; $i < 6; $i++) { ?>
    
                                    <div class="col-sm-4 images" id="image-<?php echo $i ?>">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append hidden">
                                                <div class="uneditable-input">
                                                    <i class="fa fa-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                            

                                                <input id="input-img-image-<?php echo $i ?>" name="images[]" type="file"  onchange="loadFile(event,<?php echo $i ?>)"/>

                                                 <input  name="images_edit[]" type="text">


                                                </span>
                                               
                                            </div>
                                               <div style="padding-bottom: 4px "></div>
                                                <img class="img" id="img-image-<?php echo $i ?>" src="<?php echo base_url() ?>public/images/product_images/image.png"   />
                                                 <!-- <span class="remove_img_preview" id="remove-image" data-id="<?php echo $i ?>"></span> -->
                                                 <div style="padding-bottom: 4px "></div>

                                            <label class="error" for="error-<?php echo $i ?>"></label>
                                        </div>                                       
                                    </div>
                                <?php  } ?>
                                <?php } else { ?>

                                 <?php $i = 0; foreach($product_images as $image):?>

                                    <div class="col-sm-4 images" id="image-<?php echo $i ?>">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append hidden">
                                                <div class="uneditable-input">
                                                    <i class="fa fa-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                            

                                                <input id="input-img-image-<?php echo $i ?>" name="images[]" type="file"  onchange="loadFile(event,<?php echo $i ?>)"/>

                                                 <input  name="images_edit[]" type="text" value="<?php echo $image['pro_image']; ?>">


                                                </span>
                                               
                                            </div>
                                               <div style="padding-bottom: 4px "></div>
                                                <img class="img" id="img-image-<?php echo $i ?>" src="<?php echo base_url() ?>../uploads/product_images/<?php if($image['pro_image'] <> '' ){ echo $image['pro_image']; }else{ echo 'image.png'; } ?>"   />
                                                 <!-- <span class="remove_img_preview" id="remove-image" data-id="<?php echo $i ?>"></span> -->
                                                 <div style="padding-bottom: 4px "></div>

                                            <label class="error" for="error-<?php echo $i ?>"></label>
                                        </div>                                       
                                    </div>
                                <?php 
                                       
                                $i++; endforeach; }  ?>
                                <?php for ($y = $i; $y < 6; $y++) { ?>
    
                                    <div class="col-sm-4 images" id="image-<?php echo $y ?>">
                                        <div class="fileupload fileupload-new" data-provides="fileupload">
                                            <div class="input-append hidden">
                                                <div class="uneditable-input">
                                                    <i class="fa fa-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                                <span class="btn btn-default btn-file">
                                            

                                                <input id="input-img-image-<?php echo $y ?>" name="images[]" type="file"  onchange="loadFile(event,<?php echo $y ?>)"/>

                                                 <input  name="images_edit[]" type="text" value="">


                                                </span>
                                               
                                            </div>
                                               <div style="padding-bottom: 4px "></div>
                                                <img class="img" id="img-image-<?php echo $y ?>" src="<?php echo base_url() ?>public/images/product_images/image.png"   />
                                                 <!-- <span class="remove_img_preview" id="remove-image" data-id="<?php echo $y ?>"></span> -->
                                                 <div style="padding-bottom: 4px "></div>

                                            <label class="error" for="error-<?php echo $y ?>"></label>
                                        </div>                                       
                                    </div>
                                <?php  } ?> 
                                      
                                        


                                </div>
                                 <div class="col-sm-4 hidden">
                                     <a id="add-more-image" class="btn btn-default" style="background: #dedada"><i class="fa fa-plus fa-2x"></i><i class="fa fa-image fa-5x"></i> </a>
                                            

                                        </div>
                               
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4"  >
                        <img  id="img-feature" src="<?php echo base_url() ?>../uploads/product_features/<?php echo $product_edit[0]['pro_feature'] ?>" alt="feature" height="300" width="100%" />
                    </div>


                </div>
            </div>


        </div>
    </div>



    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-left">
                    <a href="<?php echo site_url() ?>company/product/list/<?php if( $product_edit[0]['pro_status']=='Y'){ echo 'active';}else{ echo 'deleted';} ?>" class="btn btn-default">Back</a>
                </div>
                <div class="pull-right">
                    <input type="hidden" name="edit-type" id="edit-type" value="<?php echo $product_edit[0]['pro_status'] ?>">
                    <button type="reset" class="btn btn-default">Reset</button>                  
                    <button class="btn btn-primary" id="btn-update">Update</button>
                </div>
            </div>
        </div>
    </footer>
</section>
<?php echo form_close();?>