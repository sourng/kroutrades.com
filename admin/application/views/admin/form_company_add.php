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

<?php echo form_open('admin/company/add/save' , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>

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
                            <label class="col-sm-4 control-label">Company Name <span class="required">*</span></label>
                            <div class="col-sm-8">
                               <input type="text" name="company_name" class="form-control" required/>
                                <div class="pddb20"></div>
                            </div>
                        </div>
                    </div>

                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Company Site <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" name="company_site" class="form-control" required/>
                        <div class="pddb20"></div>
                    </div>
                </div>
            </div>
          
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Company Facebook <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text"  name="company_fb" class="form-control" required/>
                               <div class="pddb20"></div>
                    </div>
                   
                </div>
            </div>
               

            <div class="col-md-12">

                <div class="pddt20"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Company Detail <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="company_detail" rows="3" class="form-control" placeholder="Detail Company" required></textarea>
                    </div>
                </div>
             
            </div>

           
                <div class="col-md-6">
                    <div class="pddt20"></div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company extra1 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <textarea name="company_extra1" rows="3" class="form-control" placeholder="extra1 Company" required></textarea>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="pddt20"></div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company extra2 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <textarea name="company_extra2" rows="3" class="form-control" placeholder="extra2 Company" required></textarea>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="pddt20"></div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company extra4 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <textarea name="company_extra3" rows="3" class="form-control" placeholder="extra4 Company" required></textarea>
                        </div>
                    </div>
                </div>
                  <div class="col-md-6">
                    <div class="pddt20"></div>
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Company extra4 <span class="required">*</span></label>
                        <div class="col-sm-8">
                            <textarea name="company_extra4" rows="3" class="form-control" placeholder="extra4 Company" required></textarea>
                        </div>
                    </div>
                </div>
            
            <div class="col-md-12">
                <div class="pddt20"></div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Company Address <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="company_address" rows="3" class="form-control" placeholder="Describe Product" required></textarea>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>
              <div class="col-md-12">
                <div class="form-group">
                    <label class="col-sm-2 control-label">Company Location <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <textarea name="company_location" rows="3" class="form-control" placeholder="Describe Product" required></textarea>
                    </div>
                </div>
                <div class="pddb20"></div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Company Email <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="email"  name="company_email" id="company_email" class="form-control" required/>
                        <label class="error" id="email-alert"></label>
                               <div class="pddb20"></div>
                    </div>
                   
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Company Phone <span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="text" id="company_phone"  name="company_phone" class="form-control" maxlength="10" required/>
                               <div class="pddb20"></div>
                    </div>
                   
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Password<span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="password"  name="password" class="form-control" required/>
                               <div class="pddb20"></div>
                    </div>
                   
                </div>
            </div>
             <div class="col-md-6">
                <div class="form-group">
                    <label class="col-sm-4 control-label">Confirm Password<span class="required">*</span></label>
                    <div class="col-sm-8">
                        <input type="password"  name="confirm_password" class="form-control" required/>
                               <div class="pddb20"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col-md-12">
                <div class="pddt20"></div>
                <div class=" row">
                    <div class="col-md-8">

                        <div class="form-group">
                            <label class="col-sm-3 control-label">Company Logo</label>
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
                                        <input id="feature" name="logo" type="file" required="" />
                                        </span>
                                        <a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
                                    </div>

                                    <label class="error" for="feature"></label>
                                </div>
                            </div>
                        </div>


                    </div>
                    <div class="col-md-4"  >
                        <img  id="img-feature" src="<?php echo base_url().$this->upload_path  ?>/product_company/logo.png" alt="feature" height="300" width="100%" />
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