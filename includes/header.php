<?php
session_start();
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $welcomeMessage = "您好，$username！";
  $displayButtons = 'style="display: none;"';
} else {
  $welcomeMessage = "";
  $displayButtons = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
  .bi {
    vertical-align: -.125em;
    fill: currentColor;
  }
  .zh {
    font-weight: bolder;
    font-size: larger;
  }
</style>
</head>
<body>
<header class="container d-flex flex-wrap align-items-center justify-content-between py-3 mb-4 border-bottom">
  <div class="col-md-3 mb-2 mb-md-0">
    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
      <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
    </a>
  </div>
  <ul class="nav zh">
    <li><a href="#" class="nav-link px-2 link-secondary">主页</a></li>
    <li><a href="#" class="nav-link px-2">社区</a></li>
    <li><a href="#" class="nav-link px-2">关于</a></li>
  </ul>
  <div class="col-md-3 text-end zh">
    <?php if($welcomeMessage): ?>
        <span><?php echo $welcomeMessage; ?></span>
        <button type="button" class="btn btn-outline-primary ms-2">登出</button>
    <?php else: ?>
      <button type="button" class="btn btn-outline-primary me-2" <?php echo $displayButtons; ?> onclick="window.location.href='/pages/login.html';">登录</button>
        <button type="button" class="btn btn-primary" <?php echo $displayButtons; ?>>注册</button>
    <?php endif; ?>
  </div>
</header>
<script src="https://cdn.jsdelivr.net/npm/@docsearch/css@3"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
