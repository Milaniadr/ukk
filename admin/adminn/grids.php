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
<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Grid System :: w3layouts</title>
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
<!-- /js -->
<script src="js/jquery-1.10.2.min.js"></script>
<!-- //js-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   <div class="inner-content">
		<!-- header-starts -->
			<div class="header-section">
						<!--menu-right-->
						<div class="top_menu">
						        <div class="main-search">
											<form>
											   <input type="text" value="Search" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Search';}" class="text"/>
												<input type="submit" value=""/>
											</form>
									<div class="close"><img src="images/cross.png" /></div>
								</div>
									<div class="srch"><button></button></div>
									<script type="text/javascript">
										 $('.main-search').hide();
										$('button').click(function (){
											$('.main-search').show();
											$('.main-search text').focus();
										}
										);
										$('.close').click(function(){
											$('.main-search').hide();
										});
									</script>
							<!--/profile_details-->
								<div class="profile_details_left">
									<ul class="nofitications-dropdown">
											<li class="dropdown note dra-down">
											  <div id="dd" class="wrapper-dropdown-3" tabindex="1">
																			<span>Italy</span>
																			<ul class="dropdown">
																				<li><a class="deutsch">France</a></li>
																				<li><a class="english"> Italy</a></li>
																				<li><a class="espana">Brazil</a></li>
																				<li><a class="russian">Usa</a></li>

																			</ul>
																		</div>
																		<script type="text/javascript">
			
																	function DropDown(el) {
																		this.dd = el;
																		this.placeholder = this.dd.children('span');
																		this.opts = this.dd.find('ul.dropdown > li');
																		this.val = '';
																		this.index = -1;
																		this.initEvents();
																	}
																	DropDown.prototype = {
																		initEvents : function() {
																			var obj = this;

																			obj.dd.on('click', function(event){
																				$(this).toggleClass('active');
																				return false;
																			});

																			obj.opts.on('click',function(){
																				var opt = $(this);
																				obj.val = opt.text();
																				obj.index = opt.index();
																				obj.placeholder.text(obj.val);
																			});
																		},
																		getValue : function() {
																			return this.val;
																		},
																		getIndex : function() {
																			return this.index;
																		}
																	}

																	$(function() {

																		var dd = new DropDown( $('#dd') );

																		$(document).click(function() {
																			// all dropdowns
																			$('.wrapper-dropdown-3').removeClass('active');
																		});

																	});

																</script>
													
										
										</li>
									
										<li class="dropdown note">
											<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope-o"></i> <span class="badge">3</span></a>

												
													<ul class="dropdown-menu two first">
														<li>
															<div class="notification_header">
																<h3>You have 3 new messages  </h3> 
															</div>
														</li>
														<li><a href="#">
														   <div class="user_img"><img src="images/1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet</p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														 </a></li>
														 <li class="odd"><a href="#">
															<div class="user_img"><img src="images/in1.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														  <div class="clearfix"></div>	
														 </a></li>
														<li><a href="#">
														   <div class="user_img"><img src="images/in.jpg" alt=""></div>
														   <div class="notification_desc">
															<p>Lorem ipsum dolor sit amet </p>
															<p><span>1 hour ago</span></p>
															</div>
														   <div class="clearfix"></div>	
														</a></li>
														<li>
															<div class="notification_bottom">
																<a href="#">See all messages</a>
															</div> 
														</li>
													</ul>
										</li>
										
							<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell-o"></i> <span class="badge">5</span></a>

									<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 5 new notification</h3>
											</div>
										</li>
										<li><a href="#">
											<div class="user_img"><img src="images/in.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet</p>
											<p><span>1 hour ago</span></p>
											</div>
										  <div class="clearfix"></div>	
										 </a></li>
										 <li class="odd"><a href="#">
											<div class="user_img"><img src="images/in5.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li><a href="#">
											<div class="user_img"><img src="images/in8.jpg" alt=""></div>
										   <div class="notification_desc">
											<p>Lorem ipsum dolor sit amet </p>
											<p><span>1 hour ago</span></p>
											</div>
										   <div class="clearfix"></div>	
										 </a></li>
										 <li>
											<div class="notification_bottom">
												<a href="#">See all notification</a>
											</div> 
										</li>
									</ul>
							</li>	
						<li class="dropdown note">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i> <span class="badge blue1">9</span></a>
										<ul class="dropdown-menu two">
										<li>
											<div class="notification_header">
												<h3>You have 9 pending task</h3>
											</div>
										</li>
										<li><a href="#">
												<div class="task-info">
												<span class="task-desc">Database update</span><span class="percentage">40%</span>
												<div class="clearfix"></div>	
											   </div>
												<div class="progress progress-striped active">
												 <div class="bar yellow" style="width:40%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Dashboard done</span><span class="percentage">90%</span>
											   <div class="clearfix"></div>	
											</div>
										   
											<div class="progress progress-striped active">
												 <div class="bar green" style="width:90%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Mobile App</span><span class="percentage">33%</span>
												<div class="clearfix"></div>	
											</div>
										   <div class="progress progress-striped active">
												 <div class="bar red" style="width: 33%;"></div>
											</div>
										</a></li>
										<li><a href="#">
											<div class="task-info">
												<span class="task-desc">Issues fixed</span><span class="percentage">80%</span>
											   <div class="clearfix"></div>	
											</div>
											<div class="progress progress-striped active">
												 <div class="bar  blue" style="width: 80%;"></div>
											</div>
										</a></li>
										<li>
											<div class="notification_bottom">
												<a href="#">See all pending task</a>
											</div> 
										</li>
									</ul>
							</li>		   							   		
							<div class="clearfix"></div>	
								</ul>
							</div>
							<div class="clearfix"></div>	
							<!--//profile_details-->
						</div>
						<!--//menu-right-->
					<div class="clearfix"></div>
				</div>
					<!-- //header-ends -->
						<!--outter-wp-->
							<div class="outter-wp">
									<!--sub-heard-part-->
									  <div class="sub-heard-part">
									   <ol class="breadcrumb m-b-0">
											<li><a href="index.php">Home</a></li>
											<li class="active">Grid System</li>
										</ol>
									   </div>
								  <!--//sub-heard-part-->
									<div class="graph-visual">
											<h2 class="inner-tittle">Grid System</h2>
												<div class="graph">
													<div class="form-group">
														<div class="row">
															<div class="col-md-12">
																<input type="text" class="form-control1" placeholder=".col-md-12">
															</div>
															<div class="clearfix"> </div>
														</div>
													</div>
													<div class="form-group">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-10">
															<input type="text" class="form-control1" placeholder=".col-md-10">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-9">
															<input type="text" class="form-control1" placeholder=".col-md-9">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-8">
															<input type="text" class="form-control1" placeholder=".col-md-8">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-5 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-5">
														</div>
														<div class="col-md-7">
															<input type="text" class="form-control1" placeholder=".col-md-7">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>
												<div class="form-group">
													<div class="row">
														<div class="col-md-6 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-6">
														</div>
														<div class="col-md-6">
															<input type="text" class="form-control1" placeholder=".col-md-6">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-4 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control1" placeholder=".col-md-4">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-8 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-8">
														</div>
														<div class="col-md-2">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group">
													<div class="row">
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="col-md-3">
															<input type="text" class="form-control1" placeholder=".col-md-3">
														</div>
														<div class="clearfix"> </div>
													</div>
												</div>	
												<div class="form-group mb-n">
													<div class="row">
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2 grid_box1">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
														<div class="col-md-2">
															<input type="text" class="form-control1" placeholder=".col-md-2">
														</div>
													<div class="clearfix"> </div>
												</div>
											</div>	
										</div>
										</div>
										<!--//graph-visual-->
									</div>
									<!--//outer-wp-->
									 <!--footer section start-->
										<footer>
										   <p>&copy 2016 Augment . All Rights Reserved | Design by <a href="https://w3layouts.com/" target="_blank">W3layouts.</a></p>
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
				<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Augment</h1></span> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
			<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
			<!--/down-->
							<div class="down">	
									  <a href="index.php"><img src="images/admin.jpg"></a>
									  <a href="index.php"><span class=" name-caret">Jasmin Leo</span></a>
									 <p>System Administrator in Company</p>
									<ul>
									<li><a class="tooltips" href="index.php"><span>Profile</span><i class="lnr lnr-user"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Settings</span><i class="lnr lnr-cog"></i></a></li>
										<li><a class="tooltips" href="index.php"><span>Log out</span><i class="lnr lnr-power-switch"></i></a></li>
										</ul>
									</div>
							   <!--//down-->
						<div class="menu">
									<ul id="menu" >
										<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
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
												<li id="menu-academico-boletim" ><a href="buttons.php">Buttons</a></li>
											  </ul>
										 </li>
									<li><a href="typography.php"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
									<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
										  <ul id="menu-academico-sub" >
										    <li id="menu-academico-avaliacoes" ><a href="login.php">Login</a></li>
										    <li id="menu-academico-boletim" ><a href="register.php">Register</a></li>
											<li id="menu-academico-boletim" ><a href="404.php">404</a></li>
											<li id="menu-academico-boletim" ><a href="sign.php">Sign up</a></li>
											<li id="menu-academico-boletim" ><a href="profile.php">Profile</a></li>
										  </ul>
									 </li>
									 <li><a href="#"><i class="lnr lnr-envelope"></i> <span>Mail Box</span><span class="fa fa-angle-right" style="float: right"></span></a>
									   <ul>
										<li><a href="inbox.php"><i class="fa fa-inbox"></i> Inbox</a></li>
										<li><a href="compose.php"><i class="fa fa-pencil-square-o"></i> Compose Mail</a></li>
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