<!--
patient details are shown to doctor in table format
-->
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
							<div class="col-6 header-top_w3layouts pl-3 text-lg-left text-center">
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
						<a class="navbar-brand font-weight-bold font-italic" href="doctorHome.php">
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
						   <li class="nav-item ">
  	   <a class="login-button mx-lg-4 my-lg-0 my-3" href="logout.php"><i class="fas fa-sign-in-alt mr-2"></i>Log out</a>
	   </li>
							
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<!-- //navigation -->
		<!-- modal -->
		<!-- login -->

		<!-- //register -->
		<!-- //modal -->
	</div>
 
 
	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="doctorHome.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">View Bookings</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
				
				<!--option-------------------------------------------------------------------->

				
				
				
				
				
				
				<!--option-------------------------------------------------------------------->

<div class="btn-group mb-5">
  <a href="Dview.php?choice=all" class="btn btn-primary mr-4 mb-2 ">All</a>
  <a href="Dview.php?choice=pending" class="btn btn-warning mr-4 mb-2">Pending</a>
  <a href="Dview.php?choice=approved" class="btn btn-success mb-2">Approved</a>
</div>			
				
				
				
<?php
if(!isset($_GET['choice'])){
    $_GET['choice'] = 'all';
}

if(isset($_GET['choice'])){
    $choice = $_GET['choice']; 

if ($choice == 'all') {
    $query = "SELECT * from booking where DEmail='$demail' AND (status='0' OR status='1')";
} elseif ($choice == 'pending') {
    $query = "SELECT * from booking where DEmail='$demail' AND status='0'";
		?><div class="w3ls-titles ">
				<h4 class="title title-lg mb-2"><i style="font-col-lg">Pending Appointments:</i></h4>
		</div><?php
} elseif ($choice == 'approved') {
    $query = "SELECT * from booking where DEmail='$demail' AND status='1'";
	?><div class="w3ls-titles ">
				<h4 class="title title-lg mb-2"><i style="font-col-lg">Approved Appointments:</i></h4>
		</div><?php
} else {
    echo "No appointments";
    exit;
}

$conn = mysqli_connect("localhost", "root", "", "data");
$qu = mysqli_prepare($conn, $query);
mysqli_stmt_execute($qu);
$n = mysqli_stmt_get_result($qu);

if (mysqli_num_rows($n) > 0) {
   ?>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th scope="col">Sno</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Date</th>
                <th scope="col">Time</th>
                <th scope="col">City</th>
                 <?php if ($choice != 'approved') { ?>
                <th scope="col">Decision</th>
                <?php } ?>
            </tr>
        </thead>
        <tbody>
            <?php
            $sno = 1;
            while ($c = mysqli_fetch_array($n)) {
               ?>
                <tr>
                    <td><?= $sno?></td>
                    <td><?= $c[1]?></td>
                    <td><?= $c[2]?></td>
                    <td><?= $c[5]?></td>
                    <td><?= $c[6]?></td>
                    <td><?= $c[7]?></td>
                    <?php if ($choice != 'approved') { ?>
					<td>
                        <?php if ($c['status'] == '0') {?>
                            <a href="BStatus.php?Sno=<?= $c[0]?>"><i class="fas fa-check-circle" title="Approve"></i></a>
                            <a href="deleteView.php?Sno=<?= $c[0]?>"><i class="fas fa-trash-alt" title="Delete"></i></a>
                        <?php } else {?>
                            <p>Approved</p>
                        <?php }?>
                    </td>
                    <?php } ?>
                </tr>
                <?php
                $sno++;
            }
           ?>
        </tbody>
    </table>
    <?php
} else {
	?>
	<table class="table table">
	<tr>
     <td><p>No appointments</p></td>
	</tr>
	</table>
	<?php
}
}
?>			
					<!-- Map -->
	
	<!-- //Map -->	
				</div>
			</div>
		</div>
	</div>
	<?php include("footer.php");?>
	
</body>

</html>

<?php
}
?>