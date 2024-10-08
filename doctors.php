<?php include("header.php")?>

<body>
	<!-- header -->
	
	<!-- //top-bar -->

	<!-- header 2 -->

		<!-- //navigation -->
		<!-- modal -->
		<!-- login -->



		<!-- //login -->
		<!-- register -->
			
		
		<!-- //register -->
		<!-- //modal -->
	</div>
	<!-- //header 2 -->

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
					<a href="home.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Our Doctors</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- about -->
	
	<!-- //about -->

	<!-- middle section -->
	
	<!-- //middle section -->

	<!-- team -->
	<section class="team py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Our Doctors</h3>
				
			</div>

			<div class="row inner-sec-w3layouts-agileinfo">
			<?php
		
$conn=mysqli_connect("localhost","root","","data");
$query="SELECT * FROM doctors";
$qu=mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{ ?>
				<div class="col-md-4 team-grids text-center">
				<?php echo "<a href =sDetail.php?sno=$c[0]>";?>
				
					<img src="<?php echo'services/'.$c[3]?>" class="img-fluid" style="height:400px;width:400px; padding:20px" alt="">
					<?php echo"</a>"?>
					
					<div class="team-info">
						<div class="caption">
							<h4><?php echo $c[2] ?></h4>
							<h6><?php echo $c[1] ?></h6>
						</div>
						
					</div>
				</div>
<?php }?>
				
				
			</div>
		</div>
	</section>
	<!-- team -->

	<!-- banner bottom -->
	
	<!-- //banner bottom -->

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
							<p>Health care.</p>
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
							<p>Dental Treatment.</p>
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
							<p>Medical Treatment.</p>
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
							<p>cardio doctor</p>
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
							<p>orthopedics doctor.</p>
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
							<p>Laboratory facility.</p>
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

	<?php include("footer.php");?>

</body>

</html>