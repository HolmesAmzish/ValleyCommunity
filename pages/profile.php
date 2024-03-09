<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户详情-Valley</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* 自定义样式 */
    </style>
</head>
<body>
<?php include('../includes/header.php'); ?>
<?php
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$username = $_GET['user'];

// 查询用户基本信息
$sql = "SELECT * FROM users WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
?>

<!-- Bootstrap导航栏 -->

<div class="container mt-5">
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h3 class="card-title"><?php echo htmlspecialchars($row['username']); ?> 详细信息</h3>

        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <ul class="list-unstyled">
                        <li><strong>邮箱:</strong> <?php echo htmlspecialchars($row['email']); ?></li>
                        <li><strong>电话号码:</strong> <?php echo htmlspecialchars($row['phone_number']); ?></li>
                        <li><strong>性别:</strong> <?php echo htmlspecialchars($row['gender']); ?></li>
                        <li><strong>所在地区:</strong> <?php echo htmlspecialchars($row['province']) . ' / ' . htmlspecialchars($row['city']); ?></li>
                        <li><strong>注册日期:</strong> <?php echo date('Y-m-d', strtotime($row['created_at'])); ?></li>
                    </ul>
                </div>
                <!-- 在这里可以添加用户个人简介（bio）显示区域 -->
                <div class="col-md-8">
                    <h5 class="card-subtitle mb-2">个人简介</h5>
                    <p><?php echo htmlspecialchars($row['bio']); ?></p>
                </div>            
                
            </div>
            <?php
            if ($_SESSION['username'] == $username) {
                echo "<a href='profileEdit.php' class='btn btn-light'>编辑</a>";
            }
            ?>
        </div>
    </div>

    <!-- 用户统计信息区域 -->
    <div class="card mt-4 shadow-sm">
        <div class="card-body bg-light p-3">
            <h6 class="card-title">用户统计信息</h6>
            <ul class="list-unstyled">
                <li><strong>发帖数量:</strong> <?php echo getPostCountByUserId($row['user_id']); ?></li>
                <li><strong>评论数量:</strong> <?php echo getCommentCountByUserId($row['user_id']); ?></li>
                <!-- 其他统计信息 -->
            </ul>
        </div>
    </div>
</div>

<?php
$stmt->close();
$conn->close();
}
include("../includes/footer.html"); 
?>

<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>