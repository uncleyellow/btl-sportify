<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Album</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="./css/hover.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fixbody.css">
    <script src="./js/jquery.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container-fullwidth" style="padding-top:2%;">
        <?php
        session_start();
        include('./php/header.php');
        ?>

        <main class="col-md-11 m-auto">
                < class="text-md-left mt-5">
                <?php 
                    $id = $_GET["id"];
                    require('./php/connect.php');
                    $resultcd = mysqli_query($con,"SELECT tenalbum FROM album where id = '$id'");
                    $rowcd = mysqli_fetch_assoc($resultcd);
                    mysqli_close($con);
                    echo "<h3>Album $rowcd[tenalbum]</h3>";
                    ?>
                <hr>
                <div class="list-group">
                <ul id="listbaihat" class="p-0" style="list-style:none;">
                <?php
                    require('./php/connect.php');
                    $sql = "SELECT * FROM v_baihat where idalbum = '$id'" ;
                    $result = mysqli_query($con,$sql);
                    while($row = mysqli_fetch_assoc($result)){
                        $tenbaihat = $row['tenbaihat'];
                        $anh = $row['image'];
                        $casi = $row['tencasi'];
                        $luotnghe = $row['luotnghe'];
                        echo '<li><a href="./playnhac.php?id='.$row['id'].'" class="list-group-item list-group-item-action flex-column align-items-start mb-2">
                            <span>
                                <img class="float-left mr-2" src="./'.$anh.'" width="50px">
                            </span>
                            <div class="item_title font-weight-bold">'.$tenbaihat.'</div>
                            <div class="box_items">
                                <span class="item_span mr-5">
                                    <img src="./image/views.png" width="18px">
                                    <span style="font-size:13px;">'.$luotnghe.'</span>
                                </span>
                                <span>
                                    <span style="font-size:13px;">'.$casi.'</span>
                                </span>
                            </div>
                        </a></li>';
                    }
                    mysqli_close($con);
                ?>
                </ul>
                </div>
            </div>
            <div style="clear: both"></div>
        </main>
        <?php
        include('./php/footer.php');
        ?>
    </div>
</body>

</html>
