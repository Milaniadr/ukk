	<?php
	session_start();
	if($_SESSION['traveler']){

		?>
	<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
	<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Forms :: w3layouts</title>
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
						<h2 class="inner-tittle">Data Pesawat</h2>
						<div class="graph-form">
							<div class="form-body">
								<div class="container">
									<div class="row">
										<div id="tbl-length" class="col-sm-12 col-md-10">
											<table class="table table-striped table-responsive table-hover">
												<thead>
													<th>No</th>
													<th>Nama Pesawat</th>
													<th>Kode</th>
													<th>Deskripsi</th>
													<th>Seat</th>
													<th>Opsi</th>
												</thead>
												<tbody>

													<?php
  // Load file koneksi.php
													require_once '../../action/koneksi.php';

  														$query = "SELECT * FROM transportation"; // Query untuk menampilkan semua data siswa
  														$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
  														$no=1;
  														while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
  															echo "<tr>";
  															echo "<td>".$no."</td>";
  															echo "<td>".$data['name']."</td>";    
  															echo "<td>".$data['code']."</td>";
  															echo "<td>".$data['description']."</td>";
  															echo "<td>".$data['seat_qty']."</td>";
  															echo "<td>
  																	<a class='fa fa-edit' href='editpesawat.php?id=".$data['id']."'></a>
  																	<a class='fa fa-trash-o' href='deletpesawat.php?aksi=delete&id=".$data['id']."'></a>
  																</td>";

  															echo "</tr>";
  															$no++;
  														}
  														?>

  													</tbody>
  												</table>
  											</div>
  										</div>
  									</div>
  								</div>
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
  				<div class="sidebar-menu">
  					<header class="logo">
  						<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Traveler</h1></span> 
  						<!--<img id="logo" src="" alt="Logo"/>--> 
  					</a> 
  				</header>
  				<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>

  				<div class="menu">
  					<ul id="menu" >
  						<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
  						<li><a href="forms.php"><i class="fa fa-plane"></i> <span>Input Data Pesawat</span></a></li>
  						<li><a href="dafpesawat.php"><i class="fa fa-plane"></i> <span>Data Pesawat</span></a></li>

  						<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tabs &amp; Panels</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul id="menu-academico-sub" >
  								<li id="menu-academico-avaliacoes" ><a href="tabs.php"> Tabs &amp; Panels</a></li>
  								<li id="menu-academico-boletim" ><a href="widget.php">Widgets</a></li>
  								<li id="menu-academico-avaliacoes" ><a href="calender.php">Calendar</a></li>

  							</ul>
  						</li>
  						<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Ui Elements</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul id="menu-academico-sub" >
  								<li id="menu-academico-avaliacoes" ><a href="forms.php">Forms</a></li>
  								<li id="menu-academico-boletim" ><a href="validation.php">Validation Forms</a></li>
  								<li id="menu-academico-boletim" ><a href="table.php">Tables</a></li>
  								<li id="menu-academico-boletim" ><a href="Buttons.php">Buttons</a></li>
  							</ul>
  						</li>
  						<li><a href="typography.php"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
  						<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul id="menu-academico-sub" >
  								<li id="menu-academico-avaliacoes" ><a href="Login.php">Login</a></li>
  								<li id="menu-academico-boletim" ><a href="register.php">Register</a></li>
  								<li id="menu-academico-boletim" ><a href="404.php">404</a></li>
  								<li id="menu-academico-boletim" ><a href="sign.php">Sign up</a></li>
  								<li id="menu-academico-boletim" ><a href="profile.php">Profile</a></li>
  							</ul>
  						</li>
  						<li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul>
  								<li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
  								<li><a href="inbox.php"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
  								<li><a href="editor.php"><span class="lnr lnr-highlight"></span> Editors Page</a></li>

  							</ul>
  						</li>
  						<li id="menu-academico" ><a href="#"><i class="lnr lnr-layers"></i> <span>Components</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul id="menu-academico-sub" >
  								<li id="menu-academico-avaliacoes" ><a href="grids.php">Grids</a></li>
  								<li id="menu-academico-boletim" ><a href="media.php">Media Objects</a></li>

  							</ul>
  						</li>
  						<li><a href="chart.php"><i class="lnr lnr-chart-bars"></i> <span>Charts</span> <span class="fa fa-angle-right" style="float: right"></span></a>
  							<ul>
  								<li><a href="map.php"><i class="lnr lnr-map"></i> Maps</a></li>
  								<li><a href="graph.php"><i class="lnr lnr-apartment"></i> Graph Visualization</a></li>
  							</ul>
  						</li>
  						<li id="menu-comunicacao" ><a href="#"><i class="fa fa-smile-o"></i> <span>More</span><span class="fa fa-angle-double-right" style="float: right"></span></a>
  							<ul id="menu-comunicacao-sub" >
  								<li id="menu-mensagens" style="width:120px" ><a href="project.php">Projects <i class="fa fa-angle-right" style="float: right; margin-right: -8px; margin-top: 2px;"></i></a>
  									<ul id="menu-mensagens-sub" >
  										<li id="menu-mensagens-enviadas" style="width:130px" ><a href="ribbon.php">Ribbons</a></li>
  										<li id="menu-mensagens-recebidas"  style="width:130px"><a href="blank.php">Blank</a></li>
  									</ul>
  								</li>
  								<li id="menu-arquivos" ><a href="500.php">500</a></li>
  							</ul>
  						</li>
              <li><a href="logout.php"><i class="fa fa-sign-out"></i> <span>Logout</span></a></li>
  					</ul>
  				</div>
  			</div>
  			<div class="clearfix"></div>		
  		</div>
  		<script>
  			var toggle = true;

  			$(".sidebar-icon").click(function() {                
  				if (toggle)
  				{
  					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
  					$("#menu span").css({"position":"absolute"});
  				}
  				else
  				{
  					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
  					setTimeout(function() {
  						$("#menu span").css({"position":"relative"});
  					}, 400);
  				}

  				toggle = !toggle;
  			});
  		</script>
  		<!--js -->
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