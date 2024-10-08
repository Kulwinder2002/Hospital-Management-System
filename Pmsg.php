<?php
if (isset($_SESSION['email'])) {
  $email = $_SESSION['email'];

  $conn = mysqli_connect("localhost", "root", "", "data");

  if (!$conn) {
    die("Connection failed: ". mysqli_connect_error());
  }

  $qu = "SELECT status FROM booking WHERE email = '$email'";
  $stmt = mysqli_prepare($conn, $qu);
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) > 0) {
    $c = mysqli_fetch_assoc($result);
    $status = $c["status"];

    if ($status == 1) {
  echo "<div class='alert alert-success text-center' role='alert'>
          <h4><i class='fas fa-check-circle'></i> Approved!</h4>
        </div>";
} elseif ($status == 0) {
  echo "<div class='alert alert-info text-center' role='alert'>
          <h4><i class='fas fa-clock'></i> Wait for approval.</h4>
        </div>";
} else {
  echo "<div class='alert alert-danger ' role='alert'>
          <h4><i class='fas fa-exclamation-triangle'></i> Sorry!your appointment is declined by doctor try another time.</h4>
        </div>";
}
  }

  mysqli_close($conn);
}
?>