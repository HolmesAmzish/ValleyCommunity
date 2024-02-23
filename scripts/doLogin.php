<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $hashedPassword = $row['Password'];

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['username'] = $username;
            header("location:../pages/home.php");
            exit;
        }
    }

    // 设置会话变量存储错误消息
    $_SESSION['error_message'] = "用户名或密码错误";
    header("location:../pages/Login.php");
    exit;
}
?>
