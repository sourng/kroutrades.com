<section role="main" class="content-body">
					<header class="page-header">
						<h2><?php echo ucfirst($page) ?></h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="#">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-6 col-lg-12 col-xl-6">
							<div class="row">


								<div class="col-md-4 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-primary">
										<div class="panel-body">
											<div class="widget-summary widget-summary-md">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-primary">
														<i class="fa fa-life-ring"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Support Questions</h4>
														<div class="info">
															<strong class="amount">1281</strong>
															<span class="text-primary">(14 unread)</span>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(view all)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-secondary">
										<div class="panel-body">
											<div class="widget-summary widget-summary-md">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-secondary">
														<i class="fa fa-usd"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Total Profit</h4>
														<div class="info">
															<strong class="amount">$ 14,890.30</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(withdraw)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-tertiary">
										<div class="panel-body">
											<div class="widget-summary widget-summary-md">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-tertiary">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Orders</h4>
														<div class="info">
															<strong class="amount">38</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(statement)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								<div class="col-md-4 col-lg-4 col-xl-4">
									<section class="panel panel-featured-left panel-featured-quartenary">
										<div class="panel-body">
											<div class="widget-summary widget-summary-md">
												<div class="widget-summary-col widget-summary-col-icon">
													<div class="summary-icon bg-quartenary">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="widget-summary-col">
													<div class="summary">
														<h4 class="title">Today's Visitors</h4>
														<div class="info">
															<strong class="amount">3765</strong>
														</div>
													</div>
													<div class="summary-footer">
														<a class="text-muted text-uppercase">(report)</a>
													</div>
												</div>
											</div>
										</div>
									</section>
								</div>
								

							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>

									<h2 class="panel-title">Best Seller</h2>
									<p class="panel-subtitle">Customize the graphs as much as you want, there are so many options and features to display information using Porto Admin Template.</p>
								</header>
								<div class="panel-body">

									<!-- Flot: Basic -->
									<div class="chart chart-md" id="flotDashBasic"></div>
									<script>

										var flotDashBasicData = [{
											data: [
												[0, 170],
												[1, 169],
												[2, 173],
												[3, 188],
												[4, 147],
												[5, 113],
												[6, 128],
												[7, 169],
												[8, 173],
												[9, 128],
												[10, 128]
											],
											label: "Series 1",
											color: "#0088cc"
										}, {
											data: [
												[0, 115],
												[1, 124],
												[2, 114],
												[3, 121],
												[4, 115],
												[5, 83],
												[6, 102],
												[7, 148],
												[8, 147],
												[9, 103],
												[10, 113]
											],
											label: "Series 2",
											color: "#2baab1"
										}, {
											data: [
												[0, 70],
												[1, 69],
												[2, 73],
												[3, 88],
												[4, 47],
												[5, 13],
												[6, 28],
												[7, 69],
												[8, 73],
												[9, 28],
												[10, 28]
											],
											label: "Series 3",
											color: "#734ba9"
										}];

										// See: assets/javascripts/dashboard/examples.dashboard.js for more settings.

									</script>

								</div>
							</section>
						</div>
						<div class="col-md-6">
							<section class="panel">
								<header class="panel-heading">
									<div class="panel-actions">
										<a href="#" class="fa fa-caret-down"></a>
										<a href="#" class="fa fa-times"></a>
									</div>
									<h2 class="panel-title">Server Usage</h2>
									<p class="panel-subtitle">It's easy to create custom graphs on Porto Admin Template, there are several graph types that you can use, such as lines, bars, pie charts, etc...</p>
								</header>
								<div class="panel-body">

									<!-- Flot: Curves -->
									<div class="chart chart-md" id="flotDashRealTime"></div>

								</div>
							</section>
						</div>
					</div>

					
				
					<!-- end: page -->
				</section>
				