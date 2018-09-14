<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <?php 
        $this->load->view('include/head_script_home');       
   ?> 
    <title>Kute shop - themelock.com</title>
    <link rel="stylesheet" href="<?php echo base_url() ;?>public/styles/main.css">
	<title>jQuery Taxonomy Browser Plugin Demos</title>
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <style type="text/css">
		@charset "utf-8";
		.ads_form .title{position:relative}.ads_form .help{font-size:13px;position:absolute;right:10px;top:15px;display:inline-block;vertical-align:bottom}.ads_form .help:hover{text-decoration:underline}.ads_form .help img{margin-bottom:-4px;width:18px}.ads_form{border:solid 1px #e8e8e8;margin:30px auto;background-color:#fff}.ads_form>.title h1{font-size:18px;font-weight:700;padding:15px 10px;margin:0;color:#333}span.label{color:#818181;font-weight:700;font-size:13px;padding:15px 0;display:inline-block;vertical-align:top;margin-right:30px}.post_form{position:relative}#category,.post_form{padding:20px}#category .title{font-size:14px;font-weight:700;color:#424242;margin:0;padding:10px 0}#category .title span{display:inline-block;margin-right:10px;padding:3px 10px;border-radius:50%;background-color:#0093de;color:#fff}.main_cat>ul>li a{padding:14px 10px 14px 42px;border-bottom:solid 1px #eaeaea;color:#2d2d2d;font-size:14px;position:relative}.main_cat>ul>li a .icon{position:absolute;left:0;top:8px;width:32px;height:32px}.main_cat li .fa{margin-right:5px;font-size:24px;vertical-align:middle}.sub_cat{display:none}.main_cat .active .sub_cat{display:block}.sub_cat li a{padding:10px 0!important;border-bottom:solid 1px #eaeaea!important;color:#030303}.sub_cat li:last-child a{border-bottom:none!important}.main_cat{position:relative;display:inline-block;width:300px}.main_cat>ul{border-right:1px solid #eaeaea}.main_cat>ul>li{padding-right:60px;margin-right:-1px}.sub_cat{position:absolute;top:0;right:-335px;min-width:300px}.sub_cat ul{overflow:auto;max-height:450px;margin-left:5px}.main_cat .active{background-image:url(../img/naro.png);background-position:right center;background-repeat:no-repeat}.sub_cat li a{width:270px}.main_cat>ul>li:last-child a{border-bottom:none}.btn_submit{text-align:center}.in_category a,.in_category ul{display:inline-block;padding:8px 10px;font-size:13px}form .form_icon{font-size:13px;margin:10px;vertical-align:text-top;line-height:1.5}form .has-success .form_icon,form .has-success .label{color:#3c763d}form .has-success input.valid,form .has-success select.valid,form .has-success textarea.valid{border-color:#3c763d!important}form .has-error .form_icon,form .has-error .label{color:#a94442}form .has-error input.error,form .has-error select.error,form .has-error textarea.error{border-color:#a94442!important}.field .form-group>div{display:inline-block;vertical-align:top}.field .form-group .control-label,.form-label{width:180px!important}.field .form-group .control-label{text-align:right;font-weight:700;display:inline-block;line-height:2}.field .form-input{margin-left:13px}.field .checkbox{position:relative;display:inline-block}.field .checkbox .icon-delete{position:absolute;right:-10px;top:-4px}.form-control input+label+span{display:none!important}.field .checkbox label{margin-top:0!important;padding-top:5px!important}.field input{padding:6px 10px!important;font-size:14px}.field select{padding:8px 6px!important;font-size:14px}.post_form select{line-height:2}.btn_change_category{display:inline-block;border:1px dashed #e1e1e1}.btn_change_category:hover{border:1px dashed #006190}.btn_change_category .btn{margin-left:10px}#plupload{position:relative}#plupload .col-sm-8{margin-right:320px}.pl_help{vertical-align:top;background-color:#fff;padding:10px;width:300px;position:absolute;right:0;top:0}.pl_help h5{color:#08c;font-weight:700;font-size:15px;font-style:italic;margin:3px 0 12px 25px}.pl_help ul li{position:relative;font-size:13px;padding:0 0 10px 25px;line-height:16px;color:#000}.pl_help ul li span{position:absolute;left:0;width:18px;height:18px;background:url(../../img/pl_ok.png) 50% 50% no-repeat}.drop_file_hear{position:absolute;display:block;width:90px;height:90px;background:transparent url(../../img/drop_your_photo_hear.png) no-repeat scroll 50% 50%;left:-95px;top:35px}.step{overflow:hidden;position:relative}.step li i{border-radius:50%;display:inline-block;color:#fff;width:20px;text-align:center;margin-right:5px;font-size:12px!important;border:solid 1px #34495e;background:#34495e}.step li{float:left;padding:12px 25px;font-size:14px;font-weight:700;background-color:#fafafa;position:relative;z-index:9;vertical-align:middle}.step li+li{z-index:8}.step li+li+li{z-index:7}.step li+li+li+li{z-index:6}.step li+li+li+li+li{z-index:5}.step li:after{content:' ';background-color:#fafafa;display:inline-block;width:34px;height:34px;position:absolute;top:7px;right:-17px;-moz-transform:rotate(45deg);-webkit-transform:rotate(45deg);-o-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg);border-top:1px solid #e1e1e1;border-right:1px solid #b5b5b5}.step li+li{padding-left:40px;padding-right:25px}.step li.active,.step li.active:after{color:#ff3366}.step li.active:after{}.step li.active i{color:#fff;background-color:#ff3366;border-color:#ff3366}.step .disable,.step .disable *{color:#818181!important}.step .disable i{background-color:#fff;border-color:#d5d5d5}.phone>div{margin-bottom:10px}.phone .delete_phone{font-size:22px;color:#bdc3c7;display:inline-block;padding:0;margin-left:5px;line-height:0}.phone .delete_phone:hover{color:#c0392b}.phone .delete_phone i{vertical-align:middle}.phone .hide{display:none}.whatsapp label{color:#777;font-size:12px}.whatsapp label img{margin-left:5px}.submit_box{border-top:1px solid #e1e1e1;margin-top:40px;position:relative}.submit_box .form-submit:before{content:" ";width:90px;height:22px;display:block;position:absolute;background:transparent url(../../img/submit_point.png) no-repeat scroll center center;top:-4px}.submit_box .btn{margin-top:5px;padding:8px 20px;font-size:16px}.save_contact p{background:#cbfee2;padding:10px;margin-left:185px;width:500px;display:block;border-radius:3px;border:1px solid #cbfee2;padding-left:40px;position:relative;font-size:13px}.save_contact input{position:absolute;top:10px;left:10px}.posting_rule{/*position:absolute*/;top:30px;right:-8px;width:320px;font-size:13px;padding:10px;background-color:#fffbf6;border:1px solid #fee6d7}.posting_rule:before{content:'';position:absolute;border-left:7px solid #d39670;border-top:7px solid transparent;top:-7px;right:0}.posting_rule ul{list-style:circle!important;padding-left:20px!important}.posting_rule li{margin-top:10px}.posting_rule .rule_title{font-weight:700;margin-bottom:10px;display:inline-block;color:#ff3500;font-size:14px}.posting_rule a{margin-top:10px;display:inline-block;font-size:12px}.promote_view{background:#fff}.promote_view h1{font-size:28px;display:block;text-align:center;padding:20px;font-weight:700;margin-top:30px}.promote_view .info{max-width:680px;margin:0 auto;text-align:center;color:#333}.promote_view .list_ads>li{border-top:1px solid #e1e1e1}.promote_view .list_ads{}.preview_ad{width:900px;margin:0 auto}.list_promote{margin:30px 16px;text-align:center;vertical-align:bottom}.list_promote:before,.list_promote:after{clear:both;display:table;content:'';width:100%}.list_promote .item{display:inline-block;width:20%;background:#f4f4f4;border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;float:left}.list_promote .item:hover{position:relative;box-shadow:0 -3px 3px 2px rgba(0,0,0,.2)}.list_promote .item .head{text-align:center;color:#fff;overflow:hidden}.list_promote .item .detail{border:1px solid #eee}.list_promote .item .type{padding:20px 10px 10px;font-size:24px;font-weight:700}.item-free .head{background:#34495e}.item-free .btn{color:#34495e;border-color:#34495e}.item-urgent_ad .head{background:#8e44ad}.item-urgent_ad .btn{color:#8e44ad;border-color:#8e44ad}.item-urgent_ad .btn:hover{color:#fff;background-color:#8e44ad}.item-highlight_ad .head{background:#27ae60}.item-highlight_ad .btn{color:#27ae60;border-color:#27ae60}.item-highlight_ad .btn:hover{color:#fff;background-color:#27ae60}.item-feature_ad .head{background:#e67e22}.item-feature_ad .btn{color:#e67e22;border-color:#e67e22}.item-feature_ad .btn:hover{color:#fff;background-color:#e67e22}.item-top_ad .head{background:#e74c3c}.item-top_ad .btn{color:#e74c3c;border-color:#e74c3c}.item-top_ad .btn:hover{color:#fff;background-color:#e74c3c}.preview_ad{margin-bottom:20px;background:#f4f4f4;padding:0 10px 10px}.preview_ad .title{font-size:13px;padding:8px 0;color:#888;display:block}.base_price{margin-bottom:15px;font-size:18px}.base_price small{display:inline-block;font-size:13px;font-weight:400}.promote_view .list-feature{margin:0 10px}.promote_view .list-feature li{font-size:12px;color:#333;border-top:1px solid #eee;border-bottom::1px solid #eee;margin-bottom:-1px;padding:7px}.btn_priview{font-size:12px;padding:8px;color:#ee8001}.btn_priview:hover{text-decoration:underline}.promote_view .list .btn{margin-left:30px;margin-right:30px}.promote_view .disabled{cursor:default;opacity:.5;pointer-events:none}.promote_view .controls{border-bottom:1px solid #e1e1e1;padding:10px}.promote_view .controls:before,.promote_view .controls:after{content:'';display:table;overflow:hidden;clear:both}.promote_view .controls .btn{padding:8px 15px}.message_box{text-align:center;margin:30px auto!important;max-width:720px}.message_box .message_title{font-size:24px}#btn_promote{display:inline-block;margin-bottom:20px;padding:8px 30px;font-size:16px}.locations_box{background:rgba(0,122,191,.1);padding-top:0;padding-bottom:0;overflow:hidden;display:table;width:100%}.locations_box .controls{width:480px;display:table-cell;vertical-align:top}.locations_box .map_view{display:table-cell;vertical-align:top}.locations_box .controls textarea.control{width:100%}.locations_box .map_box{display:block;position:relative;margin:10px 10px 10px 30px;border:1px solid #d1d1d1;background:#000}.locations_box #map{height:240px;display:block}.locations_box .loading{position:absolute;top:0;left:0;background:rgba(255,255,255,.8) url(../../img/loading.gif) no-repeat center;width:100%;height:100%;z-index:99}.locations_box #find_location{position:absolute;right:10px;top:10px;background:#fff;color:#333;padding:7px 10px;font-size:11px;box-shadow:0 0 1px 1px rgba(0,0,0,.1);border-radius:2px}.locations_box #find_location:hover{background:#f4f4f4}#ad_map.hidden{display:none}#map .centerMarker{position:absolute;background:url(http://maps.gstatic.com/mapfiles/markers2/marker.png) no-repeat;top:50%;left:50%;z-index:1;margin-left:-10px;margin-top:-34px;height:34px;width:20px;cursor:pointer}.input-group-addon{padding:8px 12px;font-size:14px;font-weight:400;line-height:1;color:#555;text-align:center;background-color:#eee;border:1px solid #ccc;border-radius:4px;border-top-right-radius:0;border-bottom-right-radius:0;border-right:none;float:left}#ad_price{border-top-left-radius:0;border-bottom-left-radius:0;float:left;max-width:160px}.input-ad_price .form-input{position:relative}.input-ad_price .icon-delete{position:absolute;right:-35px;top:-4px}.input-ad_price .input-group{overflow:hidden}.input-ad_price label.error{display:block}.devide{text-align:center;margin:15px 0;font-size:12px;color:#888;position:relative}.devide:before{content:'';height:1px;background:#e1e1e1;width:100%;position:absolute;left:0;top:10px}.devide span{background:#fff;display:inline-block;padding-left:10px;padding-right:10px;position:relative;z-index:9}
		ol, ul {
    list-style: none;
}
.miller--terms--container,.miller--placeholder__background{
	margin:0px;
	}


	</style>

</head>
<body class="home search">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
<div id="header" class="header">

    <?php $this->load->view('include/top_header'); ?>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    
	<?php $this->load->view('include/main_header'); ?>
    <!-- END MANIN HEADER -->
    

   

</div>
<!-- end header -->
<div class="container">
	<div class="title">
			<ul class="step">
			<li><i>1</i> Post an Ad</li>
			<li class=""><i>2</i> Select a Category</li>
			<li class="active"><i>3</i> Description</li>
			<li class="disable"><i>4</i> Finish</li>
			</ul>

			<div class="border-dot">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			</div>
	</div>
<br>


<?php 

	$this->load->view('front/ad/'.$form_name);
			
?>



</div>

<br>


<!-- Footer -->
<?php 
	$this->load->view('include/footer');
?>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<?php 
	$this->load->view('include/footer_script_home');
?>



	


</body>
</html>
