<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
        include('layout/header.php');
    ?>
</head>

<body>

	<!-- Main navbar -->
	<div class="navbar navbar-expand-lg navbar-dark navbar-static">
		<div class="d-flex flex-1 d-lg-none">
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
				<i class="icon-paragraph-justify3"></i>
			</button>
			<button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
				<i class="icon-transmission"></i>
			</button>
		</div>

		<div class="navbar-brand text-center text-lg-left">
			<a href="index.html" class="d-inline-block">
				<img src="assets/images/logo_light.png" class="d-none d-sm-block" alt="">
				<img src="assets/images/logo_icon_light.png" class="d-sm-none" alt="">
			</a>
		</div>

		<div class="collapse navbar-collapse  order-2 order-lg-1" id="navbar-mobile">	
		</div>

		<?php include('layout/navbar.php') ?>
	</div>
	<!-- /main navbar -->


	<!-- Page content -->
	<div class="page-content">

		<!-- Main sidebar -->
		<div class="sidebar sidebar-dark sidebar-main sidebar-expand-lg">

			<!-- Sidebar content -->
			<div class="sidebar-content">

				<!-- User menu -->
				<div class="sidebar-section sidebar-user my-1">
					<div class="sidebar-section-body">
						<div class="media">
							<a href="#" class="mr-3">
								<img src="assets/images/user-profile.png" class="rounded-circle" alt="">
							</a>

							<div class="media-body">
								<div class="font-weight-semibold">Administrator</div>
								<div class="font-size-sm line-height-sm opacity-50">
									Senior Administrator
								</div>
							</div>

							<div class="ml-3 align-self-center">
								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-control sidebar-main-resize d-none d-lg-inline-flex">
									<i class="icon-transmission"></i>
								</button>

								<button type="button" class="btn btn-outline-light-100 text-white border-transparent btn-icon rounded-pill btn-sm sidebar-mobile-main-toggle d-lg-none">
									<i class="icon-cross2"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
				<!-- /user menu -->


				<!-- Main navigation -->
				<div class="sidebar-section">
					<?php include("layout/sidebar.php") ?>
				</div>
				<!-- /main navigation -->

			</div>
			<!-- /sidebar content -->
			
		</div>
		<!-- /main sidebar -->


		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Inner content -->
			<div class="content-inner">

				<!-- Page header -->
				<div class="page-header page-header-light">
					<div class="page-header-content header-elements-lg-inline">
						<div class="page-title d-flex">
							<h4><i class="icon-arrow-left52 mr-2"></i> <span class="font-weight-semibold">Home</span> - Dashboard</h4>
							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>
					</div>

					<div class="breadcrumb-line breadcrumb-line-light header-elements-lg-inline">
						<div class="d-flex">
							<div class="breadcrumb">
								<a href="index.html" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> Home</a>
								<span class="breadcrumb-item active">Dashboard</span>
							</div>

							<a href="#" class="header-elements-toggle text-body d-lg-none"><i class="icon-more"></i></a>
						</div>

						
					</div>
				</div>
				<!-- /page header -->


				<!-- Content area -->
				<div class="content">
					<!-- Dashboard content -->
					<div class="row">
						<div class="col-xl-12">

							<!-- Quick stats boxes -->
							<div class="row">
								<div class="col-lg-4">

									<!-- Members online -->
									<div class="card bg-teal text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="font-weight-semibold mb-0">3,450</h3>
												<!-- <span class="align-self-center ml-auto chart-icon"><img src="assets/images/icons/charts.png"> </span> -->
						                	</div>
						                	
						                	<div>
												Total Transaction
												<div class="font-size-sm opacity-75">489 avg</div>
											</div>
										</div>

										
									</div>
									<!-- /members online -->

								</div>								

								<div class="col-lg-4">

									<!-- Current server load -->
									<div class="card bg-pink text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="font-weight-semibold mb-0">49.4%</h3>
												
						                	</div>
						                	
						                	<div>
												Brands
												<div class="font-size-sm opacity-75">34.6% avg</div>
											</div>
										</div>

									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="card bg-primary text-white">
										<div class="card-body">
											<div class="d-flex">
												<h3 class="font-weight-semibold mb-0">$18,390</h3>
												
						                	</div>
						                	
						                	<div>
												Total Revenue
												<div class="font-size-sm opacity-75">$37,578 avg</div>
											</div>
										</div>

										
									</div>
									<!-- /today's revenue -->

								</div>
								
							</div>
							<!-- /quick stats boxes -->


							<!-- Support tickets -->
							<div class="card">
								<div class="card-header header-elements-sm-inline">
									<h6 class="card-title">Overview</h6>
									<div class="header-elements">
										<a class="text-body daterange-ranges font-weight-semibold cursor-pointer dropdown-toggle">
											<i class="icon-calendar3 mr-2"></i>
											<span></span>
										</a>
				                	</div>
								</div>

								<div class="card-body d-lg-flex align-items-lg-center justify-content-lg-between flex-lg-wrap">
									<div class="d-flex align-items-center mb-3 mb-lg-0">
										<div id="tickets-status"></div>
										<div class="ml-3">
											<h5 class="font-weight-semibold mb-0">14,327 <span class="text-success font-size-sm font-weight-normal"><i class="icon-arrow-up12"></i> (+2.9%)</span></h5>
											<span class="badge badge-mark border-success mr-1"></span> <span class="text-muted">Jun 16, 10:00 am</span>
										</div>
									</div>

									<div class="d-flex align-items-center mb-3 mb-lg-0">
										<a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
											<i class="icon-alarm-add"></i>
										</a>
										<div class="ml-3">
											<h5 class="font-weight-semibold mb-0">1,132</h5>
											<span class="text-muted">total tickets</span>
										</div>
									</div>

									<div class="d-flex align-items-center mb-3 mb-lg-0">
										<a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
											<i class="icon-spinner11"></i>
										</a>
										<div class="ml-3">
											<h5 class="font-weight-semibold mb-0">06:25:00</h5>
											<span class="text-muted">response time</span>
										</div>
									</div>

									<div>
										<a href="#" class="btn btn-teal"><i class="icon-file-upload mr-2"></i> Report</a>
									</div>
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead> 
											<tr>
												<th style="width: 50px">Due</th>
												<th style="width: 300px;">User</th>
												<th>Description</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>

											<tr>
												<td class="text-center">
													<h6 class="mb-0">12</h6>
													<div class="font-size-sm text-muted line-height-1">hours</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<a href="#" class="btn btn-teal rounded-pill btn-icon btn-sm">
																<span class="letter-icon"></span>
															</a>
														</div>
														<div>
															<a href="#" class="text-body font-weight-semibold letter-icon-title">Annabelle Doney</a>
															<div class="text-muted font-size-sm"><span class="badge badge-mark border-primary mr-1"></span> Active</div>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-body">
														<div class="font-weight-semibold">[#1183] Workaround for OS X selects printing bug</div>
														<span class="text-muted">Chrome fixed the bug several versions ago, thus rendering this...</span>
													</a>
												</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
																<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="mb-0">16</h6>
													<div class="font-size-sm text-muted line-height-1">hours</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<a href="#">
																<img src="assets/images/user-profile.png" class="rounded-circle" width="32" height="32" alt="">
															</a>
														</div>
														<div>
															<a href="#" class="text-body font-weight-semibold">Chris Macintyre</a>
															<div class="text-muted font-size-sm"><span class="badge badge-mark border-primary mr-1"></span> Active</div>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-body">
														<div class="font-weight-semibold">[#1249] Vertically center carousel controls</div>
														<span class="text-muted">Try any carousel control and reduce the screen width below...</span>
													</a>
												</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
																<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="mb-0">20</h6>
													<div class="font-size-sm text-muted line-height-1">hours</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<a href="#" class="btn btn-primary rounded-pill btn-icon btn-sm">
																<span class="letter-icon"></span>
															</a>
														</div>
														<div>
															<a href="#" class="text-body font-weight-semibold letter-icon-title">Robert Hauber</a>
															<div class="text-muted font-size-sm"><span class="badge badge-mark border-primary mr-1"></span> Active</div>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-body">
														<div class="font-weight-semibold">[#1254] Inaccurate small pagination height</div>
														<span class="text-muted">The height of pagination elements is not consistent with...</span>
													</a>
												</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
																<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
															</div>
														</div>
													</div>
												</td>
											</tr>

											<tr>
												<td class="text-center">
													<h6 class="mb-0">40</h6>
													<div class="font-size-sm text-muted line-height-1">hours</div>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<a href="#" class="btn btn-warning rounded-pill btn-icon btn-sm">
																<span class="letter-icon"></span>
															</a>
														</div>
														<div>
															<a href="#" class="text-body font-weight-semibold letter-icon-title">Robert Hauber</a>
															<div class="text-muted font-size-sm"><span class="badge badge-mark border-primary mr-1"></span> Active</div>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-body">
														<div class="font-weight-semibold">[#1184] Round grid column gutter operations</div>
														<span class="text-muted">Left rounds up, right rounds down. should keep everything...</span>
													</a>
												</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
																<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-checkmark3 text-success"></i> Resolve issue</a>
																<a href="#" class="dropdown-item"><i class="icon-cross2 text-danger"></i> Close issue</a>
															</div>
														</div>
													</div>
												</td>
											</tr>


											

											<tr>
												<td class="text-center">
													<i class="icon-cross2 text-danger"></i>
												</td>
												<td>
													<div class="d-flex align-items-center">
														<div class="mr-3">
															<a href="#" class="btn btn-indigo rounded-pill btn-icon btn-sm">
																<span class="letter-icon"></span>
															</a>
														</div>
														<div>
															<a href="#" class="text-body font-weight-semibold letter-icon-title">Katleen Jensen</a>
															<div class="text-muted font-size-sm"><span class="badge badge-mark border-danger mr-1"></span> Closed</div>
														</div>
													</div>
												</td>
												<td>
													<a href="#" class="text-body">
														<div>[#1038] Proper sizing of form control feedback</div>
														<span class="text-muted">Feedback icon sizing inside a larger/smaller form-group...</span>
													</a>
												</td>
												<td class="text-center">
													<div class="list-icons">
														<div class="dropdown">
															<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>
															<div class="dropdown-menu dropdown-menu-right">
																<a href="#" class="dropdown-item"><i class="icon-undo"></i> Quick reply</a>
																<a href="#" class="dropdown-item"><i class="icon-history"></i> Full history</a>
																<div class="dropdown-divider"></div>
																<a href="#" class="dropdown-item"><i class="icon-plus3 text-primary"></i> Unresolve issue</a>
																<a href="#" class="dropdown-item"><i class="icon-spinner11 text-success"></i> Reopen issue</a>
															</div>
														</div>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>

						
					</div>
					<!-- /dashboard content -->

				</div>
				<!-- /content area -->


				<!-- Footer -->
				<?php include('layout/footer.php') ?>
				<!-- /footer -->

			</div>
			<!-- /inner content -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
</html>
