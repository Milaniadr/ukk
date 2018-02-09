<div class="sidebar-menu">
	<header class="logo">
		<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.php"> <span id="logo"> <h1>Traveler</h1></span> 
		<!--<img id="logo" src="" alt="Logo"/>--> 
	</a> 
</header>
<div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
<!--/down-->
<!--//down-->
<div class="menu">
	<ul id="menu" >
		<li><a href="index.php"><i class="fa fa-tachometer"></i> <span>Dashboard</span></a></li>
		<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Input Data</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="forms.php"> Input Data Pesawat</a></li>
				<li id="menu-academico-boletim" ><a href="formsrute.php">Input Rute Pesawat</a></li>
				<li id="menu-academico-boletim" ><a href="formscus.php">Input Data Costumer</a></li>
				
			</ul>
		</li>
		<li id="menu-academico" ><a href="#"><i class="fa fa-table"></i> <span> Tampil Data</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="dafpesawat.php"> Tampil Data Pesawat</a></li>
				<li id="menu-academico-boletim" ><a href="dafrute.php">Tampil Rute Pesawat</a></li>
				<li id="menu-academico-boletim" ><a href="dafcustomer.php">Tampil Data Costumer</a></li>
			</ul>
		</li>

		<li id="menu-academico" ><a href="#"><i class="lnr lnr-book"></i> <span>Pages</span> <span class="fa fa-angle-right" style="float: right"></span></a>
			<ul id="menu-academico-sub" >
				<li id="menu-academico-avaliacoes" ><a href="login.php">Login</a></li>
				<li id="menu-academico-boletim" ><a href="register.php">Register</a></li>
				<li id="menu-academico-boletim" ><a href="404.php">404</a></li>
				<li id="menu-academico-boletim" ><a href="sign.php">Sign up</a></li>
				<li id="menu-academico-boletim" ><a href="profile.php">Profile</a></li>
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