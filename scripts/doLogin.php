<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            $_SESSION['user_id'] = $row['user_id'];
            header("location:../pages/home.php");
            exit;
        }
    }

    // 设置会话变量存储错误消息
    $login_error = "用户名或密码错误";
    header("location:../pages/login.php?msg=$login_error");
    exit;
}
?>
