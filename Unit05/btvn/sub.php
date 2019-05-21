<?php 
session_start();
include('data.php');
$MaSP = $_GET['MaSP'];
if ($_SESSION['cart'][$MaSP]['SoLuong'] >1) {
	$_SESSION['cart'][$MaSP]['SoLuong'] --;
}else{
	unset($_SESSION['cart'][$MaSP]);
	setcookie('msg', 'Xóa thành công !', time() + 3);
}
header('Location: cart.php');
?>
