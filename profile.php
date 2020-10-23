<?php 
session_start();
$con = mysqli_connect("localhost","root","","db");
if (empty($_SESSION['userid'])){
?>
<script type="text/javascript">
	alert("Erreur de Connexion");
		window.location='login.html';
</script>
<?php } ?>
<!DOCTYPE HTML>

<html>
	<head>
		<title>Profile</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="assets/css/main.css" />
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<a class="logo" href="index.html">Panta-GEST</a>
				<nav>
					<a href="#menu">Menu</a>
				</nav>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.html">Home</a></li>
					<li><a href="logout.php">Log Out</a></li>
				</ul>
			</nav>

		<!-- Heading -->
			<div id="heading" >
				<h1>WELCOME TO Panta-GEST</h1>
			</div>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content"> 
					 <div class="panel panel-default">
                       <div class="panel-body">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                       <img alt="User Pic" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     
                 
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                          <div class="container" >
						<?php
		
			$req="select * from user where (id=".$_SESSION['userid']." ) ";
			$res=mysqli_query($con,$req);
			$req1=mysqli_fetch_array($res);
		
			echo "<h1><b>",$req1[1],"</b></h1><h3> ",$req1[6],"</h3>" ;
			   echo'<hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-earphone" style="width:50px;"></span>',$req1[4],'</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>',$req1[2];	?></p></li>
                          </ul>
                      </div>
                </div>
            </div>
            </div>
            	<section class="wrapper">
				<div class="inner">
			<div class="highlights">
					&nbsp;&nbsp;&nbsp;	<section>
							<div class="content">
								<header>
									<a href="liquide.html" class="icon fa fa-ship"><span class="label">Icon</span></a>
									<a href="liquide.html"><h3>Transportation Hydrocarbures</h3></a>
								</header>
								
							</div>
						</section>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<section>
							<div class="content">
								<header>
									<a href="solide.html" class="icon fa fa-truck"><span class="label">Icon</span></a>
									<a href="solide.html"><h3>Transportation des Conteneurs</h3></a>
								
								</header>
							</div>
						</section>
						<br><br>
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-qrcode"><span class="label">Icon</span></a>
									<a href="#"><h3>Analyse de Perfomance</h3></a>
								</header>
								
							</div>
						</section>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<section>
							<div class="content">
								<header>
									<a href="#" class="icon fa-line-chart"><span class="label">Icon</span></a>
									<a href="#"><h3>Statistique</h3></a>
								</header>
								
							</div>
						</section>
					</div>
				</div>
			</section>
		</div>
	</div>
</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="content">
						<section>
							<h3>	Contact</h3>
							<p></p>
						</section>
						<section>
							
							<ul class="alt">
								<li><a href="#"></a>Zarzouna, Bizerte</li>
								<li>(+216) 54 277 218</li>
								<li>contact@pantagest.tn</li>
								
							</ul>
						</section>
						<section>
							
							<ul class="plain">
								<li><a href="#"><i class="icon fa-twitter">&nbsp;</i>Twitter</a></li>
								<li><a href="https://www.facebook.com/Pantas.band"><i class="icon fa-facebook">&nbsp;</i>Facebook</a></li>
								<li><a href="https://www.instagram.com/pantas_official/"><i class="icon fa-instagram">&nbsp;</i>Instagram</a></li>
								
							</ul>
						</section>
					</div>
					<div class="copyright"> Ghassen Hasel Mourali
						&copy; 2020 
					</div>
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>