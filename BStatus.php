

<?php
if(isset ($_GET['Sno']))
{
	$sno=$_GET['Sno'];
	$conn=mysqli_connect("localhost","root","","data");
	$qu="UPDATE booking SET status='1' where Sno='$sno'";
	$x=mysqli_query($conn, $qu);
	if($x){
	 echo "<div class='alert alert-success'>Your approved this appointment.</div>";
	 header("location:Dview.php");
  }
 else {
  echo "<div class='alert alert-danger'>No approved appointments.</div>";
}
}
	
?>

	