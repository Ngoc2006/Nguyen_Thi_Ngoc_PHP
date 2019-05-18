<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>THÔNG TIN SINH VIÊN</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <form action="add_process.php" method="POST" role="form">
      <center><h1>ĐĂNG KÝ THÔNG TIN SINH VIÊN</h1></center>
      <div class="form-group">
        <label for="">Mã số sinh viên</label>
        <input type="text" class="form-control" id="" placeholder="Nhập mã số sinh viên" name="mssv">
      </div>

      <div class="form-group">
        <label for="">Họ và tên</label>
        <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="user">
      </div>  

      <div class="form-group">
        <label for="">Số điện thoại</label>
        <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone">
      </div> 
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="Nhập email" name="mail">
      </div> 
      <div class="form-group">
        <label for="">Giới tính: </label>
        <input type="radio" name="Gioitinh" value="Nam" placeholder="" checked = "">Male
        <input type="radio" name="Gioitinh" value="Nữ" placeholder="">Female
        <input type="radio" name="Gioitinh" value="GT khác" placeholder="">Other   
      </div> 
      <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="addr">
      </div> 
      <button type="submit" name="btn_submit"><a href="add_process.php" class="btn btn-primary">Lưu thông tin</a></button>
    </form>
  </div>
</body>
</html>




