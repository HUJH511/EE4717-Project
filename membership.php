<?php //authmain.php
include "php/db_connect.php";

session_start();

if (isset($_POST['username']) && isset($_POST['password']))
{
  // if the user has just tried to log in
  $userid = $_POST['username'];
  $password = $_POST['password'];

  $conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");

  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    return;
  }

  $password = md5($password);
  $sql = "SELECT * FROM f33ee.members WHERE username = '$userid' AND password = '$password'";
//  echo "<br>" .$query. "<br>";
$result = mysqli_query($conn,$sql);
  if (mysqli_num_rows($result))
  {
      $_SESSION['valid_user'] = $userid;
  }
  mysqli_close($conn);
}
?>

<html>

<head>
    <meta charset="utf-8">
    <title>ForeverNTU - Login</title>
    <link rel="stylesheet" href="./csstyle/hdft.css">
</head>
<?php require("./php/header.php")?>

<div class="wrapper">

<br>
<h1 style="text-align: center;">Login as the Member of Our Shop</h1>

<img style="float:left; margin-left: 15%; margin-top: 80px;" src="./media/logo.jpg" width="500" height="300">

<div style="margin-left: 65%; margin-top: 150px;">
<?php
if (isset($_SESSION['valid_user']))
{
  echo 'You are logged in as: '.$_SESSION['valid_user'].' <br /><br />';
  echo '<a style="text-decoration:underline;" href="logout.php">Log out</a><br /><br />';
}
else
{
  if (isset($userid))
  {
    // if they've tried and failed to log in
    echo 'Could not log you in.<br /><br />';
  }
  else
  {
    // they have not tried to log in yet or have logged out
    echo 'You are not logged in.<br /><br />';
  }

    // provide form to log in
    echo '<form method="post" action="membership.php">';
    echo '<table>';
    echo '<tr><td>Username:</td></tr>';
    echo '<tr><td><input type="text" name="username"></td></tr>';
    echo '<tr><td>Password:</td></tr>';
    echo '<tr><td><input type="password" name="password"></td></tr>';
    echo '<tr><td colspan="1" align="center">';
    echo '<input type="submit" value="Log in">';
    echo '<input type="reset" name="reset" value="Reset"></td></tr>';
    echo '</table></form>';
}
?>
<br />
<a style="text-decoration:underline;" href="register.php">New User? Registration</a>
</div>


<br /><br />
<br /><br />
<br /><br />
<br /><br />
<br /><br />
</div>

<?php require("./php/footer.php")?>
