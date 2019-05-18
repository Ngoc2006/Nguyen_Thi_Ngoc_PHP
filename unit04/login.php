<?php
    session_start();
    if (isset($_SESSION['isLogin']) && $_SESSION['isLogin'] == true) {
        header('Location: admin.php');
    }
?>

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
        <form action="login_post.php" method="POST" role="form">
            <legend>Login</legend>
            <p>
                <?php
                    if (isset($_COOKIE['login_msg'])) {
                        echo $_COOKIE['login_msg'];
                    }
                ?>
            </p>


            <div class="form-group">
                <label for="">Tên đăng nhập</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên đăng nhập" name="user">
            </div>
            
            <div class="form-group">
                <label for="">Mật khẩu</label>
                <input type="password" class="form-control" id="" placeholder="Nhập vào mật khẩu" name="pwd">
            </div>  
            
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>
</body>
</html>