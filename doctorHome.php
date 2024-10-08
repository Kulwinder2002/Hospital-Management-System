<!--doctorHome.php-->
<?php 
session_start();
if(isset($_SESSION['demail']))
{
	$demail=$_SESSION['demail'];


?>


<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Medic Medical Category Bootstrap Responsive Web Template | Single Page :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Medic Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>


<!-- header -->
	<header>
		<!-- top-bar -->
		<div class="top-bar py-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 top-social-agile">
						<div class="row">
							<!-- social icons -->
							<!-- //social icons -->
							<div >
								<p class="text-white">
									<i class="fas fa-map-marker-alt mr-2"></i>Parma Via Modena,BO, Italy</p>
							</div>
						</div>
					</div>
					<div class="col-lg-5 top-social-agile text-lg-right text-center">
						<div class="row">
							<div class="col-lg-7 col-6 top-w3layouts">
								<p class="text-white">
									<i class="far fa-envelope-open mr-2"></i>
									<a href="mailto:info@example.com" class="text-white">info@example.com</a>
								</p>
							</div>
							<div class="col-lg-5 col-6 header-w3layouts pl-4 text-lg-left">
								<p class="text-white">
									<i class="fas fa-phone mr-2"></i>+1 000263676</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- //top-bar -->

	<!-- header 2 -->
<div id="home">
		<!-- navigation -->
		<div class="main-top py-1">
			<nav class="navbar navbar-expand-lg navbar-light fixed-navi">
				<div class="container">
					<!-- logo -->
					<h1>
						<a class="navbar-brand font-weight-bold font-italic" href="index.html">
							<span>M</span>edic
							<i class="fas fa-syringe"></i>
						</a>
					</h1>
					<!-- //logo -->
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
						<ul class="navbar-nav ml-lg-auto">
							<li class="nav-item active mt-lg-0 mt-3">
								<a class="nav-link" href="doctorHome.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="Dview.php">Appointment</a>
							</li>
						  <?php
  if(isset($_SESSION['demail']))
  {
  ?>
<li class="nav-item ">
  	   <a class="login-button mx-lg-4 my-lg-0 my-3" data-toggle="modal" data-target="#exampleModalCenter1" href="logout.php"><i class="fas fa-sign-in-alt mr-2"></i>Log out</a>
	   </li>
  <?php
  }
  ?>
							
						</ul>
					</div>
					
				</div>
			</nav>
		</div>
	</div>
	
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="banner-top1">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Medical services that you
									<span>can trust</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Medical excellence is a commitment to providing the highest quality, safest care that meets or exceeds all standards set by hospitals and external organizations. It goes beyond mere compliance or matching diseases with drugs.</p>
								
									
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top2">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>Medical excellence
									<span>every day</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Medical excellence is a commitment to providing the highest quality, safest care that meets or exceeds all standards set by hospitals and external organizations. It goes beyond mere compliance or matching diseases with drugs.</p>
								
									
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top3">
						<div class="banner-info_agile_w3ls">
							<div class="container">
								<h3>The Hospital of the
									<span>future, today</span>
								</h3>
								<p class="mt-3 mb-md-5 mb-3">Medical excellence is a commitment to providing the highest quality, safest care that meets or exceeds all standards set by hospitals and external organizations. It goes beyond mere compliance or matching diseases with drugs.</p>
								
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</div>
	<!-- //banner -->
	<div class="clearfix"></div>

	<!-- banner bottom -->
	
	<!-- //banner bottom -->

	<!-- middle section -->
	
	<!-- //middle section -->

	<!-- services -->
	<div class="why-choose-agile pt-5" id="services">
		<div class="container pt-xl-5 pt-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Our Best Services</h3>
			</div>
			<div class="row why-choose-agile-grids-top">
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-user-md"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">General health care</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fas fa-syringe"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Dental services</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-3 agile-why-text p-0 text-right">
							<div class="wthree_features_grid">
								<i class="fab fa-medrt"></i>
							</div>
						</div>
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Medical Treatment</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid img text-center">
					<img src="images/b3.png" alt=" " class="img-fluid" />
				</div>
				<div class="col-lg-4 agileits-w3layouts-grid">
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Cardiac Clinic</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-medkit"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us my-5">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Orthopedics</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-wheelchair"></i>
							</div>
						</div>
					</div>
					<div class="row wthree_agile_us">
						<div class="col-9 agile-why-text-2">
							<h4 class="text-dark font-weight-bold mb-3">Laboratory</h4>
							<p>Health is a valuable resource to lead a good life.</p>
						</div>
						<div class="col-3 agile-why-text p-0">
							<div class="wthree_features_grid">
								<i class="fas fa-hospital"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //services -->

	<!-- blog -->
	<div class="blog-w3ls py-5" id="blog">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title text-white">Our Blog</h3>
			</div>
			<div class="row package-grids mt-5">
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog1.jpg" alt="" class="img-fluid" />
						</a>
						<h3>13
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Let it be the pleasure and pain of the accusers</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing my-md-0 my-5">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog2.jpg" alt="" class="img-fluid" />
						</a>
						<h3>24
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Let it be the pleasure and pain of the accusers</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
				<div class="col-md-4 pricing">
					<div class="price-top">
						<a href="single.html">
							<img src="images/blog3.jpg" alt="" class="img-fluid" />
						</a>
						<h3>30
							<span>August</span>
						</h3>
					</div>
					<div class="price-bottom p-4">
						<h4 class="text-dark mb-3">Let it be the pleasure and pain of the accusers</h4>
						<a href="single.html">
							<i class="fas fa-user mr-2"></i>Posted by accusantium</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //blog -->

	<!-- treatments -->
	<div class="screen-w3ls py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Best Treatments</h3>
				
			</div>
			<div class="row">
				<div class="col-lg-6 w3ls-wthree-screen text-center">
					<img src="images/b5.png" alt="" class="img-fluid">
				</div>
				<div class="col-lg-6 w3ls-wthree-texts mt-5">
					<div class="row icons-screen">
						<div class="col-3 screen-agile text-right">
							<i class="fas fa-syringe"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Oxygen therapy</h5>
							<p>Work and great effort cause discomfort and pain, but the process involves temporary strain</p>
						</div>
					</div>
					<div class="row icons-screen mt-5">
						<div class="col-3 screen-agile text-right">
							<i class="fab fa-medrt"></i>
						</div>
						<div class="col-9 screen-agile-2">
							<h5 class="mb-3">Medical procedure</h5>
							<p>Work and great effort cause discomfort and pain, but the process involves temporary strain</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //treatments -->

	<!-- footer -->
	<!-- //footer -->


	<?php include("footer.php");?>
	
	<?php
}
else
{
	echo"not reachable";
}
?>