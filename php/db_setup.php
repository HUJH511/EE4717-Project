<?php
$servername = "localhost";
$username = "f33ee";
$password = "f33ee";
$DBname = "f33ee";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $DBname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE IF NOT EXISTS products (
  product_id INT UNSIGNED PRIMARY KEY,
  product_name VARCHAR(30) NOT NULL,
  product_price DOUBLE NOT NULL,
  product_type VARCHAR(30) NOT NULL,
  product_color VARCHAR(30) NOT NULL,
  product_description VARCHAR(800) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
	echo "Error creating Products table: " . mysqli_error($conn);
	mysqli_close($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS orders(
  order_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  product_id INT UNSIGNED,
  quantity INT,
  total_sales VARCHAR(30),
  size VARCHAR(30),
  FOREIGN KEY (product_id) REFERENCES products(product_id)
)";

if (!mysqli_query($conn, $sql)) {
	echo "Error creating Orders table: " . mysqli_error($conn);
	mysqli_close($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS payments(
  payment_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  pay_amount VARCHAR(30),
  pay_name VARCHAR(30),
  pay_email VARCHAR(100),
  address VARCHAR(100)
)";

if (!mysqli_query($conn, $sql)) {
	echo "Error creating Orders table: " . mysqli_error($conn);
	mysqli_close($conn);
}

$sql = "CREATE TABLE IF NOT EXISTS members (
	member_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(30) NOT NULL,
  password VARCHAR(100) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  birthday VARCHAR(40) NOT NULL,
  email VARCHAR(60) NOT NULL,
  mobile_number VARCHAR(30) NOT NULL
)";

if (!mysqli_query($conn, $sql)) {
	echo "Error creating Total sales table: " . mysqli_error($conn);
	mysqli_close($conn);
}

$sql = "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (1, 'Evianna Low Back Bodycon Dress', 34.00,'Belted','Cold','Work in comfort. One for your 9-6 rotation. Functional side pockets.');";
$sql .= "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (2, 'Livetta Flare Sleeve Wrap Dress', 32.00,'Sleeved','Cold','Weekend dinners in a flattering neckline. Detachable sash. Back zip. Side seam slits.');";
$sql .= "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (3, 'Maisy Button Down Linen Maxi Dress', 30.00,'Belted','Cold','Some days call for laid-back. Button down front. Detachable sash.');";
$sql .= "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (4, 'Jolee Front Wrap Dress in Floral Dance', 36.00,'Sleeved','Warm','Specially designed in-house print.Irresistable feminine charm. Fixed sash. Flare hem. Fixed sash. V-neckline.');";
$sql .= "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (5, 'Corrine Button Down Dress', 40.00,'Sleeved','Warm','Stay-in weekend brunch, anyone? Panel detail. Fit and flare silhouette. Round neckline. Functional side pockets.');";
$sql .= "INSERT IGNORE INTO products (product_id, product_name, product_price,product_type,product_color,product_description)
VALUES (6, 'Giulia Sunray Pleated Camisole Dress', 39.00,'Belted','Cold','Effortless elegance. Sunray pleats. Detachable sash.');";

$sql .= "INSERT IGNORE INTO members (member_id, username, mobile_number) VALUES (1,'nonemember','00000000');";

if (!mysqli_multi_query($conn, $sql)) {
	echo "Failed to fill tables with data: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
