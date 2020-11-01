<?php
session_start();
?>
<!DOCTYPE html>
<html lang= "en">

<head>
  <title>Forever NTU - Product</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="./csstyle/hdft.css">
  <link rel="stylesheet" href="./csstyle/product.css">
  <script type="text/javascript" src="jss/calculation.js"></script>
</head>
<?php require("./php/header.php")?>

<?php
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

    $sql = "SELECT product_description AS desp FROM f33ee.products WHERE product_id=$id";
    if (!$result = mysqli_query($conn, $sql)) {
		    echo "Failed to get product description: " . mysqli_error($conn);
	  }
    $desp = mysqli_fetch_assoc($result);
    $desp = $desp["desp"];
  }
?>
<div class="wrapper">
  <div class="mainproduct">
  <div class="col img">
      <img class="demo cursor" src="./media/product/<?php echo $id; ?>.jpg" style="width:100%" height="180" onclick="currentSlide(1)" alt="">
      <img class="demo cursor" src="./media/product/<?php echo $id; ?>_1.jpg" style="width:100%" height="180" onclick="currentSlide(2)" alt="">
      <img class="demo cursor" src="./media/product/<?php echo $id; ?>_2.jpg" style="width:100%" height="180" onclick="currentSlide(3)" alt="">
      <img class="demo cursor" src="./media/product/<?php echo $id; ?>_3.jpg" style="width:100%" height="180" onclick="currentSlide(4)" alt="">
  </div>
  <div class="col show">
    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="./media/product/<?php echo $id; ?>.jpg" style="width:100%" height="710">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="./media/product/<?php echo $id; ?>_1.jpg" style="width:100%" height="710">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="./media/product/<?php echo $id; ?>_2.jpg" style="width:100%" height="710">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="./media/product/<?php echo $id; ?>_3.jpg" style="width:100%" height="710">
    </div>
    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>
  </div>
  <div class="col info">
    <form class="formstyle" action="php/placecart.php?product_id=<?php echo $id; ?>" method="post">
      <table>
        <tr>
          <th style="font-size: 30px;"><?php echo $name; ?></th>
        </tr>
        <tr>
          <td>Size:
            <input type="radio" id="XS" name="size" value="XS" checked="checked">
            <label for="XS">XS</label>
            <input type="radio" id="S" name="size" value="S">
            <label for="S">S</label>
            <input type="radio" id="M" name="size" value="M">
            <label for="M">M</label>
            <input type="radio" id="L" name="size" value="L">
            <label for="L">L</label>
            <input type="radio" id="XL" name="size" value="XL">
            <label for="XL">XL</label>
          </td>
        </tr>
        <tr>
          <td>Quantity:
            <label>
            <input type="number" name = "dnumber" id="dnumber" step="1" value="0" min="0" style="width:50px;" onchange="sumMoney(1)">
            </label>
          </td>
        </tr>
        <tr>
          <td>Single Cost: $<span id = "scost"><?php echo $price; ?></span></td>
        </tr>
        <tr>
          <td>Total Amount: $<span name="subtotal" id = "subtotal"></span></td>
        </tr>
      </table>
      <br>
      <input style="margin-left:100px; width: 200px;" type="submit" value="Add to Cart">
    </form>
    <div class="description">
      <h4>Product Description:</h4>
      <p><?php echo $desp; ?></p>
    </div>
  </div>
  </div>
<?php
  switch ($id) {
    case 1:
      $b1id=2; $b2id=3; $b3id=4; $b4id=5;
      break;
    case 2:
      $b1id=3; $b2id=4; $b3id=5; $b4id=6;
      break;
    case 3:
      $b1id=4; $b2id=5; $b3id=6; $b4id=1;
      break;
    case 4:
      $b1id=5; $b2id=6; $b3id=1; $b4id=2;
      break;
    case 5:
      $b1id=6; $b2id=1; $b3id=2; $b4id=3;
      break;
    case 6:
      $b1id=1; $b2id=2; $b3id=3; $b4id=4;
      break;
  }
?>
  <div class="otherproduct">
    <div class="colbtmtitle">
      <h3>VIEW<br>More!</h3>
    </div>
    <div class="colbtm">
      <a href="./product.php?product_id=<?php echo $b1id; ?>">
        <img class="product_img_1" src="./media/product/<?php echo $b1id; ?>.jpg" style="width:100%" height="360">
      </a>
    </div>
    <div class="colbtm">
      <a href="./product.php?product_id=<?php echo $b2id; ?>">
        <img class="product_img_1" src="./media/product/<?php echo $b2id; ?>.jpg" style="width:100%" height="360">
      </a>
    </div>
    <div class="colbtm">
      <a href="./product.php?product_id=<?php echo $b3id; ?>">
        <img class="product_img_1" src="./media/product/<?php echo $b3id; ?>.jpg" style="width:100%" height="360">
      </a>
    </div>
    <div class="colbtm">
      <a href="./product.php?product_id=<?php echo $b4id; ?>">
        <img class="product_img_1" src="./media/product/<?php echo $b4id; ?>.jpg" style="width:100%" height="360">
      </a>
    </div>
  </div>
</div>

<script type="text/javascript" src="jss/productslide.js"></script>

<?php require("./php/footer.php")?>
