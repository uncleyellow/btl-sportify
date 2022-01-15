<link rel="stylesheet" href="./css/header.css">
<header style="position: fixed;top:0;width:100%;z-index:1;">
    <nav class="navbar navbar-default navbar-expand-lg navbar-light">
        <div class="navbar-header d-flex col">
            <a class="navbar-brand" href="../index.php"><span><img class="mr-2" src="../image/logo.png" width="150px"></span></a>
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
                <span class="navbar-toggler-icon"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
            <ul class="nav navbar-nav">
                <li class="nav-item mr-5"><a href="./user.php" class="nav-link"><b>Tài khoản</b></a></li>
                <li class="nav-item mr-5"><a href="./baihat.php" class="nav-link"><b>Bài hát</b></a></li>
                <li class="nav-item mr-5"><a href="./album.php" class="nav-link"><b>Album</b></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right ml-auto mr-3">
                    <?php
                        echo '<li class="nav-item">
                         <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Chào,&nbsp;'.$_SESSION['userName'].'</a>
                        <ul class="dropdown-menu dropdown-menu-right">
                          <li><a href="./admin.php" class="dropdown-item">Trang quản trị</a></li>
                          <li><a href="../php/xulydangxuat.php" class="dropdown-item">Đăng Xuất</a></li>
                        </ul>
                    </li>';
                    ?>
            </ul>
        </div>
    </nav>

</header>
