<?php 
	session_start();
	
	$code = $_GET['code'];
	
	$i=0;
 	foreach ($_SESSION['info'] as $key =>$value) {
		if ($code==$value['code']) {
			echo "- Mã sinh viên: ".$value['code']."<br>";
			echo "- Họ và tên:    ".$value['full_name']."<br>";
			echo "- Số điện thoại: ".$value['phone']."<br>";
			echo "- Email: ".$value['email']."<br>";
			echo "- Giới tính: ".$value['gender']."<br>";
			echo "- Địa chỉ: ".$value['address']."<br>";	
		}
		$i++;
	}
	
	//}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<a href="list.php"class="btn btn-danger">Quay lại</a>
 </body>
 </html>