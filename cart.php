
<?php include("header.php");?>
<?php 
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	?>	
	
	<!-- //top-bar -->

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
				<li class="breadcrumb-item active" aria-current="page">Message</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- single -->
<?php include("Pmsg.php");?>
	<!-- //single -->

	<!-- footer -->
	<?php include("footer.php")?>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
<?php }
?>