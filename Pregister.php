<?php 
if(isset ($_POST['sub']))
{
	$conn=mysqli_connect("localhost","root","","data");
	$user=$_POST['user'];
	$email=$_POST['email'];
	$pass=$_POST['password'];
	$confpass=$_POST['confirm'];
	$cont=$_POST['cont'];
$s="INSERT INTO registration (User, Email, Password,confpass, Contact) VALUES ('$user', '$email', '$pass','$confpass' ,'$cont')";
$m=mysqli_query($conn, $s);
if($m)
{
	echo"registered successfully";
	header("location:home.php");
}
else{
	echo"not  registered".mysqli_error($conn);
}
}
?>







