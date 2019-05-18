<?php 

	session_start();
	// session_destroy();
	$code = $_GET['code'];
	if ($code == $_SESSION['info']['cart']['code']) {
		unset($_SESSION['info']['cart']);
	}
	
	setcookie('unset', 'Xóa thành công !', time() + 3);

	header('Location: list.php');

?>