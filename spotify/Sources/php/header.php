<link rel="stylesheet" href="./css/header.css">
<link rel="stylesheet" href="./font/fontawesome-free-5.15.4-web/fontawesome-free-5.15.4-web/css/all.min.css">
<header style="position: fixed; width:100%;z-index:1;top:0;">
  <nav class="navbar navbar-default navbar-expand-lg navbar-light">
    <div class="navbar-header d-flex col">
      <a class="navbar-brand" href="./index.php">
        <span>
          <img class="mr-2" src="./image/logo.png" width="150px">
        </span>
      </a>
      <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle navbar-toggler ml-auto">
        <span class="navbar-toggler-icon"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <div id="navbarCollapse" class="collapse navbar-collapse justify-content-start">
      <ul class="nav navbar-nav" style="position: relative;right:5%;">
        <li class="nav-item"><a href="./index.php" class="nav-link">
          <b class="home" style="color: #b3b3b3; font-size:1.4rem;">
            Trang chủ
          </b>
        </a>
      </li>
        <li class="timkiemnav nav-item dropdown">
          <a class="nav-link" href="bxh.php">
            <b class="caret" style="color: #b3b3b3;font-size:1.4rem;">
              BXH
            </b>
          </a>
          </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="./album.php">
            <b class="caret" style="color: #b3b3b3;font-size:1.4rem;">
              Album
            </b>
          </a>
        </li>
      </ul>
      <form id="timkiem" action="./timkiem.php" class="navbar-form form-inline" method="post">
        <div class="input-group search-box"style="width:600px;">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" name="keyword" type="text" placeholder="Tìm kiếm..." aria-label="Tìm kiếm..." required="required">
            <button class="btn btn-outline-success my-2 my-sm-0" name="ok" type="submit"style="position:relative;right:45px;background-color:transparent;border-radius:10px;width:40px;height:39px;border:none;">
                <i class="search-headder fas fa-search"></i>
            </button>
          </form> 
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right ml-auto">

        <?php
            if(isset($_SESSION['userName']))
                    {
                      if($_SESSION['level']==2){
                        echo '<li class="nav-item">
                                <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">
                                Chào,&nbsp;'.$_SESSION['userName'].'
                                </a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="./admin/admin.php" class="dropdown-item">Trang quản trị</a></li>
                                  <li><a href="./php/xulydangxuat.php" class="dropdown-item">Đăng Xuất</a></li>
                                </ul>
                            </li>';
                      }else{
                        echo '<li class="nav-item">
                            <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle">Chào,&nbsp;'.$_SESSION['userName'].'</a>
                            <ul class="dropdown-menu dropdown-menu-right">
                              <li><a href="./php/xulydangxuat.php" class="dropdown-item">Đăng Xuất</a></li>
                            </ul>
                        </li>';
                      }
                    }
                    else{
                        echo '<li class="nav-item">
                        <a data-toggle="dropdown" class="nav-link dropdown-toggle mt-1" href="#" style="color:#fff;background-color: #282828;border-radius:30px;font-weight:700; font-size:1.4em;" >Đăng nhập</a>
                        <ul class="dropdown-menu form-wrapper">
                            <li>
                                <form action="./php/xulydangnhap.php" method="post">
                                    <div class="form-group">
                                        <input type="text" name="txtlogin" class="form-control" placeholder="Tên đăng nhập" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="txtpasswordlogin" class="form-control" placeholder="Mật khẩu" required="required">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block" value="Đăng nhập">
                                </form>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" data-toggle="dropdown" class="btn btn-primary dropdown-toggle get-started-btn" style="background-color: #fff;font-weight:700;color:black;border-radius:30px; font-size:1.4em;">Đăng
                            ký</a>
                        <ul class="dropdown-menu form-wrapper">
                            <li>
                            <form action="./php/dangky.php" method="post">
                                    <p class="hint-text">Điền thông tin để đăng ký!</p>
                                    <div class="form-group">
                                        <input type="text" name="txtUsername" class="form-control" placeholder="Tên đăng nhập" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="txtPassword" class="form-control" placeholder="Mật khẩu" required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="txtPasswordCF" class="form-control" placeholder="Xác nhân mật khẩu"
                                            required="required">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" name="txtEmail" class="form-control" placeholder="Email"
                                            required="required">
                                    </div>
                                    <input type="submit" class="btn btn-primary btn-block" value="Đăng ký">
                                </form>
                            </li>
                        </ul>
                    </li>';

                    };
            ?>

      </ul>
    </div>
  </nav>

</header>
<script type="text/javascript">
  $(document).on("click", ".navbar-right .dropdown-menu", function(e) {
    e.stopPropagation();
  });
</script>
