<?php 

session_start();
// session_destroy();

include_once('data.php');
$MaSP = $_GET['MaSP'];
if (isset($_SESSION['cart'][$MaSP])) {
	$_SESSION['cart'][$MaSP]['SoLuong']++;
}else{
	$product = $products[$MaSP];
	$product['SoLuong'] = '1';
	$_SESSION['cart'][$MaSP]=$product;
}

header('Location: cart.php');

?>