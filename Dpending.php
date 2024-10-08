

<?php 
session_start();
if(isset($_SESSION['demail']))
{
	$demail=$_SESSION['demail'];

?>
 
 
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
					<a href="index.html">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">Pending Appointments</li>
			</ol>
		</div>
	</div>

	<!-- //page details -->

	<!-- contact -->
	<script>
function abc(choice)
{
  if(choice == 'pending')
  {
    window.location="Dpending.php";
  }
  else if(choice == 'approved')
  {
    window.location="Dapproved.php";
  }
}
</script>

<div class="container">
  <div class="table">
          <div class="form-group">
		  <button class="btn btn-primary mx-auto" onclick="Dview.php">
              <i class=" text-white" style="font-size:24px"></i>
              All
            </button>
            <button class="btn btn-primary w-60 "  onclick="Dpending.php">
              <i class="fas fa-clock fa-2x text-white" ></i>
              Pending Appointments 
            </button>
            <button class="btn btn-primary mx-auto" onclick="Dapproved.php">
              <i class="fas fa-check fa-2x text-white"></i>
              Approved Appointments 
            </button>
      
    </div>
  </div>
</div>
	
	
	
	<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
					<table class="table table-striped table-bordered";
 <thead>
    <tr>
      <th scope="col">Sno</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">City</th>
      <th scope="col">Pending</th>
    </tr>
  </thead>
  <tbody>
<?php
$conn=mysqli_connect("localhost","root","","medical");
$query="SELECT * FROM booking where DEmail='$demail' AND status='0'";
$qu1=mysqli_query($conn,$query);
while($c=mysqli_fetch_array($qu1))
{
	echo "<tr>";
	echo "<td>".$c[0]."</td>";
	echo "<td>".$c[1]."</td>";
	echo "<td>".$c[2]."</td>";
	echo "<td>".$c[5]."</td>";
	echo "<td>".$c[6]."</td>";
	echo "<td>".$c[7]."</td>";
	echo "<td>".$c[10]."</td>";
	echo"</tr>";
	
	
}
?>
</tbody>
</table>
					
					<!-- Map -->
	
	<!-- //Map -->
					
					
	
					
					
				</div>
			</div>
		</div>
	</div>
	
	
		<div class="agileits-contact py-5">
		<div class="py-xl-5 py-lg-3">
			
			<div class="d-flex">
				<div class="col-lg-5 w3_agileits-contact-left">
				</div>
				<div class="col-lg-7 contact-right-w3l">
				
			

					
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

