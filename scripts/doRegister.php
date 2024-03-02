<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users (username, password, email) VALUES (?, ?, ?);");
$stmt->bind_param("sss", $username, $hashedPassword, $email);
$stmt->execute();
$result = $stmt->affected_rows;

if ($result == 1) {
    $register_msg = "注册成功，请登录。";
    header("location:../pages/login.php?msg=$register_msg");
    exit;
} else {
    $register_error = "注册失败，执行错误。";
    header("location:../pages/register.php?msg=$register_error");
    exit;
}
$conn->close();
$stmt->close();
?>