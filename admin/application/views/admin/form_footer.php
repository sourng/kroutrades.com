


		<!-- Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>


		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/select2/select2.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/fuelux/js/spinner.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/dropzone/dropzone.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/summernote/summernote.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/ios7-switch/ios7-switch.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-validation/jquery.validate.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/forms/examples.validation.js"></script>

		<!-- Examples -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/forms/examples.advanced.form.js" /></script>

		<script type="text/javascript">


	$("input#price").keypress(number);
  $("input#discount").keypress(number);
 	$("input#company_phone").keypress(number);


  function number(event) {
      var key = window.event ? event.keyCode : event.which;
      if (event.keyCode === 8 || event.keyCode === 46) {
          return true;
      } else if (key < 48 || key > 57) {
          return false;
      } else {
          return true;
      }
  };

  	  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function(e) {

              $('#img-feature').attr('src', e.target.result);
          }

          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#feature").change(function(e) {
      readURL(this);
     

  });


  $('#btn-save-new').click(function () {
  	$('#save-type').val('save-new');
  })
  $('#btn-save-close').click(function () {
  	$('#save-type').val('save-close');
  })
	
  $(document).on('click','.fileupload-exists' , function () {
  	$('#blah').attr('src', './public/images/product_features/products.png');
  });

 $("#img-feature").click(function () {
    $("#feature").trigger('click');
})
 $(document).ready(function(){

 	
  $(document).on('click','img.img', function(e){

  	 $("#input-"+e.target.id ).trigger('click');

  })

  	function call_add_more(){

  		var count = $('.images').length;
 	var i = $('.images:last').attr('id');
    	i = parseInt(i.replace(/[^0-9]/g, '')) + 1;

	if(count>=6){
            //alert("Only 6 textboxes allow");
            return false;
	}   
		
	var images = $(document.createElement('div'));
                
	images.after().html('<div class="col-sm-4 images" id="image-'+ i +'">\
            <div class="fileupload fileupload-new" data-provides="fileupload">\
                <div class="input-append hidden">\
                    <div class="uneditable-input">\
                        <i class="fa fa-file fileupload-exists"></i>\
                        <span class="fileupload-preview"></span>\
                    </div>\
                    <span class="btn btn-default btn-file">\
                        <span class="fileupload-exists">Change</span>\
                    <span class="fileupload-new">Select file</span>\
                    <input class="hidden" id="input-img-image-'+ i +'" name="images[]" type="file" onchange="loadFile(event,'+i+')"/>\
                    </span>\
                </div>\
                <div style="padding-bottom: 4px "></div>\
                 <img class="img" id="img-image-'+ i +'" src="<?php echo base_url() ?>public/images/product_images/image.png" />\
                  <span class="remove_img_preview" id="remove-image" data-id="'+ i +'"></span>\
                 <div style="padding-bottom: 4px "></div>\
                 <label class="error" for="error-'+ i +'"></label>\
            </div>\
        </div>\
		');
            
	images.appendTo("#images-list");

  	}
		
    $("#add-more-image").click(function () {
		
		call_add_more();

			
     });

     $(document).on('click','#remove-image' , function (e) { 

     	var id = $(this).data('id');
    	var count = $('.images').length;

     	if (count>1) {
     		
     		 $("div#image-" + id).remove();
	     	
     		}else{
     			alert('can\'t delete.');
     		}
			
       
			
     });
	

		  });



 function loadFile (event,id) {
    var output = document.getElementById('img-image-'+id);
    output.src = URL.createObjectURL(event.target.files[0]);

    var count = $('.images').length;
    
    if(count<6){
           $("#add-more-image").trigger('click');
	}   
     
  };



    

  $('#company').val([]);
     <?php 

     $cat_select_index = $this->uri->segment(5);

      if ($cat_select_index == '')   
        
        echo "$('#category').val([]);";
                                                                                        
                                                                                   
                                                                                   
  ?>



  $('#category_icon').change(function() {
    $('#icon_view').html($(this).val());
  })

$(document).ready(function() {

  
     $('#icon_view').html( $('#category_icon').val());
})

$(document).on('click','#btn-save-new', function(e) {
 //e.preventDefault();
})

$('#company_email').change(function() {
    email_($(this).val());
  });
function email_(email) {

      $.ajax({
          url: '<?php echo site_url() ?>ajax/email/',
          method: 'POST',
          data:{
            email:email,
            pass:'123'
          },          
          success: function(data) {
           
          }
      })
  }; 
</script>

