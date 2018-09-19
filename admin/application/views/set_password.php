<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url() ?>/public/assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo base_url() ?>/public/assets/vendor/modernizr/modernizr.js"></script>

	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<a href="/" class="logo pull-left">
					<img src="<?php echo base_url() ?>/public/assets/images/logo.png" height="54" alt="Porto Admin" />
				</a>

				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>

				
								<?php if (@$_GET['company'] == 1) { echo "selected" ;} ?> 
					<div class="panel-body">
						
	<?php echo form_open('set_password/login' , array('id' => 'form','class' => 'form-horizontal validatable','target'=>'_top', 'enctype' => 'multipart/form-data'));?>



							<div class="form-group mb-lg">
								<label>Password</label>
								<div class="input-group input-group-icon">
									<input name="password" type="password" id="password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password Confirm</label>
									<a href="pages-recover-password.html" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input name="password_confirm" type="password" class="form-control input-lg" id="password_confirm" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label>
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs" id="btn-submit">Save</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
									<!-- <a href="<?php echo site_url() ?>admin/dashboard" class="btn btn-primary">Sign In</a> -->
								</div>
							</div>

							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="<?php echo site_url() ?>login/signup">Sign Up!</a>

					<?php echo form_close() ;?>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">&copy; Copyright 2014. All Rights Reserved.</p>
			</div>
		</section>
		<!-- end: page -->

		<!-- Vendor -->
		<script src="<?php echo base_url() ?>/public/assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url() ?>/public/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>/public/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>/public/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>/public/assets/javascripts/theme.init.js"></script>
		
		<script src="<?php echo base_url() ?>public/assets/javascripts/forms/examples.validation.js"></script>


		<script type="text/javascript">
			$('#account').val([]);


			$('#btn-submit').click(function(e) {
				var password = $('#password').val();
				var password_confirm = $('#password_confirm').val();

				if (password == '') {

					$('#password').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"
                });
					 e.preventDefault();
				}else if(password_confirm == ''){
					$('#password_confirm').css({
                    "border": "1px solid red",
                    "background": "#FFCECE"

                });
					 e.preventDefault();
				}else{

					if(password == password_confirm){
						$('#form').submit();
					}else{
						alert("Password not macth!");
					}
				}
			})
		</script>
	</body>
</html>