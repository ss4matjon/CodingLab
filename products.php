<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "shoping_cart";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

<?php
include('header.php');
?>

<?php
include('products_body.php');
?>

<?php
include('Template/section products.php');
?>


<?php
include('footer.php');
?>