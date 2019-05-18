<?php 
	session_start();
	
	$code = $_GET['code'];

	
		if ($code==$_SESSION['info']['cart']['code']) {
			echo "- Mã sinh viên: ".$_SESSION['info']['cart']['code']."<br>";
			echo "- Họ và tên:    ".$_SESSION['info']['cart']['full_name']."<br>";
			echo "- Số điện thoại: ".$_SESSION['info']['cart']['phone']."<br>";
			echo "- Email: ".$_SESSION['info']['cart']['email']."<br>";
			echo "- Giới tính: ".$_SESSION['info']['cart']['gender']."<br>";
			echo "- Địa chỉ: ".$_SESSION['info']['cart']['address']."<br>";	
		}
	
 ?>
 	<a href="list.php"class="btn btn-danger">Back</a>
