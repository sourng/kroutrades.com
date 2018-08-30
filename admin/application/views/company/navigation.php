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

									<li class="<?php if ($page_name == 'dashboard') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>company/dashboard">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>

						
									<!-- <li class="nav-parent">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Forms</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.html">
													 Basic
												</a>
											</li>
											<li>
												<a href="forms-advanced.html">
													 Advanced
												</a>
											</li>
											<li>
												<a href="forms-validation.html">
													 Validation
												</a>
											</li>
											<li>
												<a href="forms-layouts.html">
													 Layouts
												</a>
											</li>
											<li>
												<a href="forms-wizard.html">
													 Wizard
												</a>
											</li>
											<li>
												<a href="forms-code-editor.html">
													 Code Editor
												</a>
											</li>
										</ul>
									</li> -->
									<li class="<?php if ($page_name == 'product') echo 'nav-expanded nav-active';  ?> ">
										<a href="<?php echo site_url() ?>company/product/list">
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Product</span>
										</a>
										
									</li>
								
								</ul>
							</nav>
				
				
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->