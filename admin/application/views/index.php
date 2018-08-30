<!doctype html>
<html class="fixed">
	<?php 
		
		$this->load->view($folder.'/'.$page_head);
	?>

	<style type="text/css">
		label.error{
			margin-top: -5px;
			z-index: 1;
			position: absolute;
		}
	</style>
	<body>
		<section class="body">

			<?php 
				include_once $folder.'/header.php'; 				
			?>

			<div class="inner-wrapper">
				

				<?php include_once ($folder.'/navigation.php'); ?>

				<?php 
					
					$this->load->view($folder.'/'.$page_name);
				?>
			</div>

			<?php include_once ($folder.'/upcoming-tasks.php'); ?>

		</section>

		<?php 
			
			$this->load->view($folder.'/'.$page_footer);
		?>
		
	</body>
</html>