<?php 
include("header.php");
if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
	?>



	<!-- //top-bar -->

	<!-- header 2 -->
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
				<li class="breadcrumb-item active" aria-current="page">Appointment</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="appointment py-5">
		<div class="py-xl-5 py-lg-3">
			<div class="w3ls-titles text-center mb-5">
				<h3 class="title">Appointment</h3>
				
			</div>
			<div class="d-flex">
				<div class="appoint-img">

				</div>
				<div class="contact-right-w3l appoint-form">
					<h5 class="title-w3 text-center mb-5">Fill your appointment form</h5>

					<?php 
if(isset ($_GET['sno']))
{
	$sno=$_GET['sno'];
	$conn=mysqli_connect("localhost","root","","data");
    $qu="SELECT * FROM doctors where sno='$sno'";
	$x=mysqli_query($conn, $qu);
    while($c=mysqli_fetch_array($x))
	{
		$name=$c['name'];
		$charges=$c['price'];
		$speciality=$c['detail'];
		$demail=$c['demail'];
		?>


<form method="post">
<div class="form-group">
							<label for="recipient-name" class="col-form-label">Your Name</label>
							<input type="text" class="form-control" placeholder="Your Name " name="user" id="recipient-name" required="">
						</div>
<div class="form-group">
							<label for="recipient-phone" class="col-form-label">Your Email</label>
							<input type="email" class="form-control" placeholder="Your Email" name="em" id="recipient-phone" required="">
						</div>

<div class="form-group">
							<label for="datepicker" class="col-form-label">Doctor you selected</label>
							<input type="text" class="form-control" name="doc" id="recipient-docName" value="<?php echo $name; ?>" required readonly>
						</div>
<div class="form-group">
							<label for="datepicker" class="col-form-label">charges</label>
							<input type="text" class="form-control" name="fees" id="recipient-fees" value="<?php echo $charges; ?>" required readonly>
						</div>
<div class="form-group">
							<label for="datepicker" class="col-form-label">Select appointment date</label>
							<input placeholder="Date" class="date form-control" name="date" id="datepicker" type="date" value="" onfocus="this.value = '';"
							    onblur="if (this.value == '') {this.value = '';}" required="" />
						</div>
<div class="form-group">
							<label for="datepicker" class="col-form-label">Select appointment time</label>
							<select name="time" required="" class="form-control">
								<option value="">Select Time</option>
								<option >08:00-8:30</option>
								<option >08:30-9:00</option>
								<option > 09:00-9:30</option>
								<option >09:30-10:00</option>
							</select>
						</div>

<div class="form-group">
							<label for="datepicker" class="col-form-label">Select City</label>
							<select name= "city" required="" class="form-control">
								<option value="">Select City</option>
								<option >patiala</option>
								<option >chandigarh</option>
								<option >ludhiana</option>
								<option >sangrur</option>
							</select>
						</div>
						<div class="form-group">
							<label for="doc-Speciality" class="col-form-label">Doctor Speciality</label>
							<input type="text" class="form-control" name="sp" id="doc-Speciality" required readonly value="<?php echo $speciality; ?>">						</div>
						

<input type="submit" name="sub" value="Book Appointment" class="btn_apt">
</form>
	
<?php


}}
?>
<?php

if(isset ($_POST['sub']))
{
	
	$name=$_POST['user'];
	$email=$_POST['em'];
	$date=$_POST['date'];
	$time=$_POST['time'];
	$city=$_POST['city'];
	$doctorName = $_POST['doc'];
    $charges = $_POST['fees'];
    $speciality = $_POST['sp'];

 $query="INSERT INTO booking( name, email,DEmail, doctorName, charges, date, time, city, speciality,status) VALUES ('$name','$email','$demail','$doctorName','$charges','$date','$time','$city','$speciality','0')";
$qu=mysqli_query($conn, $query);
if($qu)
{
	echo"<div style='background-color: #F7F7F7; padding: 20px; border: 1px solid #CCCCCC; border-radius: 5px;'>
    <h2 style='color: #34C759; font-weight: bold;'>Appointment Booked!</h2>
    <p>Your appointment has been successfully booked. You will receive a confirmation email shortly.</p>
</div>";
  header("location:Pview.php");
}
else{
	echo" <div style='background-color: #F7F7F7; padding: 20px; border: 1px solid #CCCCCC; border-radius: 5px;'>
    <h2 style='color: #34C759; font-weight: bold;'>Appointment Booked!</h2>
    <p>Your appointment has not been booked.</p>
</div>".mysqli_error($conn);
}
}




?>
				</div>
				<div class="clerafix"></div>
			</div>
		</div>
	</div>
	<!-- //contact -->

	<!-- footer -->
	<?php include("footer.php");?>
	
<?php
}
?>
