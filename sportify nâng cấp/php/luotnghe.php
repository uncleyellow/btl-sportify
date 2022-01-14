<?php
    $idbaihat=$_POST["idbaihat"];
    include('./connect.php');
    $update=mysqli_query($con,"UPDATE baihat set luotnghe=luotnghe+1 where id='$idbaihat'");