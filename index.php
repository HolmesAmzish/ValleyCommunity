<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>网站主页</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- 自定义样式 -->
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #343a40 !important;
    }
    .jumbotron {
      background-image: url('https://via.placeholder.com/1500x500') !important;
      background-size: cover;
      color: #fff;
    }
  </style>
</head>
<body>

<?php include("assets/header.html");?>

<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-4">Valley</h1>
    <p class="lead">江苏大学同性交友平台</p>
  </div>
</div>

<div class="container">
  <h2 class="text-center">帖子列表</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">帖子标题</h5>
          <p class="card-text">帖子内容简介。</p>
          <a href="#" class="btn btn-primary">查看详情</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">帖子标题</h5>
          <p class="card-text">帖子内容简介。</p>
          <a href="#" class="btn btn-primary">查看详情</a>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card mb-4">
        <img src="https://via.placeholder.com/300" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">帖子标题</h5>
          <p class="card-text">帖子内容简介。</p>
          <a href="#" class="btn btn-primary">查看详情</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("assets/footer.html");?>

<!-- Bootstrap JavaScript 和 jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
