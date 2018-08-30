<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo ucfirst($page_name); ?></h2>

						 
					<div class="right-wrapper pull-left">
							<ol class="breadcrumbs">
								
								<a href="<?php echo site_url() ?>company/product/add" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-plus"></i> 
									Add
								</a>
								<a href="<?php echo site_url() ?>company/product/list/active" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-success"><i class="fa fa-check"></i> Active </a>
								<a href="<?php echo site_url() ?>company/product/list/deleted" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-times"></i> Deactive</a>
								<a href="#" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-paste"></i> Export
								</a>
							</ol>
						<div class="visible-xs toggle-sidebar-left">
							
								<a href="<?php echo site_url() ?>company/product/add" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-default"><i class="fa fa-plus"></i> 
									
								</a>
								<a href="<?php echo site_url() ?>company/product/list/active" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-success"><i class="fa fa-check"></i>  </a>
								<a href="<?php echo site_url() ?>company/product/list/deleted" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-danger"><i class="fa fa-times"></i> </a>
								<a href="#" style="border-radius: 0px;color:#000;" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="fa fa-paste"></i> 
								</a>
								
						</div>
						
						</div>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Table</span></li>
								<li><span>Advanced</span></li>
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
							<?php $this->load->view($folder.'/'.$form_name); ?>



							




						</section>
						


					<!-- end: page -->
				</section>