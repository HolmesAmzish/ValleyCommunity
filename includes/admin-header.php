<?php
session_start();
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link  text-white" href="UserList.php">用户列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="postlist.php">文章列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  text-white" href="commentlist.php">评论列表</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="echolist.php">活动列表</a>
                </li>
            </ul>
        </div>
    </div>
</nav>