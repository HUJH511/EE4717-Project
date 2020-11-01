<?php
  include "php/ini_set.php";
?>
<!DOCTYPE html>
<html lang= "en">

<head>
  <title>Forever NTU - Home</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="./csstyle/hdft.css">
  <link rel="stylesheet" href="./csstyle/homestyle.css">
</head>
<?php require("./php/header.php")?>

<div class="wrapper">

  <div class="slideshow-container">
    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <a href="shop.php">
      <img src="media/herobanner.JPG" style="width:100%" height="300"></a>

    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <a href="bestseller.php">
      <img src="media/herobanner2.JPG" style="width:100%" height="300"></a>

    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <a href="membership.php">
      <img src="media/herobanner3.JPG" style="width:100%" height="300"></a>

    </div>
  </div>
  <script src="jss/slideshow.js"></script>

  <div class="left_2nd">
    <a href="bestseller.php">
      <img src="media/5.png" width="600px" height="935">
  </div>
  <div class="right_2nd">
    <video width="600" height="300" controls autoplay>
      <source src="media/Seasonal_Palette.mp4" type="video/mp4">
      <source src="media/Seasonal_Palette.ogg" type="video/ogg">
    </video>
  </div>
  <div class="right_2nd">
    <a href="shop.php">
    <img src="media/1.png" width="600" height="630"></a>
  </div>
  <div class="content">
    <p>About us: We want to open and operate an online cloth shop.
      <br>
      Our aim is to give you special design and remember your precious age.
      <br><br>
      Be our member: Our member can have 10% discount!
      <br>
      Do not miss the opportunity!
      <br>
      Register to be our member right Now!
    </p>
  </div>
</div>

<?php require("./php/footer.php")?>
