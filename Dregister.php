<?php
error_reporting(0);
?>

<?php  
if(isset($_POST['sub']))
{
	$category=$_POST['cat'];
	$user=$_POST['user'];
	$price=$_POST['num'];
	$detail=$_POST['detail'];
	$email=$_POST['em'];
	$password=$_POST['pass'];
	$name=$_FILES['pic']['name'];
	$type=$_FILES['pic']['type'];
	$size=$_FILES['pic']['size'];
	$temp=$_FILES['pic']['tmp_name'];
	$path='services/'.$name;
	$m=move_uploaded_file($temp,$path);
	
	$conn=mysqli_connect("localhost","root","","data");
	$sql="INSERT INTO doctors (category, name, image, price, detail,email,password) VALUES ('$category', '$user', '$name', '$price','$detail','$email','$password')";
$k=mysqli_query($conn, $sql);
if($k)
{
	echo"<div class='alert alert-danger'>uploaded successfully</div>";
}
else{
	echo"not uploaded".mysqli_error($conn);
}
}

?>



