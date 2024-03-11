<?php
session_start();
if(isset($_SESSION['username'])) {
  $username = $_SESSION['username'];
  $user_id = $_SESSION['user_id'];
  $displayButtons = 'style="display: none;"';
} else {
  $displayButtons = '';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
<style>
  body {
      background-color: #fff;
      color: #000;
  }  .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
  }  @media (min-width: 768px) {
      .bd-placeholder-img-lg {
          font-size: 3.5rem;
      }
  }
  .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
  }  .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
  }
  .container-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
  }  .col-md-3.text-end.zh {
      text-align: center;
      margin-top: 10px;
  }
  .footer-links a {
      color: #000;
      text-decoration: none;
  }
  </style>
</head>
<body>
<header class="container-header container py-3 mb-4 border-bottom">
  <div class="col-md-3 mb-2 mb-md-0">
    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
      <svg class="bi" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
    </a>
  </div>
  <ul class="nav zh">
    <li><a href="/pages/home.php" class="nav-link px-3 link-secondary">主页</a></li>
    <li><a href="/pages/community.php" class="nav-link px-3">社区</a></li>
    <li><a href="/pages/echo.php" class="nav-link px-3">树洞</a></li>
  </ul>
  <div class="col-md-3 text-end zh">
    <?php if(isset($username)): ?>
        <span><?php echo "你好，<a href='/pages/profile.php?uid=$user_id'>$username</a>"; ?></span>
        <button type="button" class="btn btn-outline-primary ms-2" onclick="window.location.href='../scripts/logout.php'">登出</button>
    <?php else: ?>
      <button type="button" class="btn btn-outline-primary me-2" <?php echo $displayButtons; ?> onclick="window.location.href='/pages/login.php';">登录</button>
      <button type="button" class="btn btn-primary mr-2" <?php echo $displayButtons; ?> onclick="window.location.href='/pages/register.php';">注册</button>
    <?php endif; ?>
  </div>
</header>
</body>
</html>
