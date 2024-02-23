<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社区</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->

    <style>
        body {
            color: #000; 
            background-color: #fff; 
        }
        .form-label {
            color: #fff;
        }
        .form-select {
            color: #000;
            background-color: #fff; /* 修改背景颜色为白色 */
            border: 1px solid #fff;
        }
        .list-group-item {
            color: #000 !important;
            background-color: #fff !important;
            border-color: #000 !important;
        }
        .list-group-item:hover {
            background-color: #f0f8ff !important;
        }
    </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <h2>社区</h2>
                <!-- 筛选选项栏 -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="provinceSelect" class="form-label">选择省份</label>
                        <select class="form-select" id="provinceSelect">
                            <option selected>选择省份</option>
                            <option>江苏</option>
                            <option>安徽</option>
                            <option>浙江</option>
                            <!-- 其他省份选项 -->
                        </select>
                    </div>
                </div>

                <!-- 帖子列表 -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <ul class="list-group">
                            <!-- 示例帖子 -->
                            <a href="#" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1">Discussion Title 1</h5>
                                    <small>5 days ago</small>
                                </div>
                                <p class="mb-1">Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.</p>
                                <small>By User456</small>
                            </a>
                            <!-- 其他帖子 -->
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- 侧栏 -->
                <h3 class="mt-5">侧栏</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">发布帖子</h5>
                        <p class="card-text">创建新的讨论。</p>
                        <a href="/pages/post.php" class="btn btn-primary">发布</a>
                    </div>
                </div>
                <!-- 其他侧栏内容 -->
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
</body>
</html>
