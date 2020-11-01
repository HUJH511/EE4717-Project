<!DOCTYPE html>
<html lang= "en">

<head>
  <title>Forever NTU - BestSeller</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="./csstyle/hdft.css">
  <link rel="stylesheet" href="./csstyle/shop.css">
  <script src=".js"></script>
</head>
<?php require("./php/header.php")?>

<div class="wrapper">
  <div class="leftcol">
    <div class="fixfilter">
      <a href="shop.php">
        <div class="linktitle">Looking For All Products?<br>Click Here!
        </div>
      </a>
      <div class="filtertitle"><strong>Find Your Preference</strong></div>
      <div class="filter">
        <div class="filtersub">Cloth Type</div>
        <div id="myBtnContainer1">
          <button class="btn active" onclick="filterSelection('all')"> Show all</button>
          <button class="btn" onclick="filterSelection('belted')">Belted Dress</button>
          <button class="btn" onclick="filterSelection('sleeved')">Sleeved Dress</button>
        <div class="separateline"></div>
        <div class="filtersub">Color Selection</div>
        <button class="btn" onclick="filterSelection('warm')">Warm Color</button>
          <button class="btn" onclick="filterSelection('cold')">Cold Color</button>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="column sleeved warm">
      <div class="content">
        <a href="./product.php?product_id=5">
          <img class="product_img_2" src="./media/product/5.jpg" alt="" style="width:100%">
          <h4>Corrine Button Down Dress</h4>
          <p>$40.00</p>
        </a>
      </div>
    </div>
    <div class="column belted cold">
      <div class="content">
        <a href="./product.php?product_id=6">
          <img class="product_img_2" src="./media/product/6.jpg" alt="" style="width:100%">
          <h4>Giulia Sunray Pleated Camisole Dress</h4>
          <p>$39.00</p>
        </a>
      </div>
    </div>

    <div class="column sleeved warm">
      <div class="content">
        <a href="./product.php?product_id=4">
          <img class="product_img_2" src="./media/product/4.jpg" alt="" style="width:100%">
          <h4>Jolee Front Wrap Dress in Floral Dance</h4>
          <p>$39.00</p>
        </a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript" src="jss/filterSelection.js"></script>

<?php require("./php/footer.php")?>
