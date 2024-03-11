<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>主页-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->
    <style>
        .card {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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
                <p>尊敬的社区成员，</p>
                <p>欢迎您加入Valley社区，一个致力于促进深度交流、知识共享与协同创新的在线平台。在此，我们秉承着尊重、开放和互助的理念，构筑了一个集多元化思考、丰富资源和生动实践于一体的互动空间。</p>
                <p>在Valley社区中，我们珍视每一位参与者所带来的独特价值与见解，坚信通过真诚且深入的探讨，能够激发集体智慧，推动共同进步。本社区不断努力提供更优质的交流环境与服务体验，旨在让每个用户都能在获取宝贵信息的同时，积极贡献自身所长，参与并引领各类议题讨论。</p>
                <p>此次更新，标志着我们对构建高质量社区内容与高效互动机制的决心，力求使Valley社区成为广大成员寻求答案、分享洞见、成就梦想的理想之地。敬请悉知，原公告内容已据此进行修订，期待您在这一崭新的篇章中，与Valley社区共同成长，携手书写精彩纷呈的未来。</p>
                

                <!-- 最新讨论列表 -->
                <h3 class="mt-5">最新板块</h3>
                <div class="list-group mt-3">
                    <?php
                    require("../scripts/timespan.php");
                    while ($row = $result->fetch_assoc()) {
                    $time_span = time_span($row['creation_date']);
                    ?>
                    <a href="post_single.php?pid=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action">
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
            <!-- 侧边 -->
            <h3 class="mt-5">侧栏</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">树洞</h5>
                        <p class="card-text">分享个人心得、疑惑或情绪体验。通过此功能，用户可匿名发表内容，获得来自社区的理解与支持。</p>
                        <a href="/pages/echo.php" class="btn btn-primary">前往</a>
                    </div>
                </div>

                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">关于我们</h5>
                        <p class="card-text">了解更多信息。</p>
                        <a href="/pages/about.php" class="btn btn-primary">查看</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
</body>
</html>
