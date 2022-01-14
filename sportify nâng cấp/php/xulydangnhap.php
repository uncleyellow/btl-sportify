<?php
    session_start();
    include('./connect.php');
    $userName = $_POST['txtlogin'] ;
    $passWord = $_POST['txtpasswordlogin'];
    $result = mysqli_query($con,"Select * from user where userName = '$userName'");
if (mysqli_num_rows($result)==1) {
      $row = mysqli_fetch_assoc($result);
      $hash = $row["passWord"];
      $_SESSION['level'] = $row['level'];
     if(password_verify($passWord, $hash))
        {
            $_SESSION['userName']=$userName;
            $_SESSION['id']=$row['id'];
            $_SESSION['avatar']=$row['avatar'];
            header("location:../index.php");
            exit();
        }
