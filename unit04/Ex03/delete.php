<?php

session_start();
$MaSP = $_GET['MaSP'];
$_SESSION['cart'][$MaSP]['SoLuong']--;
if ($_SESSION['cart'][$MaSP]['SoLuong'] == 0) {
	unset($_SESSION['cart'][$MaSP]);
}
header('Location: cart.php');

?>