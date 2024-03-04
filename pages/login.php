<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>登录-Valley</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <style>
        .centered-form {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            padding: 20px; 
        }
        .form-group {
            margin-bottom: 15px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
        .card {
            max-width: 400px;
            width: 100%;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .btn-cancel {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<div class="centered-form">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">用户登录</h4>
            <form class="profile-form" method="post" action="/scripts/doLogin.php">
                <!-- 显示提示信息 -->
                <?php if (isset($_GET['msg'])) { ?>
                    <div class="alert alert-dismissible fade show" role="alert">
                        <?php echo $_GET['msg']; ?>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                <?php } ?>
                <div class="form-group">
                    <label for="username">用户名</label>
                    <input type="text" class="form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password">密码</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>

                <button type="submit" class="btn btn-primary mr-2">提交</button>
                <button class="btn btn-light" type="reset">重置</button>
                <div style="height: 10px;"></div>
                <p>没有账号？<a href="register.php">注册</a></p>
            </form>
        </div>
    </div>
</div>
</body>
<script src="/assets/js/bootstrap.min.js"></script>
</html>
