

 <?php include("header.php");?>

<?php

if(isset($_SESSION['email']))
{
	$email=$_SESSION['email'];
?>
 
 
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
				<li class="breadcrumb-item active" aria-current="page">Details</li>
			</ol>
		</div>
	</div>
	<!-- //page details -->

	<!-- contact -->
	<div class="agileits-contact py-5">
    <div class="py-xl-5 py-lg-3">
        
        <div class="d-flex">
            <!-------------------want image---------->
            <div class="col-lg-7 contact-right-w3l">
            <div class="text-center">
                <div class="btn-group">
                    <a href="Pview.php?choice=detail" class="btn btn-primary mr-4 mb-2"><i class="fas fa-info-circle"></i> DETAILS</a>
                    <a href="cart.php?choice=message" class="btn btn-warning mr-4 mb-2"><i class="fas fa-envelope"></i> MESSAGE</a>
                </div>
                </div>

                <?php
				if(!isset($_GET['choice'])){
                $_GET['choice'] = 'detail';
}
				if(isset($_GET['choice'])){
                $choice = $_GET['choice'];
                $email = $_SESSION['email']; // assuming you have stored the email in session

                if ($choice == 'detail') {
                    $query = "SELECT * FROM booking WHERE email='$email'";
					?><div class="w3ls-titles mb-5">
				<h4 class="title">DETAILS</h4>
		</div><?php
                } elseif ($choice == 'message') {
                    ?><div class="w3ls-titles mb-5">
				<h4 class="title">MESSAGE</h4>
		</div><?php
                } else {
                    echo "wait for approval";
                    exit;
                }

                $conn = mysqli_connect("localhost", "root", "", "data");
                $qu = mysqli_prepare($conn, $query);
                mysqli_stmt_execute($qu);
                $n = mysqli_stmt_get_result($qu);

                if (mysqli_num_rows($n) > 0) {
                    if ($choice == 'detail') {
                       ?>
                        <table class="table table-striped table-bordered text-center">
                            <thead>
                                <tr>
                                    <th scope="col">Sno</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Time</th>
                                    <th scope="col">City</th>
                                    <th scope="col">doctorname</th>
                                    <th scope="col">speciality</th>
                                    <th scope="col">price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sno = 1;
                                while ($c = mysqli_fetch_array($n)) {
                                   ?>
                                    <tr>
                                        <td><?= $sno?></td>
                                        <td><?= $c[1]?></td>
                                        <td><?= $c[2]?></td>
                                        <td><?= $c[6]?></td>
                                        <td><?= $c[7]?></td>
                                        <td><?= $c[8]?></td>
                                        <td><?= $c[4]?></td>
                                        <td><?= $c[9]?></td>
                                        <td><?= $c[5]?></td>
                                    </tr>
                                    <?php
                                    $sno++;
                                }
                               ?>
                            </tbody>
                        </table>
                    <?php
                    }  elseif ($choice == 'message') {
                            ?>
                            <a href="cart.php">Message</a>
                            <?php
                        }
                } else {
                   ?>
                    <table class="table table">
                        <tr>
                            <td><p>To check your details, firstly book appointment.</p></td>
                        </tr>
                    </table>
                    <?php
                }
               ?>
            </div>
        </div>
    </div>
</div>
	<?php include("footer.php");?>
	
</body>

</html>
<?php
}
}
else{
	echo"<script>
	alert('First signup/login please');
	window.location='home.php';</script>";
	
}
?>

