<?php
    include('./connect.php');
    $username   = addslashes($_POST['txtUsername']);
    $password   = addslashes($_POST['txtPassword']);
    $email      = addslashes($_POST['txtEmail']);
    $passwordcf = addslashes($_POST['txtPasswordCF']);
    if ($password!=$passwordcf){
      echo 'Mật khẩu và mật khẩu xác nhận không khớp. Vui lòng nhập lại. <a href="javascript: history.go(-1)">Trở lại</a> sau... <span id="time"></span>';
      echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
      exit;
    }
    if (mysqli_num_rows(mysqli_query($con,"SELECT userName FROM user WHERE userName='$username'")) > 0){
        echo 'Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href="javascript: history.go(-1)">Trở lại</a> sau... <span id="time"></span>';
        echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
        exit;
    }
    if (mysqli_num_rows(mysqli_query($con,"SELECT email FROM user WHERE email='$email'")) > 0)
    {
        echo 'Email này đã có người dùng. Vui lòng chọn Email khác. <a href="javascript: history.go(-1)">Trở lại</a> sau... <span id="time"></span>';
        echo '<script src="../js/demnguoc.js" charset="utf-8"></script>';
        exit;
    }

    function generate_token() {
        return md5(microtime().mt_rand());
    }

    $options = [
        'salt' => generate_token(),
        'cost' => 12
    ];
    $hash = password_hash($password, PASSWORD_DEFAULT, $options);

    @$addmember = mysqli_query($con,"
    INSERT INTO user(username, PASSWORD, email)
    VALUE
        (
            '{$username}',
            '{$hash}',
            '{$email}'
        )
    ");
      echo "Quá trình đăng ký thành công.<a href='../index.php'>Về trang chủ</a>";
       
