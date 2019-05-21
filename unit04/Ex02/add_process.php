<?php 
   session_start();
   // include_once('add.php');
   $code = $_POST['code'];
   $full_name = $_POST['full_name'];
   $phone = $_POST['phone'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $address = $_POST['add'];
 
 
   $info = array(
      'code'       => $code,
      'full_name'  => $full_name,
      'phone'      => $phone,
      'email'      => $email,
      'gender'     => $gender,
      'address'    => $address,
   );
   $_SESSION['info'][]= $info;
   setcookie('msg','Thêm mới thành công !', time() + 3);
   header('Location: list.php');
?>