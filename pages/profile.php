<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户详情</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* 自定义样式 */
    </style>
</head>
<body>

    <?php
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();

    $user_id = $_GET['id'];

    // 查询用户信息
    $sql = "SELECT * FROM users WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $user_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc())
    ?>

    <!-- Bootstrap导航栏 -->
    <?php include('../includes/header.php'); ?>

    <div class="container mt-5">
        <div class="card shadow-sm">
            <div class="row no-gutters">
                <!-- 主要内容区域 -->
                <div class="col-md-8">
                    <div class="card-body">
                        <!-- 用户详细信息不变... -->
                    </div>
                </div>

                <!-- 侧栏区域 -->
                <div class="col-md-4">
                    <div class="card-body bg-light p-3">
                        <h6 class="card-title">用户统计信息</h6>
                        <ul class="list-unstyled">
                            <li><strong>注册日期:</strong> <?php echo date('Y-m-d', strtotime($row['created_at'])); ?></li>
                            <li><strong>发帖数量:</strong> <?php echo getPostCountByUserId($row['user_id']); ?></li>
                            <li><strong>评论数量:</strong> <?php echo getCommentCountByUserId($row['user_id']); ?></li>
                            <!-- 其他统计信息 -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    $stmt->close();
    $conn->close();
    include("../includes/footer.html"); 
    ?>

    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>