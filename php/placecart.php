<?php
session_start();

$conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

if(isset($_GET['product_id'])){
    $id = $_GET['product_id'];
    $sql = "SELECT product_name AS name FROM f33ee.products WHERE product_id=$id";
    if (!$result = mysqli_query($conn, $sql)) {
		    echo "Failed to get product name: " . mysqli_error($conn);
	  }
    $name = mysqli_fetch_assoc($result);
    $name = $name["name"];

    $sql = "SELECT product_price AS price FROM f33ee.products WHERE product_id=$id";
    if (!$result = mysqli_query($conn, $sql)) {
		    echo "Failed to get product price: " . mysqli_error($conn);
	  }
    $price = mysqli_fetch_assoc($result);
    $price = $price["price"];
}

$size = $_POST['size'];
$quantity = $_POST['dnumber'];

if ($quantity==0) {
  echo "Select some products and then click place order. <br>";
  return;
}

/*if (!isset($_SESSION['order'])){
	$order_id = count($_SESSION['order']) + count($_SESSION['cart']) + 1;
	$_SESSION['order'][] = $order_id;
}
else{
	$order_id = count($_SESSION['cart']) + 1;
	$_SESSION['order'][] = $order_id;
}*/

$subtotal = 0.0;
$subtotal = $quantity * $price;


if (isset($_GET['product_id'])) {
  $_SESSION['cart'][] = $_GET['product_id'];
	$_SESSION['name'][] = $name;
  $_SESSION['amount'][] = $quantity;
  $_SESSION['money'][] = $subtotal;
  $_SESSION['size'][] = $size;
}
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
  <h2 style = "text-align: center;">Placed to Cart!</h2>

<?php
date_default_timezone_set("Asia/Singapore");
echo date_default_timezone_get();
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

echo "Cart placed for: <br>";
echo "$quantity of $name for $$subtotal <br>";
echo "<br>Your Product is Placed to Shopping Cart Successfully! <br>";

$indexLink = "<a href='../shop.php'>Click here</a>";
echo "<br>Redirecting you to Shop page in 5 seconds. $indexLink to return to Shop page now.<br>";
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

</body>
</html>

<?php
header("refresh:5;url=../shop.php");
return;
?>
