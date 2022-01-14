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
