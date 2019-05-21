<?php 
	session_start();

	include('data.php');

	//Bước 1: Lấy ra mã sp;
	$MaSP = $_GET['MaSP'];
	//Bước 1.1: Kiểm tra xem sp này có trong giỏ hàng chưa?
	if (isset($_SESSION['cart'][$MaSP])) {
		$_SESSION['cart'][$MaSP]['SoLuong'] += 1;
	}else{
		//Bước 2: Lấy thông tin sản phẩm dựa vào mã sp;
		$product = $products[$MaSP];

		//Bước 2.1: Xét số lượng về 1;
		$product['SoLuong'] = 1;

		// Bước 3: Thêm sp vào session;
		$_SESSION['cart'][$MaSP] = $product;
	}
	setcookie('thongbao', 'Thêm vào giỏ hàng thành công !', time() + 3);
	//Bước 4: Chuyển sang giỏ hàng
	header('Location: cart.php');
?>