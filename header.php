
<?php
session_start();
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
							<li class="nav-item mt-lg-0 mt-3">
								<a class="nav-link active mx-lg-4 my-lg-0 my-3" href="home.php">Home
									<span class="sr-only">(current)</span>
								</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="doctors.php">Doctors</a>
							</li>
                            <li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="gallery.php">Gallery</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3 ">
								<a class="nav-link" href="contact.php">Contact Us</a>
							</li>
							<li class="nav-item mx-lg-4 my-lg-0 my-3">
								<a class="nav-link" href="Pview.php">Approval</a>
							</li>
							<li class="nav-item dropdown">
							  <a class="login-button mx-lg-4 my-lg-0 my-3" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-sign-in-alt mr-2"></i>Login</a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
    <a class="dropdown-item login-button  mt-lg-0 mt-4 mb-lg-0 mb-3  " data-toggle="modal" data-target="#exampleModalCenter1" href="Dlogin.php"><i class="fas fa-sign-in-alt mr-2"></i>Login As Doctor</a>
	
    <a class="dropdown-item login-button mt-lg-0 mt-4 mb-lg-0 mb-3 " data-toggle="modal" data-target="#exampleModalCenter2" href="Plogin.php"><i class="fas fa-sign-in-alt mr-2"></i>Login As Patient</a>
  </div>
  </li>

  
  <?php
  if(isset($_SESSION['email']))
  {
  ?>
<li class="nav-item ">
  	   <a class="login-button mx-lg-4 my-lg-0 my-3"  href="logout.php"><i class="fas fa-sign-in-alt mr-2"></i>Log out</a>
	   </li>
  <?php
  }
  ?>
							
						</ul>
					</div>
				

</div>
					
					
					
				</div>
				
			
				
				
			</nav>
		</div>
	
</div>


<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Login As Doctor</h5>
							<form  method="post" action="Dlogin.php">
								<div class="form-group">
									<label>Your Email</label>
									<input type="email" class="form-control" name="em" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="pass" placeholder="" required="">
								</div>
								<button type="submit" name="sub1" class="btn submit mb-4">Login</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="Dforgot_pass.php" class="text-white">Forgot your password?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									Don't have an account?
									<a href="Dregister.php" data-toggle="modal" data-target="#exampleModalCenterD">Register now</a>
								</p>
							</form>
						
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="modal fade" id="exampleModalCenterD" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-2">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
                    <div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Register As Doctor</h5>
						<form method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="user" placeholder="enter your name please" required="">
								</div>
								<div class="form-group">
									<label>Category</label>
									<input type="text" class="form-control" name="cat" placeholder="your profession" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="em" placeholder="your email" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="pass" id="password1" placeholder="your password" required="">
								</div>
								<div class="form-group">
									<label>Price</label>
									<input type="number" class="form-control" name="num" id="price" placeholder="price" required="">
								</div>
								<div class="form-group">
									<label>Your image</label>
									<input type="file" class="form-control" name="pic" placeholder="upload your image" required="">
								</div>
								<div class="form-group">
									<label>Detail</label>
									<textarea  type="text" class="form-control" name="detail" id="detail" placeholder="enter details" required=""></textarea>
								</div>
								
								
								<button type="submit" name="sub" class="btn btn-primary submit mb-4">Register</button>
								
						</form>

								</div>
					</div>
					</div>
			</div>
		</div>
		
<!--Plogin-->
<div class="modal fade" id="exampleModalCenter2" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Login As Patient</h5>
							<form  method="post" action="Plogin.php">
								<div class="form-group">
									<label>Your Email</label>
									<input type="email" class="form-control" name="em1" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="pass1" placeholder="" required="">
								</div>
								<button type="submit" name="sub" class="btn submit mb-4">Login</button>
								<p class="forgot-w3ls text-center pb-4">
									<a href="forgot_pass.php" class="text-white">Forgot your password?</a>
								</p>
								<p class="account-w3ls text-center pb-4">
									Don't have an account?
									<a href="Pregister.php" data-toggle="modal" data-target="#exampleModalCenterP">Register now</a>
								</p>
							</form>
							
						</div>
					
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="exampleModalCenterP" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-dialog-centered" role="document">
				<div class="modal-content modal-content-2">
					<div class="modal-header text-center">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
<div class="modal-body">
						<div class="login px-4 mx-auto mw-100">
							<h5 class="text-center mb-4">Register As Patient</h5>
						<form method="post" enctype="multipart/form-data" action="Pregister.php">
								<div class="form-group">
									<label>Your Name</label>
									<input type="text" class="form-control" name="user" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" class="form-control" name="email" placeholder="" required="">
								</div>
								<div class="form-group">
									<label class="mb-2">Password</label>
									<input type="password" class="form-control" name="password" id="password1" placeholder="" required="">
								</div>
								<div class="form-group">
									<label>Confirm Password</label>
									 <input class="form-control" name="confirm" type="password" id="password2" placeholder="" required="">
                                     <input type="hidden" name="sno" value="<?php echo $sno[0]; ?>">
								</div>
								<div class="form-group">
									<label>Your image</label>
									<input type="file" class="form-control" name="pic" placeholder="upload your image" required="">
								</div>
								<div class="form-group">
									<label>Contact</label>
									<input type="number" class="form-control" name="cont" id="contact" placeholder="" required="">
								</div>
								
								
								<button type="submit" name="sub" class="btn btn-primary submit mb-4">Register</button>
								
						</form>
														</div>
					</div>
						</div>
			</div>
		</div>
		