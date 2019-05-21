<?php
	session_start();
	include('data.php');
	$MaSP = $_GET['MaSP'];
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong']++;
	}
	else{
	$product= $products[$MaSP];
	$_SESSION['cart'][$MaSP]=$product;
	$_SESSION['cart'][$MaSP]['SoLuong']='1';

	}
	echo "<pre>";
		print_r($_SESSION['cart']);
	echo "</pre>";
	// unset($_SESSION['cart']['']);


	header("location:cart.php");	

 ?>