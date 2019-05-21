<?php 

	session_start();
	// session_destroy();
	$code = $_GET['code'];
	$i=0;
 	foreach ($_SESSION['info'] as $key =>$value) {
		if ($code==$value['code']) {
			unset($_SESSION['info'][$key]);
			setcookie('msg', 'Xóa thành công !', time() + 3);
			}
			// echo ($_SESSION['info'][5]);	
		
		$i++;
	}
	
	
	
	header('Location: list.php');

?>