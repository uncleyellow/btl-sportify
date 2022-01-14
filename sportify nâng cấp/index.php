<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhạc Online</title>
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fullwidth" style="padding-top:2%;">
        <?php
        session_start();
        include('./php/header.php');
        ?>
        <div class="text-md-left mt-5">
                    <h4 style="color: #282828;">
                        TẬP DÀNH CHO BẠN
                    </h4>
        </div>
        <hr>
        <div class="row" id="listchude">
