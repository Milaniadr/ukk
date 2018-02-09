<?php

$cn = require_once 'action/koneksi.php';
if (isset($_POST['submit'])){
	$name = $_POST['name'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$gender = $_POST['gender'];			
	$connect->query("INSERT INTO customer (name, address, phone, gender) VALUES ('$name','$address','$phone','$gender')");
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>MIongi travel agent</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Book My Trip web template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
		<!-- //custom-theme -->
		<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
		<!-- stylesheet -->
		<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="//fonts.googleapis.com/css?family=Asap:400,400i,500,500i,700,700i" rel="stylesheet">
		<!-- //stylesheet -->
	</head>
	<body class="bg agileinfo">
		<h1 class="agile_head text-center">MIongi Trip</h1>
		<p class="text-center">Selamat Datang, kami menyediakan tiket pesawat untuk seluruh indonesia</p>
		<div class="container w3">
			<form method="post" class="agile_form">
				<h2 class="w3layouts text-center">Silahkan pilih sesuai dengan kebutuhan anda </h2>
				<ul class="agile_info_select">
					<li><input type="radio" name="view" id="excellent"> 
						<label for="excellent">flight</label>
						<div class="check w3"></div>
					</li>
				</ul>
				<div class="clear"></div>
				<input type="text" placeholder="Full Name" name="name" class="name agileits" required=""/>
				<div class="clear"></div>
				<input type="text" placeholder="Kabupaten/Kota,Provinsi" name="address" class="address agileits" required=""/><br>
				<div class="clear"></div><br>
				<input type="text" placeholder="Number Phone" name="phone" class="phone agileits" required=""/>
				<div class="clear"></div>
				<input type="text" placeholder="Wanita / Pria" name="gender" class="name agileits" required=""/>
				<div class="submit">
					<input type="submit" value="submit" name="submit">
				</div>  
			</form>	
		</div>	
		<div class="agileits_w3layouts_copyright text-center">
			<p>© 2017 Book My Trip. All rights reserved | Design by <a href="//w3layouts.com/">W3layouts</a></p>
		</div>
		<!--start-date-piker-->
		<link rel="stylesheet" href="css/jquery-ui.css" />
		<script src="js/jquery-ui.js"></script>
		<script>
			$(function() {
				$( "#datepicker,#datepicker1" ).datepicker();
			});
		</script>

		<!-- /End-date-piker -->		
	</body>
	</html>