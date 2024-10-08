<?php
if(isset($_GET['Sno']))
{
$sno=$_GET['Sno'];
$conn=mysqli_connect("localhost","root","","data");
$query="delete from booking WHERE sno='$sno'";
$qu=mysqli_query($conn,$query);
if($qu)
{
	header("location:Dview.php");
	echo"deleted";
}
else{
	echo"not deleted".mysqli_error($conn);
}
}
?>