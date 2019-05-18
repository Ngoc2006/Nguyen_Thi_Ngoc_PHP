<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Form</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

  <!-- Optional theme -->
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  <!-- Latest compiled and minified JavaScript -->
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <form action="post.php" method="POST" role="form">
      <center><h1>PHP - Thực hành về gửi dữ liệu dùng POST</h1></center>
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
      <button type="submit" class="btn btn-primary" name="btn_submit">Submit</button>
    </form>
  </div>
</body>
</html>