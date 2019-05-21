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
  <script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
  <div class="container">
    <form action="captcha.php" method="POST" role="form">
      <center><h1>THÔNG TIN KHÁCH HÀNG</h1></center>
      <div class="form-group">
        <label for="">Họ và tên</label>
        <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="user" required="">
      </div>  
      <div class="form-group">
        <label for="">Số điện thoại</label>
        <input type="text" class="form-control" id="" placeholder="Nhập số điện thoại" name="phone"  required="">
      </div> 
      <div class="form-group">
        <label for="">Email</label>
        <input type="text" class="form-control" id="" placeholder="Nhập email" name="mail"  required="">
      </div>
      <div class="form-group">
        <label for="">Địa chỉ</label>
        <input type="text" class="form-control" id="" placeholder="Nhập địa chỉ" name="addr"  required="">
      </div> 
      <?php
            session_start();
            // session_destroy();
            //cấu hình thông tin do google cung cấp
            $api_url     = 'https://www.google.com/recaptcha/api/siteverify';
            $site_key    = '6LfcT6QUAAAAAJGqYJpOMzdvOcSOTLxNwAtaa-bt';
            $secret_key  = '6LfcT6QUAAAAAJxR8ZErL_ufIj2Py4fSgBj6jGYR';

            //kiem tra submit form
            if(isset($_POST['submit']))
            {
                //lấy dữ liệu được post lên
                $site_key_post    = $_POST['g-recaptcha-response'];

                //lấy IP của khach
                if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                    $remoteip = $_SERVER['HTTP_CLIENT_IP'];
                } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                    $remoteip = $_SERVER['HTTP_X_FORWARDED_FOR'];
                } else {
                    $remoteip = $_SERVER['REMOTE_ADDR'];
                }

                //tạo link kết nối
                $api_url = $api_url.'?secret='.$secret_key.'&response='.$site_key_post.'&remoteip='.$remoteip;

                //lấy kết quả trả về từ google
                $response = file_get_contents($api_url);
                //dữ liệu trả về dạng json
                $response = json_decode($response);
                if(!isset($response->success))
                {
                    echo 'Captcha khong dung';
                }
                if($response->success == true)
                {
                    echo "captcha dung";
                }else{
                    echo 'Captcha khong dung';
                }
            }
            ?>
            
            
        
            <div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
            <button type="submit" class="btn btn-primary" name="btn_submit">Thanh toán</button>
    
    </form>
  </div>
</body>
</html>