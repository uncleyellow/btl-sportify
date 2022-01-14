<!DOCTYPE html>
<html lang="en" style="width:100%;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Bài Hát</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fixbody.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <style>
        .nav-tabs .nav-link.active {
            background-color:#eee;
            border-bottom:#eee;
            font-weight: bold;
        }
</style>
</head>

<body>
    <div class="container-fullwidth" style="padding-top:5%;">
        <?php
        session_start();
        include('./php/header.php');
$keyword = $_POST['keyword'];
        ?>
        <main class="col-md-11 m-auto">
                <div class="text-md-left mt-3">
                    <h4>Kết quả tìm kiếm cho '<?php echo $keyword?>'</h4>
                <hr>
        <div class="tab-content bg-white rounded-bottom">
            <div id="home" class="container tab-pane active rounded-bottom" style="background:#eee"><br>
            <div class="list-group">
                <ul id="listbaihat" class="p-0" style="list-style:none;">
                <?php
                    require('./php/connect.php');
                    $sql = "SELECT * FROM v_baihat WHERE tenbaihat like '%$keyword%'";
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
