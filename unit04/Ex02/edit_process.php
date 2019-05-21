<?php 
	session_start();
	if (isset($_POST['code'])) {
		$code = $_POST['code'];
	}
	if (isset($_POST['full_name'])) {
		$full_name = $_POST['full_name'];
	}
	if (isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}
	if (isset($_POST['email'])) {
		$email = $_POST['email'];
	}
	if (isset($_POST['gender'])) {
		$gender = $_POST['gender'];
	}
	if (isset($_POST['address'])) {
		$address = $_POST['address'];
	}
	$_SESSION['info'][$msv] = [
		'code' => $code,
		'full_name' => $full_name,
		'phone' => $phone,
		'email' => $email,
		'gender' => $gender,
		'address' => $address,
	];
	setcookie('msg','Cập nhật thành công !', time() + 3);
	header('location: list.php');
?>