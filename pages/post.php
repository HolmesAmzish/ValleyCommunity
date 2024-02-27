<!DOCTYPE html>
<html>
<?php
if (isset($_SESSION['username'])) {
    header("community.php");
    $_SESSION['post_error'] = "你必须先登录";
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>发布帖子 - 网络社区论坛</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->
    <style>
        .post-form {
            background-color: #fff; /* 设置背景颜色为白色 */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
        }
        .post-form input[type="text"],
        .post-form textarea {
            color: #000; /* 设置文本颜色为黑色 */
            background-color: #fff; /* 设置背景颜色为白色 */
            border: 1px solid #ced4da; /* 添加边框样式 */
        }
    </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>

    <div class="container mt-5">
        <h2>发布新帖子</h2>
        <div class="row mt-3">
            <div class="col-md-8">
                <form class="post-form" action="../scripts/doPost.php" method="post">
                    <div class="mb-3">
                        <label for="postTitle" class="form-label">标题</label>
                        <input type="text" class="form-control" name="title" placeholder="输入帖子标题">
                    </div>
                    <div class="mb-3">
                        <label for="postContent" class="form-label">内容</label>
                        <textarea class="form-control" name="content" rows="5" placeholder="输入帖子内容"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">发布</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
</body>
</html>
