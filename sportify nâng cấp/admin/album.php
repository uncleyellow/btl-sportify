<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trang Quản Trị Album</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap4.css" rel="stylesheet">
</head>
    
    <body>
    <?php
        session_start();
        include('header.php');
    ?>
    <main class="col-md-10 m-auto">
    <div class="mt-3 mb-2 text-center"><a href="./themalbum.php" class="btn btn-primary">Thêm album</a></div>
    <div class="card mb-3 mt-3">
<div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên album</th>
                            <th>Sửa</th>
                            <th>Xoá</th>
                        </tr>
                    </thead>
 <tfoot>
                        <tr>
                            <th>STT</th>
                            <th>Tên album</th>
                            <th>Sửa</th>
                            <th>Xoá</th>
                        </tr>
                    </tfoot>
                    <tbody>
