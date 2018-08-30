<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo ucfirst($page); ?></h2>

						
						<!-- <?php $this->load->view('admin/'.$action); ?> -->

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="<?php echo site_url() ?>admin/dashboard">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span><?php echo $page ?></span></li>
								<li><span><?php echo $page_sub ?></span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
						
												
							<section class="panel">
							<!--<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="fa fa-caret-down"></a>
									<a href="#" class="fa fa-times"></a>
								</div>
						
								<h2 class="panel-title">Basic</h2>
							</header> -->
							<?php $this->load->view('admin/'.$form_name); ?>



							




						</section>
						


					<!-- end: page -->
				</section>