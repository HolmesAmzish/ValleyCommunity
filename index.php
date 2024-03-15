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
        <p class="col-md-8 fs-4">欢迎来到山谷社区！这是我们为讨论和交流而组建的基本网站。点击“前往主页”按钮，立即探索更多丰富内容！我们不仅欢迎讨论计算机技术问题，也欢迎其他主题的讨论！</p>
        <a href="/pages/home.php" class="btn btn-primary btn-lg">前往主页</a>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <div class="h-100 p-5 rounded-3 border">
          <h2>加入社区</h2>
          <p>想要成为山谷社区的一员，与广大志同道合的朋友分享交流？只需轻点“注册账户”，即可开启您的精彩社区探索之旅。在这里，您可以畅所欲言、结识新友，共同构建一个充满活力和温暖的互动平台。</p>
          <a href="/pages/register.php" class="btn btn-primary">注册账户</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="h-100 p-5 rounded-3">
          <h2>查看树洞功能</h2>
          <p>探索我们的特色功能——树洞板块，这里是一个轻松、私密的空间，用于发布和查看匿名留言。</p>
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
