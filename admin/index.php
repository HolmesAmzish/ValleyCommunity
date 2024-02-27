<?php
session_start();
if (isset($_COOKIE['AdminName'])) {
    $_SESSION['AdminName'] = $_COOKIE['AdminName']; 
    header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="NULLA">
    <title>管理员</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sign-in/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }
        .form-signin {
            max-width: 330px;
            padding: 1rem;
        }
        .form-signin .form-floating:focus-within {
            z-index: 2;
        }

        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }

        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }
    </style>
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    </svg>
    <main class="form-signin w-100 m-auto">
        <form action="AdminLogin.php" method="POST">
            <h1 class="h3 mb-3 fw-normal">管理员登录</h1>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingInput" name="username">
                <label for="floatingInput">用户名</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" name="password">
                <label for="floatingPassword">密码</label>
            </div>
            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    记住密码
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">验证</button>
        </form>
    </main>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
