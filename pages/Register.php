<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centered Form with Bootstrap</title>
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
            <h4 class="card-title">用户注册</h4>
            <p class="card-description">基本信息</p>
            <form class="forms-sample" ation="doRegister.php" method="post">
                <div class="form-group">
                    <label for="exampleInputUsername1">用户名</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="username" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">邮箱</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">确认密码</label>
                    <input type="password" class="form-control" id="exampleInputConfirmPassword1" name="passwordConfirm" required>
                </div>
                <button type="submit" class="btn btn-primary mr-2">提交</button>
                <button class="btn btn-light" type="reset">重置</button>
                <div style="height: 10px;"></div>
                <p>已有账号？<a href="Login.php">登录</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
