<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Nghe nhạc</title>
	<link rel="stylesheet" href="./css/AudioPlayer.css">
	<link rel="stylesheet" href="./css/styleplayer.css">
	<link rel="stylesheet" href="./css/hover.css">
	<link rel="stylesheet" href="./css/bootstrap.min.css">
	<link rel="stylesheet" href="./css/fixplayer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script src="./js/jquery.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container-fullwidth" style="padding-top:3%;">
		<?php
        session_start();
		include('./php/header.php');
		$id=$_GET['id'];
        ?>
		<main class="col-md-11 m-auto">
				<div id='player' class="position-relative h-100">
				</div>
			<div class="text-md-left mt-5">
			</div>
			<hr>
			<div class="list-group">
			<ul id="listbaihat" class="p-0" style="list-style:none;">
			<?php
			require('./php/connect.php');
			$sql = "SELECT * FROM v_baihat ORDER BY likes DESC";
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
		</div>
	<script src="./js/AudioPlayer.js"></script>
	<?php
		include('./php/connect.php');
		$sql1=mysqli_query($con,"select*from v_baihat where id='$id'");
		$rown1=mysqli_fetch_assoc($sql1);
		$sql=mysqli_query($con,"SELECT * FROM v_baihat WHERE idalbum = '$rown1[idalbum]' AND id != '$id' ORDER BY ngaydang DESC LIMIT 20");
	echo "<script>
        var iconImage = null;
        AP.init({
            container:'#player',
            volume   : 0.7,
            autoPlay : false,
            notification: false,
			playList: [";
	echo "{'icon': iconImage, 'title': '$rown1[tenbaihat]', 'file': './$rown1[path]' ,'idbh': '$rown1[id]'},";
		while($rown=mysqli_fetch_assoc($sql)){
			echo "
				{'icon': iconImage, 'title': '$rown[tenbaihat]', 'file': './$rown[path]' ,'idbh': '$rown[id]'},";
		}
	echo "]
        });
	</script>";

