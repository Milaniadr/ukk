<?php
session_start();
if($_SESSION['traveler']){

	?>

	<?php
	require_once '../../action/koneksi.php';
	if (isset($_POST['Input'])){
		$depart_at = $_POST['depart_at'];
		$rute_from = $_POST['rute_from'];
		$rute_to = $_POST['rute_to'];
		$price = $_POST['price'];
		$transportationid = $_POST['transportationid'];			
		$connect->query("INSERT INTO rute (depart_at, rute_from, phone, gender, transportationid) VALUES ('$depart_at','$rute_from','$rute_to','$price','$transportationid')");
	}
	?> 
	<!--
	Author: Wgender
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>MIongiTrip</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- Graph CSS -->
	<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- jQuery -->
	<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
	<!-- lined-icons -->
	<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
	<!-- //lined-icons -->
	<script src="js/jquery-1.10.2.min.js"></script>
	<!--clock init-->
	<script src="js/css3clock.js"></script>
	<!--Easy Pie Chart-->
	<!--skycons-icons-->
	<script src="js/skycons.js"></script>
	<!--//skycons-icons-->
</head> 
<body>
	<div class="page-container">
		<!--/content-inner-->
		<div class="left-content">
			<div class="inner-content">
				<!-- header-starts -->
				<div class="header-section">
					<!--menu-right-->

					<!--/profile_details-->

					<!--//menu-right-->
					<div class="clearfix"></div>
				</div>

				<!-- //header-ends -->
				<!--//outer-wp-->
				<div class="outter-wp">
					<!--/sub-heard-part-->

					<!--/sub-heard-part-->	
					<!--/forms-->
					<div class="forms-main">
						<h2 class="inner-tittle">Form Data Rute</h2>
						<div class="graph-form">
							<div class="form-body">
								<form class="form-horizontal" role="form" method="POST"> 
									<div class="form-group">
										<label>Waktu</label>
										<input type="date" class="form-control" id="depart_at" placeholder="dd/mm/yyyy" name="depart_at">
									</div>
									<div class="form-group">
										<label>Keberangkatan</label>
										<input type="text" class="form-control" id="rute_from" placeholder="Kota Keberangkatan" name="rute_from">
									</div>
									<div class="form-group">
										<label>Tujuan</label>
										<input type="text" id="rute_to" class="form-control" id="rute_to" placeholder="Kota Tujuan" name="rute_to">
									</div>
									<div class="form-group">
										<label>Harga</label>
										<input type="text" id="price" class="form-control" id="price" placeholder="Harga" name="price">
									</div>
									<div class="form-group">
										<label>Nama Pesawat</label>
										<input type="text" id="transportationid" class="form-control" id="transportationid" placeholder="Nama Pesawat" name="transportationid">
									</div>

								</div>
								<div class="box-footer">
									<input name="Input" type="submit" class="btn btn-primary" value="Input">
								</div>
							</form> 
						</div>

					</div>
					<!--/forms-inner-->

					<!--//outer-wp-->
					<!--footer section start-->

					<!--footer section end-->
				</div>
			</div>
			<!--//content-inner-->
			<!--/sidebar-menu-->
			<?php require_once 'page/navbar.php' ?>
			<!--js -->
			<link rel="stylesheet" href="css/vroom.css">
			<script type="text/javascript" src="js/vroom.js"></script>
			<script type="text/javascript" src="js/TweenLite.min.js"></script>
			<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
			<script src="js/jquery.nicescroll.js"></script>
			<script src="js/scripts.js"></script>

			<!-- Bootstrap Core JavaScript -->
			<script src="js/bootstrap.min.js"></script>
		</body>
		</html>
		<?php
	} else {
		echo "<script>window.location='../login.php';</script>";
	}







