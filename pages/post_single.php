<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>查看帖子</title>
    <!-- 引入Bootstrap框架 -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <!-- 自定义样式 -->
    <style>
        .card {
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php
    include("../includes/header.php");
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();
    $post_id = $_GET['id'];
    $sql = "SELECT * FROM posts WHERE post_id=$post_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div class="container mt-5">
        <div class="row">
            <!-- 侧边栏 -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">信息</h5>
                        <p class="card-text">作者：<?php echo $row['author']; ?></p>
                        <p class="card-text">发布日期：<?php echo $row['creation_date']; ?></p>
                    </div>
                </div>
            </div>
            <!-- 主栏 -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['title']; ?></h5>
                        <p class="card-text"><?php echo $row['content']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>

    <!-- 引入Bootstrap的JavaScript库 -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
