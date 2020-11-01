<?php
session_start();

$conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");
if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

$memnum = $_POST['memnum'];

$sql = "SELECT username AS name FROM f33ee.members WHERE mobile_number = '$memnum'";
$result = mysqli_query($conn, $sql);

if (!$result = mysqli_query($conn, $sql)) {
    echo "Failed to get name: " . mysqli_error($conn);
}
$name = mysqli_fetch_assoc($result);
$name = $name["name"];

if (!$result= mysqli_query($conn, $sql)){
  echo "Cannot connect to DB". mysqli_error($conn);
  return;
}
elseif($name == 'nonemember'){
  $total = $_POST['total'];
	for ($i=0;$i<count($_SESSION['cart']);$i++){
		$id = $_SESSION['cart'][$i];
		$quantity = $_SESSION['amount'][$i];
		$subtotal = $_SESSION['money'][$i];
		$size = $_SESSION['size'][$i];
		updateOrderTable($quantity, $id, $subtotal, $size);
	}
}
elseif (!$ismem = mysqli_num_rows($result)){
  echo "Wrong Mobile Number";
  return;
}
else{
  $total = $_POST['total']*0.9;
	for ($i=0;$i<count($_SESSION['cart']);$i++){
		$id = $_SESSION['cart'][$i];
		$quantity = $_SESSION['amount'][$i];
		$subtotal = $_SESSION['money'][$i] * 0.9;
		$size = $_SESSION['size'][$i];
		updateOrderTable($quantity, $id, $subtotal, $size);
	}
}

$cardnum = $_POST['cardnum'];
$cardname = $_POST['cardname'];
$conemail = $_POST['conemail'];
$address = $_POST['address'];
?>

<html>
<head>
  <title>Forever NTU - Order Results</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="../csstyle/hdft.css">
</head>

<body>
<header>
    <div style="margin-bottom: 5px;">
      <a href="../shoppingcart.php" class='cart'>
        <img src="../media/shopping_cart.png" height="80px" width="75px"> </a>
      <a href="../index.php" class='header_photo'>
        <img src="../media/foreverNTU.png" width="500" height="80" /></a>
    </div>
    <nav>
        <a href="../shop.php">Shop</a>
        <a href="../bestseller.php">Best Seller</a>
        <a href="../membership.php">Membership</a>
        <a href="../aboutus.php">About Us</a>
    </nav>
</header>

<div class="wrapper">
  <h2 style = "text-align: center;">Payment Report</h2>

  <?php
  date_default_timezone_set("Asia/Singapore");
  echo date_default_timezone_get();
  echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";
  if ($ismem){
    echo "Thanks to be our memeber! You can get 10% discount!<br>";
  }
  echo "Your Payment Card Number is: ".$cardnum."<br>";
  echo "Your Name on Card is: ".$cardname."<br>";
	echo "Your Address is: ".$address."<br>";
  echo "Your Confirmation Email is: ".$conemail."<br>";
  echo "Your Total Payment is: ".$total."<br>";

  $indexLink = "<a href='../index.php'>Click here</a>";
  echo "<br>Redirecting you to Home page in 5 seconds. $indexLink to return to Home page now.<br>";
	SendPayTable($total, $address, $cardname, $conemail);
  ?>

	<?php
	$message = '';

	for ($i=0;$i<count($_SESSION['cart']);$i++){
		$id = $_SESSION['cart'][$i];
		$quantity = $_SESSION['amount'][$i];
		$subtotal = $_SESSION['money'][$i] * 0.9;
		$size = $_SESSION['size'][$i];
		$message = $message.'Product ID is: '.$id.' Quantity is:'.$quantity.' Size is: '.$size.' Email is: '.$conemail."\r\n";
	}


	$to      = 'f33ee@localhost';
	$subject = 'the subject';
	$message = $message.'hello from php mail';
	$headers = 'From: f33ee@localhost' . "\r\n" .
	    'Reply-To: f33ee@localhost' . "\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers,'-ff33ee@localhost');
	echo ("mail sent to : ".$to);

	?>
</div>

<footer>
  <div class="footer_nav">
    <div><a href="../membership.php">Membership</a></div>
    <div><a href="../aboutus.php">About Us</a></div>
  </div>
  <div class="footer_info">
    <small><i>Copyright &copy; 2020 by Forever NTU Private Limited Company</i>
    <br>All Rights Reserved.</small>
  </div>
</footer>
<?php
function updateOrderTable($quantity, $id, $subtotal, $size){
  $conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

  $sql = "INSERT INTO f33ee.orders (order_id, product_id, quantity, total_sales, size) VALUES (NULL, $id, $quantity, $subtotal, '$size');";

  if (!mysqli_query($conn, $sql)) {
    echo "Failed to place order: " . mysqli_error($conn);
    mysqli_close($conn);
  }
}

function SendPayTable($total, $address, $cardname, $conemail){
	$conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
		return;
	}

	$sql = "INSERT INTO f33ee.payments (payment_id, pay_amount, pay_name, pay_email, address) VALUES (NULL, $total, '$cardname', '$conemail', '$address');";
	if (!mysqli_query($conn, $sql)) {
    echo "Failed to get payment: " . mysqli_error($conn);
    mysqli_close($conn);
  }
}

unset($_SESSION['cart']);
unset($_SESSION['name']);
unset($_SESSION['amount']);
unset($_SESSION['money']);
unset($_SESSION['size']);
?>
</body>
</html>

<?php
header("refresh:5;url=../index.php");
return;
?>
