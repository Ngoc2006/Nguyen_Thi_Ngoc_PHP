<?php
session_start();
$MaSP = $_GET['MaSP'];
unset($_SESSION['cart'][$MaSP]);
setcookie('unset', 'Xóa sản phẩm khỏi giỏ hàng thành công !', time() + 3);
header('Location: cart.php');

?>