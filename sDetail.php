
	<?php include("header.php");?>

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
				<li class="breadcrumb-item active" aria-current="page">Doctor Details</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- single -->
	<div class="single-w3l py-5">
		<div class="container py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Doctor Details</h3>
				
			</div>
			
			
<?php
if(isset($_GET['sno']))
{
$sno=$_GET['sno'];
$conn=mysqli_connect("localhost","root","","data");
$query="SELECT * FROM doctors where sno='$sno'";
$qu=mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu))
{ ?>

			<div class="tab-content" id="myTabContent">
				
					<div class="row inner_sec_info">
						<!-- left side -->
							<div class="col-md-6 col-md-12 text-center">
								<img src="<?php echo 'services/'.$c[3]?>" alt=" " class="img-fluid" />
								
								<h6 class="blog-first text-dark text-center my-4">
								<i class="far fa-user mr-2"><?php echo $c[2]?></i>
								</h6>		
	<div class="categories my-4 p-4 border">
  <div class="text-center">
    <h4 class="blog-title text-dark">Details</h4>
    <?php echo $c[5]?>
  </div>
  </div>

								<ul class="blog_list my-3 text-center">
								<li><?php echo "<a href =appointment.php?sno=$c[0]>";?><h3>Book Now</h3> <?php "</a>"?>
								</li>
								</ul>

							</div>
							
							
						<!-- //left side -->
						<!-- right side -->
					</div>
				</div>
				
			</div>

			<?php
			}
			}
			?>
			
			
		</div>
		
		
	
	<!-- //single -->

	<!-- footer -->
	<?php include("footer.php")?>

	