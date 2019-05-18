<?php 
   // echo 'Tên đăng nhập: '.$_POST['user'].'<br>';
   // echo 'Mật khẩu: '.$_POST['pwd']; 
	session_start();

	$user = $_POST['user'];
	$password = $_POST['pwd'];

	if ($user == 'admin' && $password == '123') {
		$_SESSION['isLogin'] = true;
	}else{
		$_SESSION['isLogin'] = false;
	}
	header('Location: admin.php');
?>