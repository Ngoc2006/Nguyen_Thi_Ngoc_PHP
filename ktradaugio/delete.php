<?php
	session_start();
	include('data.php');
	$MaSP = $_GET['MaSP'];
	if (($_SESSION['cart'][$MaSP]['SoLuong']>1)) {
		$_SESSION['cart'][$MaSP]['SoLuong']--;
	}
	else 
	{
	 unset ($_SESSION['cart'][$MaSP]);
	}
	echo "<pre>";
		print_r($_SESSION['cart']);
	echo "</pre>";
	// unset($_SESSION['cart']['']);


	header("location:cart.php");	

 ?>