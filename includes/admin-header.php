<?php
session_start();

if (!isset($_SESSION['admin_name'])) {
    header("location:../admin/index.php?msg=未知管理员");
    exit;
}
?>
<style>
    body {
        padding-top: 56xp;
    }
    li {
        transition: background-color 0.3s ease;
    }
    li:hover {
        background-color: darkblue;
    }
</style>

<nav class="navbar navbar-expand-md bg-primary navbar-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand text-white" href="dashboard.php">Valley - 管理员面板</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  text-white" href="UserList.php">用户列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="PostList.php">文章列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="CommentList.php">评论列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="echoList.php">树洞列表</a>
                </li>
            </ul>
            <button type="button" class="btn btn-outline-light ms-2" onclick="window.location.href='../scripts/logout.php'">登出</button>
        </div>
    </div>
</nav>