<?php session_start();
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];

?>


<?php 
if(isset ($_GET['sno']))
{
	$sno=$_GET['sno'];
	$conn=mysqli_connect("localhost","root","","data");
    $qu="SELECT * FROM registration where sno='$sno'";
	$x=mysqli_query($conn, $qu);
    while($c=mysqli_fetch_array($x))
	{
		$user=$c['user'];
		$email=$c['email'];
		$profile=$c['pic'];
	
		?>

<pre>
<form method="post">
name<input name="user" value="<?php echo $user;?>">
email<input name="email" value="<?php echo $email;?>">
profile<input name="pic" value="<?php echo $profile;?>">
</form>
	
<?php
}}
?>
<?php

if(isset ($_POST['sub']))
{
	$user=$_POST['user'];
	$email=$_POST['email'];
	$profile=$_POST['pic'];
	$query="UPDATE booking SET email='$email', user='$user', pic='$profile' where Sno='$sno'";
$qu=mysqli_query($conn, $query);
if($qu)
{
	echo"updated";<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
    exit;
}

// Get user data from session
$email = $_SESSION['email'];

// Function to update user profile
function updateProfile($sno, $user, $email, $profile) {
    $conn = mysqli_connect("localhost", "root", "", "data");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "UPDATE booking SET email = '$email', user = '$user', pic = '$pic' WHERE Sno = '$Sno'";
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "ssss", $email, $user, $profile, $sno);
    if (!mysqli_stmt_execute($stmt)) {
        die("Execute failed: " . mysqli_stmt_error($stmt));
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}

// Function to get user data from database
function getUserData($sno) {
    $conn = mysqli_connect("localhost", "root", "", "data");
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM registration WHERE sno = ?";
    $stmt = mysqli_prepare($conn, $query);
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "s", $sno);
    if (!mysqli_stmt_execute($stmt)) {
        die("Execute failed: " . mysqli_stmt_error($stmt));
    }

    $result = mysqli_stmt_get_result($stmt);
    $userData = mysqli_fetch_assoc($result);
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    return $userData;
}

// Check if sno is set
if (isset($_GET['sno'])) {
    $sno = $_GET['sno'];
    $userData = getUserData($sno);
    if (!$userData) {
        echo "User not found!";
        exit;
    }
}

// Update profile form
if (isset($_POST['sub'])) {
    $user = $_POST['user'];
    $email = $_POST['email'];
    $profile = $_POST['pic'];
    updateProfile($sno, $user, $email, $profile);
    echo "Profile updated!";
}

// Display user data
if (isset($userData)) {
    ?>
    <form method="post">
        <label for="user">Name:</label>
        <input type="text" id="user" name="user" value="<?php echo $userData['user']; ?>">
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $userData['email']; ?>">
        <br>
        <label for="pic">Profile Picture:</label>
        <input type="text" id="pic" name="pic" value="<?php echo $userData['pic']; ?>">
        <br>
        <input type="submit" name="sub" value="Update Profile">
    </form>
    <?php
}
?>
}
else{
	echo"sorry!".mysqli_error($conn);
}
}

?>
<?php
}
?>