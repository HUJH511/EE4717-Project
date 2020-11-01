<?php
$username = $_POST['username'];
$email = $_POST['Email'];
$content = $_POST['subject'];
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
  <h2 style = "text-align: center;">Your Feedback was received!</h2>
<?php
date_default_timezone_set("Asia/Singapore");
echo date_default_timezone_get();
echo "<p>Order processed at ".date('H:i, jS F Y')."</p>";

echo "Your User Name is: ".$username."<br>";
echo "Your Contact Email is: ".$email."<br>";
echo "Your Feedback is: ".$content."<br>";

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
