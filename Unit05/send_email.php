<?php 
	include_once('email_function.php');

	$email_recive = 'ngocnguyenbn0697@gmail.com';
	$name= 'Ngọc';
	$contents=' <h4> ZENT </h4>';
	$subject = 'PHP 19';

	send_email($email_recive,$name,$contents,$subject)
 ?>