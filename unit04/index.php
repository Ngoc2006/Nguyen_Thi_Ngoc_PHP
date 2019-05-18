<?php 
	//Biến toàn cục $_GET
	echo "<pre>";
		print_r($_GET);
	echo "</pre>";

	//Lấy 1 giá trị đc gửi lên
	$class = $_GET['class'];
	echo "<br>Lớp học: " . $class;
	echo "<br>Unit: " . $_GET['unit'];
		
	// Kiểm tra có tồn tại key hay không?
	if (isset($_GET['name'])) {
		echo "<br>Name: " . $_GET['name'];
	}
?>