<?php
session_start();

$conn = mysqli_connect("localhost", "f33ee", "f33ee", "f33ee");
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
  return;
}

if (isset($_GET['empty'])) {
  /*for ($j=0; $j < count($_SESSION['order']) + 1; $j++){
    $oid = $_SESSION["order"][$j];
    $sql = "DELETE FROM f33ee.orders WHERE order_id= $oid;";
    if (!$result = mysqli_query($conn, $sql)) {
		    echo "Failed: " . mysqli_error($conn);
	  }
  }*/
	unset($_SESSION['cart']);
  unset($_SESSION['name']);
  unset($_SESSION['amount']);
  unset($_SESSION['money']);
  unset($_SESSION['size']);
  //unset($_SESSION['order']);
	header('location: ' . $_SERVER['PHP_SELF']);
	exit();
}
?>

<!DOCTYPE html>
<html lang= "en">

<head>
  <title>Forever NTU - ShoppingCart</title>
  <meta charset = "utf-8">
  <link rel="stylesheet" href="./csstyle/hdft.css">
  <link rel="stylesheet" href="./csstyle/cart.css">
  <script src="jss/"></script>
</head>
<?php require("./php/header.php")?>

<div class="wrapper">
  <h2 style="text-align: center;">Your Shopping Cart</h2>
  <form class="" action="./payment.php" method="post">
  <table>
    <thead>
      <!--<td width="100">All<input type="checkbox" id="select-all" name="all"></td>-->
      <th>Cloth(s)</th>
      <th>Name</th>
      <th>Size</th>
      <th>Quantity</th>
      <th>Subtotal</th>
    </thead>
    <tbody>
      <?php
        $total = 0.0;
        $ccount = count($_SESSION['cart']);
        for($i=0; $i < $ccount; $i++){
          echo "<tr>";
          //echo "<td>";
          //echo '<input type="checkbox" id="'.$i.'" name="pid" value = "'.$_SESSION['money'][$i].'" onchange="calprice()")>';
          //echo "</td>";
          echo '<td><img src="./media/product/'.$_SESSION['cart'][$i].'.jpg" width="50"></td>';
          echo "<td>" .$_SESSION['name'][$i]."</td>";
          echo "<td>" .$_SESSION['size'][$i]."</td>";
          echo "<td>" .$_SESSION['amount'][$i]."</td>";
          echo "<td>$" .$_SESSION['money'][$i]."</td>";
          echo "</tr>";
          $total = $total + $_SESSION['money'][$i];
        /*  echo "<script type='text/javascript'>";
          echo "var $chked = document.getElementById('$i').checked;";
          echo "</script>";

          function calprice(){
            $total = 0.0;
            if ($chked){
              $smoney = $_SESSION['money'][$i];
            }
            else{
              $smoney = 0;
            }
            $total = $total + $smoney;
          }*/
        }
      ?>
    </tbody>
    <tfoot>
  	<tr><td></td><td></td><td></td>
  		<th align='center'>Total:</th><br>
  		<th align='center'>$<?php echo number_format($total, 2); ?>
        <input type="hidden" name="total" value=<?php echo $total; ?>>
  		</th>
  	</tr>
    <tr>
        <td colspan="4"></td>
        <td colspan="2"><button type="submit">Checkout</button></td>
    </tr>
  	</tfoot>
  </table>
  </form>
  <p align="center"><a href="./shop.php"><button>Continue Shopping</button></a> or
  <a href="<?php echo $_SERVER['PHP_SELF']; ?>?empty=1"><button>Empty your cart</button></a></p>
</div>

<script type="text/javascript">
document.getElementById("select-all").onclick = function() {
  var checkboxes = document.getElementsByName("pid");
  for (var checkbox of checkboxes) {
    checkbox.checked = this.checked;
  }
}
</script>
<!---
<script type="text/javascript">
document.getElementsByName("pid").onchange = function() {
  var mtotal = 0.0;
  for ( i = 0; i < ; i++) {
    if (!document.getElementById(i).checked;){
      document.getElementById(i).value = 0;
    }
    if (document.getElementById(i).checked;){
      document.getElementById(i).value = 10;
    }
    mtotal = mtotal + document.getElementById(i).value;
  }
  document.getElementById('mtotal').innerHTML = mtotal;
}
</script>-->
<?php //print_r($_SESSION); ?>

<?php require("./php/footer.php")?>
