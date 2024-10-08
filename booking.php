

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
		$DEmail=$c['demail'];
		?>

<pre>
<form method="post">

doctorName<input name="doc" value="<?php echo $name; ?>">
charges<input type="number" name="fees" value="<?php echo $charges; ?>">
date<input type="date" name="date">
time<input type="time" name="time">
city<input type="text" name="city">
speciality<input type="text" name="sp" value="<?php echo $speciality; ?>">
<input type="submit" name="sub">
</form>
	
<?php


}}
?>
<?php

if(isset ($_POST['sub']))
{
	$date=$_POST['date'];
	$time=$_POST['time'];
	$city=$_POST['city'];
	$doctorName = $_POST['doc'];
    $charges = $_POST['fees'];
    $speciality = $_POST['sp'];

 $query="INSERT INTO booking( email,DEmail, doctorName, charges, date, time, city, speciality,status,message) VALUES ('$email','$DEmail','$doctorName','$charges','$date','$time','$city','$speciality','$status',$message)";
$qu=mysqli_query($conn, $query);
if($qu)
{
	echo"booking successfull";
}
else{
	echo"sorry!".mysqli_error($conn);
}
}




?>
