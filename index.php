<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>主页</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background-color: #343a40;
    }
    .jumbotron {
      height: 520px;
      background-image: url('');
      background-size: 100%;
      background-position: 50% 65%;
      color: #000;
    }
  </style>
</head>
<body>

<?php require("includes/header.php");?>

<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <h1 class="display-3">Valley</h1>
    <p class="lead">标记</p>
  </div>
</div>

<?php include("includes/footer.html");?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
