<!DOCTYPE html>
<html>
<?php
// if (isset($this->session->userdata['logged_in'])) {
// header("location: user_authentication/user_login_process");
// redirect('login/user_login_process');
// }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/select2/css/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/style.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>public/assets/css/responsive.css" />
    <title>Login - Kute shop - themelock.com</title>
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">

    <?php $this->load->view('include/top_header'); ?>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    
	<?php $this->load->view('include/main_header'); ?>
    <!-- END MANIN HEADER -->   

    <!-- END MANIN HEADER -->
   <?php  $this->load->view('include/nav_top_menu'); ?>

</div>
<!-- end header -->
<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Authentication</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Authentication</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="box-authentication">
                        <h3>Create an account</h3>
                        <p>Please enter your email address to create an account.</p>
                        <label for="emmail_register">Email address</label>
                        <input id="emmail_register" type="text" class="form-control">
                        <button class="button"><i class="fa fa-user"></i> Create an account</button>
                    </div>
                </div>
                <div class="col-sm-6">

                <?php
                    if (isset($logout_message)) {
                        echo "<div class='message'>";
                        echo $logout_message;
                        echo "</div>";
                    }
                    ?>
                    <?php
                        if (isset($message_display)) {
                        echo "<div class='message'>";
                        echo $message_display;
                        echo "</div>";
                    }
                    ?>
                    <div class="box-authentication">
                        <h3>Already registered?</h3>

                       <?php echo form_open('front/user_login_process'); ?>
                        <?php //echo form_open('user_authentication/user_login_process'); ?>
                        <?php
                            echo "<div class='error_msg'>";
                            if (isset($error_message)) {
                             echo $error_message;
                            }
                            echo validation_errors();
                            echo "</div>";
                        ?>

                        <label for="emmail_login">Email address</label>
                        <input id="name emmail_login" type="text" class="form-control">
                        <label for="password_login">Password</label>
                        <input id="password password_login" type="password" class="form-control">
                        <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
                        <button class="button"><i class="fa fa-lock"></i> Sign in</button>


                            <label>UserName :</label>
                            <input type="text" name="username" id="name" placeholder="username"/><br /><br />
                            <label>Password :</label>
                            <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
                           
                            <input type="submit" value=" Login " name="submit"/><br />

                        <?php echo form_close(); ?>

                    </div>
                </div>




 <div class="col-sm-6">

<?php
if (isset($logout_message)) {
    echo "<div class='message'>";
    echo $logout_message;
    echo "</div>";
}
?>
<?php
    if (isset($message_display)) {
        echo "<div class='message'>";
        echo $message_display;
        echo "</div>";
    }
?>
<div id="main">
<div id="login">
<h2>Login Form</h2>
<hr/>
<?php //echo form_open('user_authentication/user_login_process'); ?>
<?php echo form_open('front/user_login_process'); ?>
<?php
    echo "<div class='error_msg'>";
    if (isset($error_message)) {
        echo $error_message;
    }
        echo validation_errors();
        echo "</div>";
?>

    <label for="emmail_login">Email address</label><br/>
    <input name="username" id="name emmail_login" placeholder="yourname@domain.com" class="form-control">
    <br/>
    <label for="password_login">Password</label><br/>
    <input type="password" name="password" id="password password_login" placeholder="**********" class="form-control">
   <br/>
    <p class="forgot-pass"><a href="#">Forgot your password?</a></p>
    <br/>
    <button class="button"><i class="fa fa-lock"></i> Sign in</button>

    <!-- <label>UserName :</label>
    <input type="text" name="username" id="name" placeholder="username"/><br /><br />
    <label>Password :</label>
    <input type="password" name="password" id="password" placeholder="**********"/><br/><br />
     -->
    <!-- <input class="button" type="submit" value=" Login " name="submit"/><br /> -->
   


<?php echo form_close(); ?>
</div>
</div>


</div>
</div>











            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->


<!-- Footer -->
<?php
	$this->load->view('include/footer');
 ?>
<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/owl.carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery.countdown/jquery.countdown.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>public/assets/js/theme-script.js"></script>
</body>
</html>