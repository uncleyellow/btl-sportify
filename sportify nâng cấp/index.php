<!DOCTYPE html>
<?php
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
	 header('Location: login.php');
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--link-->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/main.css">
    <!--Font-->
    <link rel="stylesheet" href="/font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
</head>

<body>
    <!--Begin Headder-->
    <div class="headder">
        <div class="headder-home">
            <a href="#" class="headder-logo">
                <i class="fab fa-spotify">
                    <div class="headder-logo-name">
                        Spotify
                    </div>
                </i>
            </a>
            <div class="headder-search">
                <input type="text" class="headder-search">
            </div>
            <!-- <button class="headder-btn headder-btn-active">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button class="headder-btn">
                <i class="fas fa-chevron-right"></i>
            </button> -->
        </div>
        <div class="headder-login">
            <a href="model/login.php" class="headder-btn-upgrade">
                <div class="headder-btn-upgrade-use">
                    Đăng Nhập
                </div>
            </a>
            <a href="model/register.php" class="headder-btn-upgrade">
                <div class="headder-btn-upgrade-use-login">
                    Đăng Ký
                </div>
            </a>
            <!-- <div class="headder-user">
                <img class="headder-user-img" src="img/avatar.jpg" alt="avatar">
                <div class="headder-user-name">
                    Dương Khánh
                </div>
                <div class="headder-user-option">
                    <i class="headder-user-icon fas fa-sort-down"></i>
                        <ul class="headder-user-menu">
                            <li class="headder-user-item">
                                <a href="#" class="headder-user-link">
                                    <div class="headder-user-use">
                                        Tài khoản
                                    </div>
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </li>
                            <li class="headder-user-item">
                                <a href="#" class="headder-user-link">
                                    <div class="headder-user-use">
                                        Hồ sơ
                                    </div> 
                                </a>
                            </li>
                            <li class="headder-user-item">
                                <a href="#" class="headder-user-link">
                                    <div class="headder-user-use">
                                        Nâng cấp lên premium
                                    </div>
                                    <i class="fas fa-external-link-alt"></i>
                                </a>
                            </li>
                            <li class="headder-user-item">
                                <a href="#" class="headder-user-link">
                                    <div class="headder-user-use">
                                        Đăng xuất
                                    </div> 
                                </a>
                            </li>
                        </ul>
                </div>
            </div> -->
        </div>
    </div>
    <!--End Headder-->


    <!--Begin Sidebar-->
    <div class="side-bar">
        <ul class="side-bar-menu">
            <li class="side-bar-item">
                <a href="#" class="side-bar-link">
                    <i class="side-bar-icon fas fa-home"></i>
                    <div class="side-bar-use">
                        Trang chủ
                    </div>
                </a>
            </li>
            <!-- <li class="side-bar-item">
                <a href="#" class="side-bar-link">
                    <i class="side-bar-icon fas fa-search"></i>
                    <div class="side-bar-use">
                        Tìm kiếm
                    </div>
                </a>
            </li> -->
            <li class="side-bar-item">
                <a href="#" class="side-bar-link">
                    <i class="side-bar-icon fas fa-book"></i>
                    <div class="side-bar-use">
                        Thư viện
                    </div>
                </a>
            </li>
            <li class="side-bar-item side-bar-item-plus-playlist">
                <a href="#" class="side-bar-link">
                    <i class="side-bar-icon fas fa-plus-square"></i>
                    <div class="side-bar-use">
                        Tạo playlist
                    </div>
                </a>
            </li>
            <li class="side-bar-item side-bar-item-plus-playlist">
                <a href="#" class="side-bar-link">
                    <i class="side-bar-icon fab fa-gratipay"></i>
                    <div class="side-bar-use">
                        Bài hát đã thích
                    </div>
                </a>
            </li>
            <li class="side-bar-item side-bar-item-like side-bar-item-plus-playlist-border">
                <a href="#" class="side-bar-link">
                    <div class="side-bar-use">
                        Like
                    </div>
                </a>
            </li>
            <li class="side-bar-item side-bar-item-option">
                <a href="https://www.spotify.com/vn-vi/download/windows/" class="side-bar-link">
                    <i class="side-bar-icon fas fa-arrow-circle-down"></i>
                    <div class="side-bar-use">
                        Cài đặt ứng dụng
                    </div>
                </a>
            </li>
        </ul>
    </div>
    <!--End Sidebar-->

    <!--Begin container-->
    <div class="container">
        <div class="container-headder">
            <h1>
                CHÀO BUỔI TỐI
            </h1>
        </div>
        <div class="container-playlist">
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
        </div>

        <div class="container-playlist">
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
            <a href="#" class="container-player">
                <img class="container-player-img" src="/img/Playlist/like.jpg" alt="">
                <div class="container-player-name">
                    Bài hát đã thích
                </div>
                <i class="container-player-icon fas fa-play-circle"></i>
            </a>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
        <div class="container-music">
            <div class="container-music-headder">
                <a href="#" class="container-music-theme">
                    Chương trình của bạn
                </a>
                <a href="#" class="container-music-all">
                    Xem tất cả
                </a>
            </div>
            <div class="container-showtime">
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
                <a href="#" class="container-item">
                    <img src="/img/Playlist/like.jpg" alt="" class="container-item-img">
                    <div class="container-item-music">
                        Bài hát
                    </div>
                    <div class="container-item-singer">
                        Đào Đức Huy
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!--End container-->

    <!--Begin footer-->
    <div class="footer">
     <a href="#" class="footer-play">
         <img src="/img/Playlist/like.jpg" alt="like" class="footer-play-img">
         <div class="footer-song">
             <div class="footer-song-playing">
                 Thế Giới ảo Tình Yêu Thật
             </div>
             <div class="footer-song-singer">
                 Đào Đức Huy
             </div>
         </div>
         
     </a>
    </div>
    <!--End footer-->
</body>

</html>