<?php include("header.php");?>
	<!-- //top-bar -->

	<!-- header 2 -->
	<!-- //header 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">
		</div>
		<!-- //banner 2 -->
	</div>

	<!-- banner 2 -->
	<!-- page details -->
	<div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="home.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">password change</li>
			</ol>
		</div>
	</div>
	
	<div class="w3ls-titles text-center mb-5">
				<h3> Password change for Doctors</h3>
			</div>
	

<div class="modal-dialog modal-dialog-centeredD" role="document">
				<div class="modal-content">
					
		  <div class="modal-body">
		   <div class="login px-5 mx-auto mw-70">
            <form  method="get">
				<div class="form-group">
                   <h5 class="text-center mb-4">Details</h5>
				   <label>Email</label>
                    <input type="email" class="form-control"  name="demail" placeholder="enter your email" required>
                </div>
                <button type="submit" name= "sub" class="btn btn-primary">Submit</button>
            </form>
			</div>
			</div>
		
        </div>
    </div>


<?php
if (isset($_GET['demail'])) {
    $demail = $_GET['demail'];
    $conn = mysqli_connect("localhost", "root", "", "data");
    $qu = "SELECT * FROM doctors WHERE demail='$demail'";
    $z = mysqli_query($conn, $qu);
    while ($c = mysqli_fetch_array($z)) {
        $sno = $c['sno'];
?>
<div class="modal-dialog modal-dialog-centeredD" role="document">
				<div class="modal-content">
					
		  <div class="modal-body">
		   <div class="login px-5">
		
            <form method="post" >
                <div class="form-group">
				<h5 class="text-center mb-4">Change Password</h5>
				   <label>New Password</label>
                    <input type="password" class="form-control" id="new_password" name="pass" placeholder="new password" required>
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" class="form-control" id="confirm_password" name="pass2" placeholder="confirm password" required>
                </div>
                <input type="hidden" name="sno" value="<?php echo $sno[0];?>">
                <button type="submit" name="sub" class="btn btn-primary">Update Password</button>
				
            </form>
			
       </div>
			</div>
		
        </div>
    </div>

<?php
if (isset($_POST['sub'])) {
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $sno = $_POST['sno'];
    $conn = mysqli_connect("localhost", "root", "", "data");
    $query = "UPDATE doctors SET password='$pass' WHERE sno='$sno'";
    $x = mysqli_query($conn, $query);
    if ($x) {
        echo "<div class='alert alert-success'>Password updated successfully.</div>";
    } else {
        echo "<div class='alert alert-danger'>Failed to update password.</div>";
    }
}
?>
<?php
    }
}
?>

<?php include("footer.php");?>