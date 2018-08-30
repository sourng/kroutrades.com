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

<?php echo form_open('admin/product/add/save' , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

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
                            <label class="col-sm-4 control-label">Company <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <select name="company" id="company" class="form-control valid" required  data-plugin-selectTwo>
                                                                    <!-- <option value="">Choose a Category</option> -->

                                                                    <?php foreach ($company as $row) :?>
                                                                        <option value="<?php echo $row['company_id'] ?>"><?php echo $row['comp_name'] ?></option>
                                                                    <?php endforeach;?>
                                                                    
                                                                </select>
                                <div class="pddb20"></div>
                            </div>
                        </div>
                    </div>

                     <div class="col-md-6">
                        <div class="form-group">
                            <label class="col-sm-4 control-label">Category <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <select name="category" id="category" class="form-control valid" required  data-plugin-selectTwo>
                                                                    <!-- <option value="">Choose a Category</option> -->

                                                                    <?php foreach ($category as $row) :?>
                                                                        <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['pro_cat_name'] ?> </option>
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
                        <input type="text" name="product_name" class="form-control" required/>
                        <div class="pddb20"></div>
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
                        <input type="text" id="price" name="price" class="form-control" required/>
                    </div>
                    <div class="pddb20"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Discount <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" id="discount" name="discount" class="form-control" required/>
                    </div>

                </div>
            </div>



            <div class="col-md-12">

                <div class="pddt20"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Detail <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="detail" rows="4" class="form-control" placeholder="Detail Product" required></textarea>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Description <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="description" rows="10" class="form-control" placeholder="Describe Product" required></textarea>
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
                                        <input id="feature" name="feature" type="file" required="" />
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
                                                <img class="img" id="img-image-<?php echo $i ?>" src="<?php echo base_url().$this->upload_path  ?>/product_images/image.png"   />
                                                 <!-- <span class="remove_img_preview" id="remove-image" data-id="<?php echo $i ?>"></span> -->
                                                 <div style="padding-bottom: 4px "></div>

                                            <label class="error" for="error-<?php echo $i ?>"></label>
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
                        <img  id="img-feature" src="<?php echo base_url().$this->upload_path  ?>/product_features/products.png" alt="feature" height="300" width="100%" />
                    </div>


                </div>
            </div>


        </div>
    </div>



    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-left">
                    <a href="<?php echo site_url() ?>admin/product/list/active" class="btn btn-default">Back</a>
                </div>
                <div class="pull-right">
                    <input type="hidden" name="save-type" id="save-type">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" id="btn-save-new" class="btn btn-primary">Save New</button>
                    <button class="btn btn-primary" id="btn-save-close">Save Close</button>
                </div>
            </div>
        </div>
    </footer>
</section>
<?php echo form_close();?>