<html>
<head>
    <meta charset="utf-8">
    <title>Forever NTU - Register Page</title>
    <link rel="stylesheet" href="./csstyle/hdft.css">
    <script type = "text/javascript" src = "./jss/registration.js"></script>
</head>
<?php require("./php/header.php")?>

<div class="wrapper">

<br>
<h1 style="text-align: center;">Register as a Member of Our Shop</h1>


<div style="margin-left: 15%; margin-top: 80px;">

<img style="float:left;" src="./media/logo.jpg" width="500" height="300">

<form style="margin-left: 580px;" action="php/register_reci.php" method=post>

<br>

<label for="username">&#42; Username:</label>
<input type="text" name="username" id="username" required><br /><br />

<label for="gender">Gender:</label>
<select id="gender" name="gender">
  <option value="female">Female</option>
  <option value="male">Male</option>
  <option value="other">Other</option>
</select>
<br><br>

<label for="birthday">Birthday:</label>
<input type="date" name="birthday" id="birthday">
<br><br>

<label for="Email">&#42; E-mail:</label>
<input type="text" name="Email" id="Email" required><br /><br />
<!--
<label for="shippingaddress">&#42; Shipping Address:</label>
<input type="text" name="shippingaddress" id="shippingaddress" required><br /><br />
-->
<label for="mobile_number">&#42; Mobile Number:</label>
<input type="text" name="mobile_number" id="mobile_number" required><br /><br />

<label for="password">&#42; Password:</label>
<input type="password" name="password" id="password" required><br /><br />

<label for="password">&#42; Password Comfirmation:</label>
<input type="password" name="password2" required><br /><br />

<div style="margin-right:47%">
  <input type="submit" name="submit" value="Submit" onclick="return reCheck();">
  <input type="reset" name="reset" value="Reset">
</div>

<br><br><br>

<a style="text-decoration:underline;" href="membership.php">Already Have an Account? Login</a>
</form>
</div>
<script type = "text/javascript" src = "./jss/registrationr.js"></script>

<br /><br />
<br /><br />
<br />


<?php require("./php/footer.php")?>
