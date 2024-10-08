
<?php 
session_start();
if(isset($_POST['sub1']))
{
	$conn=mysqli_connect("localhost","root","","data");
	$email=$_POST['em'];
	$pass=$_POST['pass'];
$query="SELECT * from doctors where demail='$email' and password='$pass'";
$qu=mysqli_query($conn, $query);
$n=mysqli_num_rows($qu);
if($n>0)
{
	$_SESSION['demail']=$email;
	header("location:doctorHome.php");
	echo"Login successfully".$_SESSION['demail'];
	//echo"<script>window.location='doctorHome.php';</script>";
	
}
else
{
	echo"Wrong email and password!".mysqli_error($conn);
}
}
?>



