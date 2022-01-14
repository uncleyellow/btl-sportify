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
            <?php
                require('./php/connect.php');
                $sql = "SELECT * FROM chude";
                $result = mysqli_query($con,$sql);
                while($row = mysqli_fetch_assoc($result)){
                $tenchude = $row['tenchude'];
                $image=$row['image'];
                  echo '<div class="col-lg-3 col-md-4 img-hover">
                    <a href="p_baihat.php?id='.$row['id'] .'" class="d-block mb-4 h-100" style="text-decoration: none;">
                    <div><img class="img-fluid img-thumbnail " src='.$image.' alt=""></div>
                    </a>
                </div>';
                }
              mysqli_close($con);
                    ?>
                </div>
                <div class="text-md-left mt-3">
                    <h4 style="color: #282828;">
                        TUYỂN TẬP HÀNG ĐẦU CỦA BẠN
                    </h4>
                </div>
