<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>发布-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        .post-form {
            background-color: #fff; /* 设置背景颜色为白色 */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
        }
    </style>
</head>
<body>
    <?php include("../includes/header.php");
    if (!isset($_SESSION['username'])) {
        $post_error = "你必须先登录。";
        header("Location: community.php?msg=$post_error");
        exit;
    } ?>
    <div class="container mt-5">
        <?php if (isset($_GET['msg'])) { ?>
            <div class="alert alert-dismissible fade show" role="alert">
                <?php echo $_GET['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <h2>发布新帖子</h2>
        <div class="row">
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
                    <div class="mb-3">
                        <label for="post_tags" class="form-label">标签</label>
                        <input type="text" class="form-control" name="tags" placeholder="">
                    </div>
                    <button type="submit" class="btn btn-primary">发布</button>
                </form>
            </div>
            <div class="col-md-4">
                <div class="card mb-3 post-sidebar">
                    <div class="card-body">
                        <h5 class="card-title">添加相关标签</h5>
                        <p class="card-text">为您的帖子添加合适的标签，方便其他用户搜索和浏览。</p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <?php include("../includes/footer.html"); ?>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
