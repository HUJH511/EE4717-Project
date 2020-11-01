<?php
  $total = $_POST["total"];
?>

<!DOCTYPE html>
<html lang= "en">

<head>
  <title>Forever NTU - ShoppingCart</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="./csstyle/hdft.css">
  <link rel="stylesheet" href="./csstyle/payment.css">
  <script type="text/javascript" src="jss/payment.js"></script>
</head>
<?php require("./php/header.php")?>

<div class="wrapper">

  <div class="chk">
    <p>Are you a memebr?
    <button id= "chkmembery" onclick="shownum()">Yes</button>
    <a href="./membership.php" onclick="return confirm('Are you sure?');">
    <button id= "chkmembern" onclick="disnum()">No</button></a></p>
  </div>
    <form action="./php/payreci.php" method="post">
    <p>Give Your Membership Mobile Number: <input type="hidden" name = "memnum" id="memnum"></p>
  <div class="">
      <table>
        <tr>
        <td>Total Cost: $<?php echo $total; ?><input type="hidden" name="total" value=<?php echo $total; ?>>
          <br><span>(If you are a memeber, we will give you 10% off at payment!)</span>
        </td>
        </tr>
        <tr>
          <td style="margin-right:0px;">Payment Type:
          <input type="radio" name="payment" onclick="showpay(1)"><img src="media/master.png">
          <input type="radio" name="payment" onclick="showpay(2)"><img src="media/visa.png">
          <input type="radio" name="payment" onclick="showpay(3)"><img src="media/paypal.png"></td>
        </tr>
        <tr>
          <td>The Payment Type You Choose is: <span id="paymentype"></span></td>
        </tr>
        <tr>
        <td>Card Number: <input type="text" id="cardnum" name="cardnum"></td>
        </tr>
        <tr>
          <td>Date Expire: <input type="date" id="datexp" name="datexp"></td>
        </tr>
        <tr>
          <td>CCV Code: <input type="text" id="ccv" name="ccv"></td>
        </tr>
        <tr>
          <td>Name on Card: <input type="text" id="cardname" name="cardname"></td>
        </tr>
        <tr>
          <td>Address: <input type="text" id="address" name="address"></td>
        </tr>
        <tr>
          <td>Confirmation Email: <input type="email" id="conemail" name="conemail"></td>
        </tr>
      </table>
      <input type="submit" name="submit" value="Pay" onclick="return reCheck();">
    </form>
  </div>
</div>
<script  type="text/javascript" src="jss/paymentr.js"></script>
<?php require("./php/footer.php")?>
