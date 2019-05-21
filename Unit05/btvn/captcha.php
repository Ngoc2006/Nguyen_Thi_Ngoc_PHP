<?php 
    session_start();
    include_once('email_function.php');
    
    $products = $_SESSION['cart'];
    if (isset($_POST['user']) && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['addr'])) {
        $user = $_POST['user'];
        $phone = $_POST['phone'];
        $email = $_POST['mail'];
        $address = $_POST['addr'];
    }

    ob_start();
    include_once('client_function.php');
    $contents = ob_get_contents();
    ob_clean();
    send_email($email,$name,$contents,'Thông báo đặt hàng');
    unset($_SESSION['cart']);
    header('Location: done.php');
?>