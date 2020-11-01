<?php
session_start();
include "db_connect.php";
include "db_setup.php";
if (!isset($_SESSION['cart'])||!isset($_SESSION['order'])||!isset($_SESSION['name'])||!isset($_SESSION['size'])||!isset($_SESSION['amount'])||!isset($_SESSION['money'])){
  $_SESSION['cart'] = array();
  $_SESSION['amount'] = array();
  $_SESSION['money'] = array();
  $_SESSION['name'] = array();
  $_SESSION['size'] = array();
  $_SESSION['order'] = array();
}
?>
