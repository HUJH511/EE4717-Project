<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>document.getElementsByTagName("html")[0].className += " js";</script>
    <link rel="stylesheet" href="./csstyle/hdft.css">
    <link rel="stylesheet" href="./csstyle/aboutus.css">
    <title>Forever NTU - About Us</title>
</head>

<?php require("./php/header.php")?>

<div class="wrapper" style="background-color: #FFE7E7;">

<div class="FAQ">

  <div class="col but">
    <button style="margin-top: 50px;" class="button tablink" onclick="openCity(event, 'Account')"><span>Account</span></button><br>
    <button style="margin-top: 50px;" class="button tablink" onclick="openCity(event, 'Payments')"><span>Payments</span></button><br>
    <button style="margin-top: 50px;" class="button tablink" onclick="openCity(event, 'Delivery')"><span>Delivery</span></button><br>
    <button style="margin-top: 50px;" class="button tablink" onclick="openCity(event, 'Basic')"><span>Basic</span></button><br>
  </div>

  <div class="col right">
    <h2 style="text-align: center;">Frequently Asked Questions</h2><br>

  <div id="Account" class="type" style="display:none">
    <p><h4>How do I change my password?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <p><h4>How do I delete my account?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
  </div>

  <div id="Payments" class="type" style="display:none">
    <p><h4>Can I have an invoice for my subscription?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <p><h4>Why did my credit card or PayPal payment fail?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
  </div>

  <div id="Delivery" class="type" style="display:none">
    <p><h4>What should I do if my order hasn't been delivered yet?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <br><br>
  </div>

  <div id="Basic" class="type" style="display:none">
    <p><h4>How do I change my password?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <p><h4>Why did my credit card or PayPal payment fail?</h4></p>
    <p>SoleMates is a customer-centered web portal for online purchase of sports shoes for sports enthusiasts, especially the young.  It allows them to browse through various types of sports shoes through search and categories filtering. Top sellers are featured to inform customers about shoes’ popularity. This online purchase portal allows the potential buyers to customize orders and add shoes of their choice to the shopping cart. Multiple sports shoes can be purchased at the same time. In order to provide one-stop care-free shopping experience, customers can reach out to the seller by sending their query and feedback to facilitate the shopping process in the portal.</p>
    <br><br>
  </div>
  </div>
</div>

<script>
openCity(event, 'Basic');
function openCity(evt, type) {
  var i, x, tablinks;
  x = document.getElementsByClassName("type");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  document.getElementById(type).style.display = "block";
}
</script>

      <div class="container">
        <form action= "./php/feedback.php" method=POST>

          <h1 style="text-align: center;">Contact us</h1><br>
          <label for="uname">&#42; UserName</label>
          <input type="text" id="uname" name="username" placeholder="Your username.." required>
          <br>

          <label for="Email">&#42; E-mail:</label>
          <input type="text" name="Email" id="Email" placeholder="Your email.." required><br />

          <label for="category">Category</label>
          <select id="category" name="category">
            <option value="basic">Basic</option>
            <option value="payment">Payment</option>
            <option value="account">Account</option>
            <option value="delivery">Delivery</option>
          </select>
          <br>

          <label for="subject">&#42; Subject</label>
          <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>
          <br>

          <input type=submit name=submit value=Submit>
          <input type=reset name=reset value="Reset">
          <br><br>
        </form>
      </div>


<?php require("./php/footer.php")?>
