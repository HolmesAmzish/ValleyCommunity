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
            <h4 class="card-title">用户登录</h4>
            <form class="forms-sample" method="post" action="doLogin.php">
                <div class="form-group">
                    <label for="exampleInputUsername1">用户名</label>
                    <input type="text" class="form-control" id="exampleInputUsername1" name="username">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <button type="submit" class="btn btn-primary mr-2">提交</button>
                <button class="btn btn-light" type="reset">重置</button>
                <div style="height: 10px;"></div>
                <p>没有账号？<a href="Register.php">注册</a></p>
            </form>
        </div>
    </div>
</div>
</body>
</html>
