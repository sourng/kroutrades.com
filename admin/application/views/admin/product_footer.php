<!-- Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery/jquery.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/magnific-popup/magnific-popup.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>
		
		
		
		
		
		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/select2/select2.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="<?php echo base_url() ?>public/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/theme.init.js"></script>


		<!-- Examples -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="<?php echo base_url() ?>public/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="<?php echo base_url() ?>public/assets/javascripts/tables/examples.datatables.tabletools.js"></script>


		
	


		<!-- Specific Page Vendor -->
		<script src="<?php echo base_url() ?>public/assets/vendor/pnotify/pnotify.custom.js"></script>
		

		

		<script src="<?php echo base_url() ?>public/assets/javascripts/ui-elements/examples.notifications.js"></script>

		<!-- Examples -->
		<script src="<?php echo base_url() ?>public/assets/javascripts/ui-elements/examples.modals.js"></script>
		<!-- Vendor -->

		<script type="text/javascript">

			$('.modal-confirm-delete').click(function(e) {
				e.preventDefault();
				$.magnificPopup.close();
				var notice = new PNotify({
					title: 'Success',
					text: '<?php echo $page;if ($page_sub == '' || $page_sub == 'main' ) { }else{ echo '/'.$page_sub ; }  ?> Deleted.',
					type: 'success',
					addclass: 'stack-topleft'
				});
				Ajax_('<?php echo $page;if ($page_sub == '' || $page_sub == 'main' ) { }else{ echo '/'.$page_sub ; }  ?>','delete' , e.target.id);
			});

			$('.modal-confirm-restore').click(function(e) {
				e.preventDefault();
				$.magnificPopup.close();
				var notice = new PNotify({
					title: 'Success',
					text: '<?php echo $page;if ($page_sub == '' || $page_sub == 'main' ) { }else{ echo '/'.$page_sub ; }  ?> Restore.',
					type: 'success',
					addclass: 'stack-topleft'
				});
				Ajax_('<?php echo $page;if ($page_sub == '' || $page_sub == 'main' ) { }else{ echo '/'.$page_sub ; }  ?>','restore' , e.target.id);
			});


		function Ajax_(page, action, id) {
	      $.ajax({
	          url: 'index.php?admin/'+ page +'/'+ action +'/' + id,
	          method: 'GET',
	          success: function(data) {
	              //$('#ajax').html(data);

	              if (page == 'product') {
	              	$('tr#pro_id_' + id).remove();
	              }else if(page == 'category'){
	              	$('tr#cat_id_' + id).remove();
	              }else if(page == 'category/sub1'){
	              	$('tr#sub_cat1_id_' + id).remove();
	              }else if(page == 'category/sub2'){
	              	$('tr#subcat2_id_' + id).remove();
	              }else if(page == 'company'){
	              	$('tr#company_id_' + id).remove();
	              }
	              
	          }
	      })
	  };
    		
		</script>
