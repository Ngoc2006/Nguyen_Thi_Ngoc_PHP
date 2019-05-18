<?php 
	session_start();
	// session_destroy();
	unset($_SESSION['isLogin']);
	
	header('Location: login.php');
?>