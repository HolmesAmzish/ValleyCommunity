<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>注册-Valley</title>
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
        <div class="card-body" id="reginfo">
            <h4 class="card-title">用户注册</h4>
            <p class="card-description">基本信息</p>
            <form class="forms-sample" action="/scripts/doRegister.php" method="post" onsubmit="return validateForm()">
                <div class="form-group">
                    <label for="exampleInputUsername1">用户名</label>
                    <input type="text" class="form-control" id="username" name="username" required onblur="checkuser()">
                    <div id="usernameMessage"></div> <!-- 用户名重复信息框 -->
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">邮箱</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputConfirmPassword1">确认密码</label>
                    <input type="password" class="form-control" id="password_confirm" name="password_confirm" required oninput="checkPassword()">
                    <div id="passwordMessage"></div> <!-- 密码一致性信息框 -->
                </div>
                <button type="submit" class="btn btn-primary mr-2" id="submitBtn">提交</button>
                <button class="btn btn-light" type="reset">重置</button>
                <div style="height: 10px;"></div>
                <p>已有账号？<a href="login.php">登录</a></p>
            </form>
        </div>
    </div>
</div>
</body>

<script>
    function createXhr() {
        if (window.XMLHttpRequest) {
            return new XMLHttpRequest();
        }
        return new ActiveXObject("Microsoft.XMLHTTP");
    }

    function checkuser() {
    var username = document.getElementById("username").value;

    if (username == "") {
        return;
    }

    var xhr = createXhr();
    var usernameMessage = document.getElementById("usernameMessage");
    xhr.open('GET', '../scripts/usernameCheck.php?username=' + encodeURIComponent(username), true);
    xhr.send();

    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = xhr.responseText;
            if (response.includes("existed")) {
                usernameMessage.innerHTML = "<strong style='color:#dc3545'>用户名已存在。</strong>";
                usernameMessage.style.display = "block";
                document.getElementById("submitBtn").disabled = true; // 禁用提交按钮
            } else {
                usernameMessage.innerHTML = ""; // 清空消息框
                usernameMessage.style.display = "none"; // 隐藏消息框
                checkSubmitButton(); // 检查是否允许提交
            }
        }
    }
}

function checkPassword() {
    var password = document.getElementById("password").value;
    var confirmPassword = document.getElementById("password_confirm").value;
    var passwordMessage = document.getElementById("passwordMessage");

    if (password !== confirmPassword) {
        passwordMessage.innerHTML = "<strong style='color:#dc3545'>两次密码输入不一致。</strong>";
        passwordMessage.style.display = "block";
        document.getElementById("submitBtn").disabled = true; // 禁用提交按钮
    } else {
        passwordMessage.innerHTML = ""; // 清空消息框
        passwordMessage.style.display = "none"; // 隐藏消息框
        checkSubmitButton(); // 检查是否允许提交
    }
}

function checkSubmitButton() {
    var usernameMessage = document.getElementById("usernameMessage").innerHTML;
    var passwordMessage = document.getElementById("passwordMessage").innerHTML;

    if (usernameMessage === "" && passwordMessage === "") {
        document.getElementById("submitBtn").disabled = false; // 启用提交按钮
    } else {
        document.getElementById("submitBtn").disabled = true; // 禁用提交按钮
    }
}

</script>
</html
