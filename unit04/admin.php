<?php 
session_start();

if ($_SESSION['isLogin'] == true) {
	echo "<h3> Ngọc xinh gái </h3>";
	echo '<br><a href="logout.php">logout</a>';
}else{
	setcookie('login_msg','Đăng nhập không thành công!', time() + 3);
	header('Location: login.php');
}
?>