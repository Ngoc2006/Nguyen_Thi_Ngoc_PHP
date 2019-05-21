<?php 
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	if (isset($_GET['code'])) {
		$code = $_GET['code'];
	}
	if (isset($_SESSION['info'])) {
		$data_arr= $_SESSION['info'][$code];
		error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	}
	if (isset($_GET['code'])) {
		$code = $_GET['code'];
		unset($_SESSION['info'][$code]);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title></title>
	<link rel="stylesheet" href="">
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container">
		<form action="edit_process.php" method="POST" role = "form">
			<h2 align="center">Cập Nhật Thông Tin Sinh Viên</h2>
			<div class="form-group">
                <label for="">Mã sinh viên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="code" value="<?php echo $data_arr['code'] ?>">
            </div>            
            <div class="form-group">
                <label for="">Họ và tên</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="full_name" value="<?php echo $data_arr['full_name'] ?>">
            </div>  
            
            <div class="form-group">
                <label for="">Số điện thoại</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone" value="<?php echo $data_arr['phone'] ?>">
            </div>  

            <div class="form-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email" value="<?php echo $data_arr['email'] ?>">
            </div> 
            <div class="form-group">
                <label>Giới tính: </label>
                <input type="radio" name="gender" value="Nam" placeholder="" >Nam
                <input type="radio" name="gender" value="Nữ" placeholder="">Nữ
                <input type="radio" name="gender" value="Khác" placeholder="">Other
            </div>
            <div class="form-group">
                <label for="">Địa chỉ</label>
                <input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address" value="<?php echo $data_arr['phone'] ?>">
            </div>  
            <button type="submit" class="btn btn-primary">Cập nhật</button>
		</form>
	</div>
</body>
</html>