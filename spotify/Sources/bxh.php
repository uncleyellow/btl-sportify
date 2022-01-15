<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album</title>
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fullwidth">
        <?php
        session_start();
        include('./php/header.php');
        ?>
        <main class="col-md-11 m-auto">
            <div class="left col-md-8 float-left" Style="MAX-WIDTH: 11129PX;">
                <div class="text-md-left mt-5">
                    <h3>BẢNG XẾP HẠNG</h3>
                </div>
                <hr>
                <div class="list-group">
                    <ul id="listbaihat" class="p-0" style="list-style:none;">
                        <li><a href="./playnhac.php?id=8"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/ckp.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold" style="color:#b3b3b3">Ngắm hoa lệ rơi</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Châu khải phong</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=12"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/20229817.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Thằng điên</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Justa Tee</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=12"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/22247057.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Khu tao sống</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Karic</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=3"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/dl.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Thu cuối</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">MR.T</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=4"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/anh16.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Lạc trôi</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Sơn tùng MTP </span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=6"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/anh16.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Buông Đôi Tay Nhau Ra</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Sơn Tùng M-TP</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=7"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/anh16.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Âm Thầm Bên Em</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Sơn tùng MTP</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=8"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/anh16.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Chắc Ai Đó Sẽ Về</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Sơn tùng MTP</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=9"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/140354.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Dưới Những Cơn Mưa</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Mr.Siro</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=17"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/a3.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Còn gì đau hơn chữ đã từng</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Quân AP</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=12"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/anh172.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Chiếc xe màu xanh</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">wowy</span>
                                    </span>
                                </div>
                            </a></li>
                        <li><a href="./playnhac.php?id=12"
                                class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                                <span>
                                    <img class="float-left mr-2" src="./image/167.jpg" width="50px">
                                </span>
                                <div class="item_title font-weight-bold"style="color:#b3b3b3">Mãi Mãi Bên Nhau</div>
                                <div class="box_items">

                                    <span>
                                        <span style="font-size:13px;color:#b3b3b3">Noo Phước Thịnh</span>
                                    </span>
                                </div>
                            </a></li>
                    </ul>
                </div>
            </div>
            <?php
        include('./php/footer.php');
        ?>
</body>
</html>