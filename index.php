<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>主页</title>
  <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
  <style>
    .border {
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
  </style>
</head>
<body>

<?php require("includes/header.php");?>

<main>
  <div class="container py-4">
    <div class="p-5 mb-4 rounded-3 border">
      <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Valley - 社区</h1>
        <p class="col-md-8 fs-4">Using a series of utilities, you can create this jumbotron, just like the one in previous versions of Bootstrap. Check out the examples below for how you can remix and restyle it to your liking.</p>
        <a href="/pages/home.php" class="btn btn-primary btn-lg">前往主页</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="h-100 p-5 rounded-3 border">
          <h2>加入社区</h2>
          <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
          <a href="/pages/register.php" class="btn btn-primary">注册账户</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 rounded-3">
          <h2>查看树洞功能</h2>
          <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both column's content for equal-height.</p>
          <a href="/pages/echo.php" class="btn btn-primary">前往树洞</a>
        </div>
      </div>
    </div>
  </div>
</main>
<?php include("includes/footer.html");?>

<script src="/assets/js/bootstrap.min.js"></script>

</body>
</html>
