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
        // 包含数据库连接文件
        include("../includes/db_connect.php");

        // 查询最新的帖子信息
        $query = "SELECT * FROM posts ORDER BY creation_date DESC LIMIT 3";
        $result = mysqli_query($conn, $query);

        // 输出查询结果
        if(mysqli_num_rows($result) > 0) {
            echo '<div class="container mt-5">';
            echo '<div class="row">';
            echo '<div class="col-md-8">';
            echo '<h2>欢迎来到Valley社区</h2><br>';
            echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti fugit blanditiis, nam officiis cupiditate dignissimos doloribus hic delectus ut architecto vero voluptates molestiae ratione ab fugiat assumenda nobis molestias magni!</p>';
            echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quibusdam voluptatem aliquam ad nam blanditiis enim, libero nostrum vero, ut reiciendis est, cum quaerat ab voluptate esse quisquam. Laborum, necessitatibus.</p>';

            echo '<!-- 最新讨论列表 -->';
            echo '<h3 class="mt-5">最新板块</h3>';
            echo '<div class="list-group mt-3">';
            
            // 循环输出帖子信息
            while($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#" class="list-group-item list-group-item-action">';
                echo '<div class="d-flex w-100 justify-content-between">';
                echo '<h5 class="mb-1">' . $row['title'] . '</h5>';
                echo '<small>' . $row['creation_date'] . '</small>';
                echo '</div>';
                echo '<p class="mb-1">' . $row['content'] . '</p>';
                echo '<small>By ' . $row['author'] . '</small>';
                echo '</a>';
            }

            echo '</div>';
            echo '</div>';
            echo '<div class="col-md-4">';
            echo '<!-- 侧边栏内容 -->';
            echo '<h3 class="mt-5">侧边栏</h3>';
            echo '<div class="card mt-3">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">About Us</h5>';
            echo '<p class="card-text">Learn more about our community forum and its mission.</p>';
            echo '<a href="/pages/about.php" class="btn btn-primary">Read More</a>';
            echo '</div>';
            echo '</div>';
            echo '<!-- 其他侧边栏内容 -->';
            echo '</div>';
            echo '</div>';
            echo '</div>';
        } else {
            echo "No posts found.";
        }

        // 关闭数据库连接
        mysqli_close($conn);
    ?>
    <?php include("../includes/footer.html"); ?>
</body>
</html>
