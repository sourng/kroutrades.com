<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">

									<li class="<?php if ($page == 'dashboard') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>admin/dashboard">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>

						
									<li class="nav-parent <?php if ($page == 'category') echo 'nav-expanded nav-active';  ?> ">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Category</span>
										</a>
										<ul class="nav nav-children">
											<li  class="<?php if ($page_sub == 'main') echo 'nav-active';  ?> ">
												<a href="<?php echo site_url() ?>admin/category/list">
													 Main Category
												</a>
											</li>
											<li class="<?php if ($page_sub == 'sub1') echo 'nav-active';  ?>" >
												<a href="<?php echo site_url() ?>admin/category/sub1/list">
													 Sub Category 1
												</a>
											</li>
											<li class="<?php if ($page_sub == 'sub2') echo 'nav-active';  ?>" >
												<a href="<?php echo site_url() ?>admin/category/sub2/list">
													 Sub Category 2
												</a>
											</li>
											
										</ul>
									</li>
						
									<li class="<?php if ($page == 'product') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>admin/product/list">										
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Product</span>
										</a>
										
									</li>

									<li class="<?php if ($page == 'company') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>admin/company/list">										
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Company</span>
										</a>
										
									</li>

									<li class="<?php if ($page == 'order') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>admin/order/list">										
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Order</span>
										</a>
										
									</li>
								
								</ul>
							</nav>
				
				
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->