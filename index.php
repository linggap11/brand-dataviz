<?php include('config/connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php 
        include('layout/header.php');
    ?>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	<script src="assets/js/plugins/visualization/echarts/echarts.min.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/bars_basic.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/bars_stacked.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/bars_stacked_clustered.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/bars_floating.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/bars_line.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/tornado_negative_stack.js"></script>
	<script src="assets/js/demo_charts/echarts/light/bars/tornado_staggered.js"></script>
	<style>
		.wrapper{
			background: #fff;
			border-radius: 5px;
			box-shadow: 7px 7px 12px rgba(0,0,0,0.05);
		}
		.wrapper header{
			color: #6990F2;
			font-size: 27px;
			font-weight: 600;
			text-align: center;
		}
		.wrapper form{
		    height: 250px;
			display: flex;
			cursor: pointer;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			border-radius: 5px;
			border: 2px dashed #45748a;
			margin-bottom: 30px;
		}
		form :where(i, p){
			color: #45748a;
		}
		form i{
			font-size: 50px;
		}
		form p{
			margin-top: 15px;
			font-size: 16px;
		}
		section .row{
			margin-bottom: 10px;
			background: #E9F0FF;
			list-style: none;
			padding: 15px 20px;
			border-radius: 5px;
			display: flex;
			align-items: center;
			justify-content: space-between;
		}
		section .row i{
			color: #6990F2;
			font-size: 30px;
		}
		section .details span{
			font-size: 14px;
		}
		.progress-area .row .content{
		
			margin-left: 15px;
		}
		.progress-area .details{
			display: flex;
			align-items: center;
			margin-bottom: 7px;
			justify-content: space-between;
		}
		.progress-area .content .progress-bar{
			height: 6px;
		
			margin-bottom: 4px;
			background: #fff;
			border-radius: 30px;
		}
		.content .progress-bar .progress{
			height: 100%;
			width: 0%;
			background: #6990F2;
			border-radius: inherit;
		}
		.uploaded-area{
			max-height: 232px;
		}
		.uploaded-area.onprogress{
			max-height: 150px;
		}
		.uploaded-area::-webkit-scrollbar{
			width: 0px;
		}
		.uploaded-area .row .content{
			display: flex;
			align-items: center;
		}
		.uploaded-area .row .details{
			display: flex;
			margin-left: 15px;
			flex-direction: column;
		}
		.uploaded-area .row .details .size{
			color: #45748a;
			font-size: 11px;
		}
		.uploaded-area i.fa-check{
			font-size: 16px;
		}
	</style>
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
												<?php 
													$total_trans = "SELECT COUNT(*) as total FROM transactions";
													$avg_trans = "SELECT AVG( orders_num ) as avg
													FROM (
													SELECT date, COUNT( DISTINCT order_id ) orders_num
													FROM transactions
													GROUP BY date
													)orders_per_day";
													$result_total = mysqli_fetch_assoc(mysqli_query($conn, $total_trans));
													$avg_trans = mysqli_fetch_assoc(mysqli_query($conn, $avg_trans));
													
												?>
												<h3 class="font-weight-semibold mb-0"><?= $result_total['total'] ?></h3>
												<!-- <span class="align-self-center ml-auto chart-icon"><img src="assets/images/icons/charts.png"> </span> -->
						                	</div>
						                	
						                	<div>
												Total Transaction
												<div class="font-size-sm opacity-75"><?= round($avg_trans['avg']) ?> Transactions/day</div>
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
												<?php 
													$total_brands = "SELECT SUM(qty_2) as total_jual, product_details FROM transactions WHERE qty_2 <> 0 GROUP BY LEFT(product_details,4)";
													$result_brands = mysqli_num_rows(mysqli_query($conn, $total_brands));
													
												?>
												<h3 class="font-weight-semibold mb-0"><?= $result_brands ?></h3>
						                	</div>
						                	
						                	<div>
												Brands
												<div class="font-size-sm opacity-75">/</div>
											</div>
										</div>

									</div>
									<!-- /current server load -->

								</div>

								<div class="col-lg-4">

									<!-- Today's revenue -->
									<div class="card bg-secondary text-white">
										<div class="card-body">
											<div class="d-flex">
												<?php 
													$total_revenue = "SELECT SUM(total_usd) as revenue FROM transactions";
													$avg_revenue = "SELECT AVG(total_usd) as revenue FROM transactions";
													$result_revenue = mysqli_fetch_assoc(mysqli_query($conn, $total_revenue));
													$avg_revenue = mysqli_fetch_assoc(mysqli_query($conn, $avg_revenue));
													
												?>
												<h3 class="font-weight-semibold mb-0">$ <?= number_format($result_revenue['revenue'], 3) ?></h3>
												
						                	</div>
						                	
						                	<div>
												Total Revenue
												<div class="font-size-sm opacity-75">$ <?= number_format($avg_revenue['revenue'], 3)?> avg</div>
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
										<a href="#" class="btn bg-transparent border-indigo text-indigo rounded-pill border-2 btn-icon">
											<i class="icon-table2"></i>
										</a>
										<div class="ml-3">
											<?php 
												$total_rows = "SELECT COUNT(*) as total_row FROM transactions";
												$result_rows = mysqli_num_rows(mysqli_query($conn, $total_rows));
												if ($result_rows > 0) {
													$total_rows_imported = mysqli_fetch_assoc(mysqli_query($conn, $total_rows));	
													?>
													<h5 class="font-weight-semibold mb-0"><?= $total_rows_imported['total_row'] ?></h5>
													<span class="text-muted">Total Data</span>
													<?php
												} else {
													?>
													<h5 class="font-weight-semibold mb-0">0</h5>
													<span class="text-muted">Total Data</span>
													<?php

												}
												
											?>
											
										</div>
									</div>

									<div>
									<button type="button" class="btn btn-teal" data-toggle="modal" data-target="#modal_form_upload"><i class="icon-file-upload mr-2"></i>Upload Report</button>
										<!-- <form method="post" action="import_file.php" enctype="multipart/form-data">
											<input type="file" name="file"/>
											<input type="submit" name="upload" class="btn btn-teal" value="Submit"/> -->
										
											<!-- <a href="#" class="btn btn-teal"><i class="icon-file-upload mr-2"></i> Upload Report</a> -->
										<!-- </form> -->
									 <!-- form upload -->
									<div id="modal_form_upload" class="modal fade" tabindex="-1">
										<div class="modal-dialog modal-lg">
											<div class="modal-content">
												<div class="modal-header bg-secondary text-white">
													<h5 class="modal-title">Upload Your Report</h5>
													<button type="button" class="close" data-dismiss="modal">&times;</button>
												</div>

												<div class="modal-body">
													<div class="form-group row ">
														<div class="col-lg-12">
															<!-- <input type="file" class="file-input-ajax" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" data-fouc> -->
															<div class="wrapper">
																<form method="post" action="import_file.php" enctype="multipart/form-data">
																	<input class="file-report" type="file" name="file" accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel"  hidden> 
																	<i class="fas fa-cloud-upload-alt"></i>
																	<p>Browse File to Upload</p>
																</form>
																<section class="progress-area"></section>
																<section class="uploaded-area"></section>
															</div>
															<!-- <span class="form-text text-muted">This scenario uses asynchronous/parallel uploads. Uploading itself is turned off in live preview.</span> -->
														</div>
													</div>	
												</div>

												<div class="modal-footer">
													<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
													
												</div>
											</div>
										</div>
									</div>
									<!-- /form upload -->
									</div>
								</div>

								<div class="table-responsive">
									<table class="table text-nowrap">
										<thead> 
											<tr>
												<th style="width: 50px">Date</th>
												<th style="width: 300px;">Order ID</th>
												<th>Product Details</th>
												<th class="text-center">Quantitiy</th>
												<th class="text-center" style="width: 20px;"><i class="icon-arrow-down12"></i></th>
											</tr>
										</thead>
										<tbody>
											<?php
												
												$overview = "SELECT id, date, order_id, product_details, sku_2, qty_2 FROM transactions WHERE order_id <> '---' ORDER BY date DESC LIMIT 5 ";
												$result = mysqli_query($conn, $overview);

												if (mysqli_num_rows($result) > 0) {
													// output data of each row
													while($row = mysqli_fetch_assoc($result)) {
														?>
														<tr>
															<td class="text-center">
																<h6 class="mb-0"><?= $row['date'] ?></h6>
															</td>
															<td>
																<div class="d-flex align-items-center">														
																	<div>
																		<a href="#" class="text-body font-weight-semibold letter-icon-title"><?= $row['order_id'] ?></a>															
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-body">
																	<div class="font-weight-semibold"><?= $row['product_details'] ?></div>
																	<span class="text-muted">SKU: <?= $row['sku_2'] ?></span>
																</a>
															</td>
															<td class="text-center">
																<h6 class="mb-0"><?= $row['qty_2'] ?></h6>
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
														<?php
														
													}													
												}	else {
													?>
														<tr>
															<td class="text-center">
																<h6 class="mb-0">-</h6>
															</td>
															<td>
																<div class="d-flex align-items-center">														
																	<div>
																		<a href="#" class="text-body font-weight-semibold letter-icon-title"><?= $row['order_id'] ?></a>															
																	</div>
																</div>
															</td>
															<td>
																<a href="#" class="text-body">
																	<div class="font-weight-semibold">-</div>
																</a>
															</td>
															<td class="text-center">
																<h6 class="mb-0">-</h6>
															</td>
															<td class="text-center">
																<div class="list-icons">
																	<div class="dropdown">
																		<a href="#" class="list-icons-item" data-toggle="dropdown"><i class="icon-menu7"></i></a>																		
																	</div>
																</div>
															</td>
														</tr>
													<?php
												}
												
											?>
											
										</tbody>
									</table>
								</div>
							</div>
							<div class="row">
							<?php 
								//get transaction type for top legend
								$sql_transaction_type = "SELECT count(transaction_type) as total_trans_type, transaction_type FROM transactions GROUP BY transaction_type";
								$result_transaction_type = mysqli_query($conn, $sql_transaction_type);
								$arr_transaction_type = array();
								$arr_total_transaction_type = array();
								while($transaction_type = mysqli_fetch_assoc($result_transaction_type)) {
									array_push($arr_transaction_type, $transaction_type['transaction_type']);
									array_push($arr_total_transaction_type, $transaction_type['total_trans_type']);
								}

								//get data brand
								$sql_brands_data = "SELECT SUM(qty_2) as total_jual, product_details FROM transactions WHERE qty_2 <> 0 GROUP BY LEFT(product_details,4) ORDER BY total_jual DESC LIMIT 10";
								$result_brands_data = mysqli_query($conn, $sql_brands_data);
								$brand_names = array();
								$brand_solds = array();
								while($brand_detail = mysqli_fetch_assoc($result_brands_data)) {
									$temp = explode(' ',trim($brand_detail['product_details']));
									array_push($brand_names, $temp[0]." ".$temp[1]." ..");
									array_push($brand_solds, $brand_detail['total_jual']);
								}
								// $temp = krsort($brand_solds);
								// print_r($temp);
								$top_label = json_encode($arr_transaction_type);			
								$brand_names = json_encode($brand_names);
								$brand_solds = json_encode($brand_solds);
								$entry_transaction_type_label = json_encode($arr_total_transaction_type);
								
							?>
								<div class="col-xl-6">

									<!-- Multi level donut chart -->
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Sales By Brand (TOP 10 Brands) </h5>
										</div>
										
										<div class="card-body">
											<div class="chart-container">
												<div class="chart has-fixed-height" id="main"></div>
												<script type="text/javascript">
													// Initialize the echarts instance based on the prepared dom
													var myChart = echarts.init(document.getElementById('main'));
													// Specify the configuration items and data for the chart
													option = {
													tooltip: {
														trigger: 'axis',
														axisPointer: {
														// Use axis to trigger tooltip
														type: 'shadow' // 'shadow' as default; can also be 'line' or 'shadow'
														}
													},
													legend: {},
													grid: {
														left: '3%',
														right: '4%',
														bottom: '3%',
														containLabel: true
													},
													xAxis: {
														type: 'value'
													},
													yAxis: {
														type: 'category',
														data: <?= $brand_names ?>
													},
													series: [
														{
															name: 'Total Sales',
															type: 'bar',
															stack: 'total',
															label: {
																show: true
															},
															emphasis: {
																focus: 'series'
															},
															data: <?= $brand_solds ?>
														},
														
														
													]
													};

													// Display the chart using the configuration items and data just specified.
													myChart.setOption(option);
												</script>
											</div>
										</div>
									</div>
									<!-- /multi level donut chart -->

								</div>

								<div class="col-xl-6">

									<!-- Pie chart timeline -->
									<div class="card">
										<div class="card-header">
											<h5 class="card-title">Total Transaction By Types</h5>
										</div>

										<div class="card-body">
											<div class="chart-container">
												<div class="chart has-fixed-height" id="transaction_type"></div>	
												<script type="text/javascript">
													// Initialize the echarts instance based on the prepared dom
													var myChart = echarts.init(document.getElementById('transaction_type'));
													// Specify the configuration items and data for the chart
													option = {
														legend: {
															top: 'bottom'
														},
														toolbox: {
															show: true,
															feature: {
															mark: { show: true },
															dataView: { show: true, readOnly: false },
															restore: { show: true },
															saveAsImage: { show: true }
															}
														},
														series: [
															{
															name: 'Nightingale Chart',
															type: 'pie',
															radius: [50, 200],
															center: ['50%', '50%'],
															roseType: 'area',
															itemStyle: {
																borderRadius: 8
															},
															data: [
																<?php 
																	for ($i=0; $i < count($arr_transaction_type); $i++) {
																		echo '{ value: "'.$arr_total_transaction_type[$i].'", name: "'.$arr_transaction_type[$i].'" },';
																	}
																?>
																
															]
															}
														]
													};
	
													myChart.setOption(option);
												</script>	
											
											</div>
										</div>
									</div>
									<!-- /pie chart timeline -->

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
<!-- <form id="upload_form" enctype="multipart/form-data" method="post">
  <input type="file" name="file" id="file" onchange="uploadFile()"><br>
  <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
  <h3 id="status"></h3>
  <p id="loaded_n_total"></p>
</form> -->
<script>
    const form = document.querySelector("form"),
	fileInput = document.querySelector(".file-report"),
	progressArea = document.querySelector(".progress-area"),
	uploadedArea = document.querySelector(".uploaded-area");

	// form click event
	form.addEventListener("click", () =>{
	fileInput.click();
	});

	fileInput.onchange = ({target})=>{
	let file = target.files[0]; //getting file [0] this means if user has selected multiple files then get first one only
	if(file){
		let fileName = file.name; //getting file name
		if(fileName.length >= 12){ //if file name length is greater than 12 then split it and add ...
		let splitName = fileName.split('.');
		fileName = splitName[0].substring(0, 13) + "... ." + splitName[1];
		}
		uploadFile(fileName); //calling uploadFile with passing file name as an argument
	}
	}

	// file upload function
	function uploadFile(name){
	let xhr = new XMLHttpRequest(); //creating new xhr object (AJAX)
	xhr.open("POST", "import_file.php"); //sending post request to the specified URL
	xhr.upload.addEventListener("progress", ({loaded, total}) =>{ //file uploading progress event
		let fileLoaded = Math.floor((loaded / total) * 100);  //getting percentage of loaded file size
		let fileTotal = Math.floor(total / 1000); //gettting total file size in KB from bytes
		let fileSize;
		// if file size is less than 1024 then add only KB else convert this KB into MB
		(fileTotal < 1024) ? fileSize = fileTotal + " KB" : fileSize = (loaded / (1024*1024)).toFixed(2) + " MB";
		let progressHTML = `<li class="row">
							<i class="fas fa-file-alt"></i>
							<div class="content">
								<div class="details">
								<span class="name">${name} • Uploading</span>
								<span class="percent">${fileLoaded}%</span>
								</div>
								<div class="progress-bar">
								<div class="progress" style="width: ${fileLoaded}%"></div>
								</div>
							</div>
							</li>`;
		// uploadedArea.innerHTML = ""; //uncomment this line if you don't want to show upload history
		uploadedArea.classList.add("onprogress");
		progressArea.innerHTML = progressHTML;
		if(loaded == total){
		progressArea.innerHTML = "";
		let uploadedHTML = `<li class="row">
								<div class="content upload">
								<i class="fas fa-file-alt"></i>
								<div class="details">
									<span class="name">${name} • Uploaded</span>
									<span class="size">${fileSize}</span>
								</div>
								</div>
								<i class="fas fa-check"></i>
							</li>`;
		uploadedArea.classList.remove("onprogress");
		// uploadedArea.innerHTML = uploadedHTML; //uncomment this line if you don't want to show upload history
		uploadedArea.insertAdjacentHTML("afterbegin", uploadedHTML); //remove this line if you don't want to show upload history
		}
	});
		let data = new FormData(form); //FormData is an object to easily send form data
		xhr.send(data); //sending form data
		
	}

</script>
