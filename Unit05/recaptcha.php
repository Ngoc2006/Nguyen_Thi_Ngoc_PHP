<?php
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
        echo 'Captcha dung';
    }else{
        echo 'Captcha khong dung';
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<script src="https://www.google.com/recaptcha/api.js?hl=vi"></script>
</head>
<body>
	<form action="" method="POST">
		
		<div class="g-recaptcha" data-sitekey="<?php echo $site_key?>"></div>
		<input type="submit" value="Submit" name="submit">
	</form>
</body>
</html>