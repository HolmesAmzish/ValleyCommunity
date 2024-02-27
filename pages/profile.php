<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>资料-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->
    <style>
        .profile-form {
            background-color: #fff; /* 设置背景颜色为白色 */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* 添加阴影效果 */
        }
        .profile-form input[type="text"],
        .profile-form input[type="email"],
        .profile-form textarea {
            color: #000; /* 设置文本颜色为黑色 */
            background-color: #fff; /* 设置背景颜色为白色 */
            border: 1px solid #ced4da; /* 添加边框样式 */
        }
    </style>
</head>
<body>
    <?php include("../includes/header.php"); ?>

    <div class="container mt-5">
        <h2>用户信息</h2>
        <div class="row mt-3">
            <div class="col-md-6">
                <form class="profile-form form-sample">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">用户ID</label>
                        <input type="text" class="form-control" id="UserID" value="UserID">
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">用户名</label>
                        <input type="text" class="form-control" id="username" value="username123" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">电子邮箱</label>
                        <input type="email" class="form-control" id="email" value="user@example.com" disabled>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <form class="profile-form form-sample">
                    <div class="mb-3">
                        <label for="username" class="form-label">用户名</label>
                        <input type="text" class="form-control" id="username" value="username123" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">电子邮箱</label>
                        <input type="email" class="form-control" id="email" value="user@example.com" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="fullname" class="form-label">昵称</label>
                        <input type="text" class="form-control" id="fullname" value="">
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">简介</label>
                        <textarea class="form-control" id="bio" rows="3">没有介绍...</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
</body>
</html>
