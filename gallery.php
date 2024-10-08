
<?php include("header.php");?>

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
				<li class="breadcrumb-item active" aria-current="page">Gallery</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- single -->
	
<div class="single-w3l py-5">
		<div class="container  ">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Our Gallery</h3>
			</div>
			<ul class="nav nav-pills nav-fill " id="myTab" role="tablist">
				<li class="nav-item" >
					<a class="nav-link text-decoration-none  border-secondary rounded shadow-sm" data-toggle="tab" href="#tabmenu1" "role="tab" aria-selected="true"><i class="fa fa-medkit mr-2" style="font-size:24px">-Illness to wellness!</i></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link text-decoration-none  border-secondary rounded shadow-sm " data-toggle="tab" href="#tabmenu2" role="tab" aria-selected="false" ><i class="fa fa-tint mr-2" style="font-size:24px">-Blood donation!</i></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link text-decoration-none  border-secondary rounded shadow-sm" data-toggle="tab" href="#tabmenu3" role="tab" aria-selected="false"><i class="fa fa-yoga mr-2" style="font-size:24px">International yoga day!</i></a>
				</li>
				
				<li class="nav-item">
					<a class="nav-link text-decoration-none  border-secondary rounded shadow-sm" data-toggle="tab" href="#tabmenu4" role="tab" aria-selected="false"><i class="fa fa-clinic-medical mr-2" style="font-size:24px">free medical camp!</i></a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
			
			
			
				<div class="tab-pane fade show active" id="tabmenu1" role="tabpanel">
					<div class="row inner_sec_info">	
<?php
 
$conn=mysqli_connect("localhost","root","","data");
$query= "SELECT * from image where data='camp'";
$qu= mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{
?>

<div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter yoga">
  <img src="<?php echo 'services/'.$c[2]  ?>" class="img-fluid" style="height:400px;width:400px; padding:10px">
</div>
			
<?php
}
?>

					</div>
				</div>

				<div class="tab-pane fade" id="tabmenu2" role="tabpanel">
					<div class="row inner_sec_info">
						<!-- right side -->
						
							
			
<?php
 
$conn=mysqli_connect("localhost","root","","data");
$query= "SELECT * from image where data='blood'";
$qu= mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{
?>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter blood">
  <img src="<?php echo 'services/'.$c[2]  ?>" class="img-fluid" style="height:400px;width:400px; padding:10px">
</div>
			
<?php
}
?>
					</div>
				</div>
				
				<div class="tab-pane fade" id="tabmenu3" role="tabpanel">
					<div class="row inner_sec_info">
						<!-- right side -->
						
								
			
<?php
 
$conn=mysqli_connect("localhost","root","","data");
$query= "SELECT * from image where data='yoga'";
$qu= mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{
?>


           <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter camp">
  <img src="<?php echo 'services/'.$c[2]  ?>" class="img-fluid" style="height:400px;width:400px; padding:10px">
</div>
			
<?php
}
?>
					</div>
				</div>
				
				
				
				
				<div class="tab-pane fade" id="tabmenu4" role="tabpanel">
					<div class="row inner_sec_info">
						<!-- left side -->
				<?php
 
$conn=mysqli_connect("localhost","root","","data");
$query= "SELECT * from image where data='freemedical'";
$qu= mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{
?>


            <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter freemedical">
  <img src="<?php echo 'services/'.$c[2]  ?>" class="img-fluid" style="height:400px;width:400px; padding:10px">
</div>
			
<?php
}
?>
						<!-- //left side -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	<!-- //single -->

	<!-- footer -->
	<?php include("footer.php");?>
	