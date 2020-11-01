<?php
  session_start();
  $conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    return;
  }
  // store to test if they *were* logged in
  $old_user = $_SESSION['valid_user'];
  /*for ($j=0; $j < count($_SESSION['order']) + 1; $j++){
    $oid = $_SESSION["order"][$j];
    $sql = "DELETE FROM f33ee.orders WHERE order_id= $oid;";
    if (!$result = mysqli_query($conn, $sql)) {
		    echo "Failed: " . mysqli_error($conn);
	  }
  }*/
  unset($_SESSION['valid_user']);
  unset($_SESSION['cart']);
  unset($_SESSION['name']);
  unset($_SESSION['amount']);
  unset($_SESSION['money']);
  unset($_SESSION['size']);
  session_destroy();
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Forever NTU - Login</title>
    <link rel="stylesheet" href="./csstyle/hdft.css">
</head>
<?php require("./php/header.php")?>

<div class="wrapper">
<br>
<h1 style="text-align: center;">Log out</h1>
<br><br>
<?php
  if (!empty($old_user))
  {
    echo 'Logged out.<br /><br><br>';
  }
  else
  {
    // if they weren't logged in but came to this page somehow
    echo 'You were not logged in, and so have not been logged out.<br /><br><br>';
  }
?>
<a style="text-decoration:underline;" href="membership.php">Back to login page</a>
<br><br>
<br><br>
<br><br>
<br><br>
</body>
</div>
<?php require("./php/footer.php")?>
