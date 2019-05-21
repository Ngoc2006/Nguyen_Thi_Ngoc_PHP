<?php 

if (isset($_POST['btn_submit'])) {
	//Lấy thông tin từ các form bằng phương thức POST
	$MaSV = $_POST['mssv'];
	$User = $_POST['user'];
	$DienThoai = $_POST['phone'];
	$Email = $_POST['mail'];
	$DiaChi = $_POST['addr'];

	//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
	if ($MaSV == "" || $User == "" || $DienThoai == "" || $Email == "" || $DiaChi == "") {
		echo "<h2> Bạn vui lòng nhập đầy đủ thông tin ! </h2>";
	}else{
		echo "<h2> Thông tin người đăng nhập </h2>";
		echo "Mã số sinh viên: " . $MaSV . "<br>";
		echo "Họ và tên: " . $User . "<br>";
		echo "Số điện thoại: " . $DienThoai . "<br>";
		echo "Email: " . $Email . "<br>";
		echo "Giới Tính: " . $_POST['Gioitinh'] . "<br>";
		echo "Địa chỉ: " . $DiaChi . "<br>";
	}
}
?>