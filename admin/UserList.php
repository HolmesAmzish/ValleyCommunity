<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>用户列表-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            bottom: 0;
            width: 280px;
            background-color: #f8f9fa; /* 侧边栏背景色 */
            padding: 20px; /* 侧边栏内边距 */
        }
        .fs-4 {
            margin-left: 10px;
        }
        .container-fluid {
            margin-left: 280px; /* 距离侧边栏的距离 */
            padding-left: 20px;
        }
    </style>
</head>
<body>
    <?php
    if (!isset($_SESSION['admin_name'])) {
        $login_error = "未知管理员";
        header("location:index.php?msg=$login_error");
        exit;
    }

    // 数据库查询
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();
    $sql = "SELECT * FROM users";
    $result = $conn->query($sql);
    ?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <h2 class="mt-4">用户列表</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>用户ID</th>
                            <th>用户名</th>
                            <th>邮箱</th>
                            <th>电话号码</th>
                            <th>性别</th>
                            <th>省份</th>
                            <th>城市</th>
                            <th>注册时间</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        // 遍历数据库查询结果，将用户数据输出到表格中
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo "<td>{$row['user_id']}</td>";
                            echo "<td>{$row['username']}</td>";
                            echo "<td>{$row['email']}</td>";
                            echo "<td>{$row['phone_number']}</td>";
                            echo "<td>{$row['gender']}</td>";
                            echo "<td>{$row['province']}</td>";
                            echo "<td>{$row['city']}</td>";
                            echo "<td>{$row['created_at']}</td>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
