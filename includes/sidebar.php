<?php session_start(); ?>
<head>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            height: 100%;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 280px;
            background-color: #fff;
            padding: 20px;
        }
        .content {
            flex: 1;
            padding: 20px;
        }
        .dropdown {
            margin: 20px;
        }
    </style>
</head>
<div class="container">
    <div class="sidebar">
        <span class="fs-4">管理页面</span>
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active" aria-current="page">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                    主页
                </a>
            </li>
            <li>
                <a href="/admin/UserList.php" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                    用户列表
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                    帖子
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                    评论
                </a>
            </li>
            <li>
                <a href="#" class="nav-link link-body-emphasis">
                    <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                    管理员
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <strong><?php echo $_SESSION['admin_name'] ?></strong>
            </a>
            <ul class="dropdown-menu text-small shadow" style="">
                <li><a class="dropdown-item" href="#">设置</a></li>
                <li><a class="dropdown-item" href="#">账户</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">登出</a></li>
            </ul>
        </div>
    </div>
</div>
<script src="/assers/js/bootstrap.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
