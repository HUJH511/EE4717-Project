<?php
include "db_connect.php";

$username = $_POST['username'];
$gender = $_POST['gender'];
$birthday = $_POST['birthday'];
$number = $_POST['mobile_number'];
$email = $_POST['Email'];
//$address = $_POST['shippingaddress'];
$password = $_POST['password'];
$password2 = $_POST['password2'];

if ($password != $password2) {
  echo "Sorry passwords do not match";
  exit;
}
$password = md5($password);

$sql = "INSERT INTO f33ee.members (username, gender, birthday, email, password, mobile_number)
        VALUES ('$username', '$gender','$birthday','$email','$password','$number')";

$result = mysqli_query($conn, $sql);

if (!$result)
  echo "Your query failed";
else {
  echo "Welcome". $username . ". You are now registered";
  echo '<br><br>';
}
?>

<html>
   <head>
      <title>login</title>
      <meta http-equiv = "refresh" content = "2; url = http://192.168.56.2/f33ee/EE4717_Proj/membership.php" />
   </head>
   <body>
      <p>Redirecting to login page</p>
   </body>
</html>
