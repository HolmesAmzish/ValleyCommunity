<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->
    <style>
        body {
            color: #fff; /* 设置文本颜色为白色 */
            background-color: #000; /* 设置背景颜色为黑色 */
        }
        .card {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .profile-form {
            background-color: #000; /* 设置背景颜色为黑色 */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
        }
        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form textarea {
            color: #000; /* 设置文本颜色为白色 */
            background-color: #fff; /* 设置背景颜色为黑色 */
            border: 1px solid #fff; /* 设置边框颜色为白色 */
        }
        .list-group-item {
            color: #000 !important; /* 设置列表项文本颜色为白色 */
            background-color: #fff !important; /* 设置列表项背景颜色为黑色 */
            border-color: #000 !important; /* 设置列表项边框颜色为白色 */
        }
        .list-group-item:hover {
            background-color: #f0f8ff !important;
        }
    </style>
</head>
<body>
    <?php 
    include("../includes/header.php");
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();
    $sql = "SELECT * FROM posts ORDER BY creation_date DESC LIMIT 3";
    $result = $conn->query($sql);
    ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>欢迎来到Valley社区</h2><br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fugit blanditiis, nam officiis cupiditate dignissimos doloribus hic delectus ut architecto vero voluptates molestiae ratione ab fugiat assumenda nobis molestias magni!</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quibusdam voluptatem aliquam ad nam blanditiis enim, libero nostrum vero, ut reiciendis est, cum quaerat ab voluptate esse quisquam. Laborum, necessitatibus.</p>

                <!-- 最新讨论列表 -->
                <h3 class="mt-5">最新板块</h3>
                <div class="list-group mt-3">
                    <?php
                    require("../scripts/timespan.php");
                    while ($row = $result->fetch_assoc()) {
                    $time_span = time_span($row['creation_date']);
                    ?>
                    <a href="post_single.php?id=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1"><?php echo $row['title']; ?></h5>
                            <small><?php echo $time_span ?></small>
                        </div>
                        <p class="mb-1"><?php echo (strlen($row['content']) > 100) ? substr($row['content'], 0, 100) . '...' : $row['content']; ?></p>
                        <small>By <?php echo $row['author']; ?></small>
                    </a>
                    <?php } ?>
                </div>
            </div>
            <div class="col-md-4">
                <!-- 侧边栏内容 -->
                <h3 class="mt-5">侧边栏</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">About Us</h5>
                        <p class="card-text">Learn more about our community forum and its mission.</p>
                        <a href="/pages/about.php" class="btn btn-primary">Read More</a>
                    </div>
                </div>
                <!-- 其他侧边栏内容 -->
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
</body>
</html>
