		
<?php 
session_start();
if(isset($_POST['sub']))
{
	$conn=mysqli_connect("localhost","root","","data");
	$email=$_POST['em1'];
	$pass=$_POST['pass1'];
$query="SELECT * from registration where Email='$email' and Password='$pass'";
$qu=mysqli_query($conn, $query);
$n=mysqli_num_rows($qu);
if($n>0)
{
	$_SESSION['email']=$email;
	echo"<script>
	alert('Login successfully');
	window.location='doctors.php';</script>";
	
}
else{
	echo"<div class ='alert alert-danger'>Wrong email and password!</div>".mysqli_error($conn);
}
}
?>
							
							
						