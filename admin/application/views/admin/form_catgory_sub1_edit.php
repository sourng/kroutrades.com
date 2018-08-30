<style type="text/css">
    .pddb20 {
        padding-bottom: 20px;
    }

    .pddt20 {
        padding-bottom: 20px;
    }

    .img {
        width: 100%;
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

<?php echo form_open('admin/category/sub1/edit/update/'.$sub_cat1_id , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

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
                                <select name="category" class="form-control valid" required  data-plugin-selectTwo>
                                                                    <!-- <option value="">Choose a Category</option> -->

                                                                    <?php foreach ($category as $row) :?>
                                                                        <option value="<?php echo $row['cat_id'] ?>" 
                                                                            <?php if ($row['cat_id'] == $category_sub1[0]['cat_id']) {
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
                            <label class="col-sm-4 control-label">Sub Category Name <span class="required">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="category_name" class="form-control" required value="<?php echo $category_sub1[0]['subcat_name'] ?>" />
                                 <div class="pddb20"></div>
                            </div>
                        </div>
                    </div>         

            <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Icon <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" id="category_icon" name="category_icon" class="form-control" required value='<?php echo $category_sub1[0]['subcat_icon'] ?>'/>
                    </div>

                    <div class="col-sm-2">
                       <div id="icon_view"></div>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>

        </div>
    </div>



    <footer class="panel-footer">
        <div class="row">
            <div class="col-sm-12">
                <div class="pull-left">
                    <a href="<?php echo site_url() ?>admin/category/sub1/list/<?php if($category_sub1[0]['subcate_status']=='Y'){ echo 'active';}else{ echo 'deleted';} ?>" class="btn btn-default">Back</a>
                </div>
                <div class="pull-right">
                    <input type="hidden" name="edit-type" id="edit-type" value="<?php echo $category_sub1[0]['subcate_status'] ?>">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" id="btn-save-new" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>
    </footer>
</section>
<?php echo form_close();?>