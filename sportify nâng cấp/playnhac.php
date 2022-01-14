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
