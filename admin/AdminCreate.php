<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$admin_name = "Nulla";
$password = "Z*9ZZ9";
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO admins (admin_name, password) VALUES (?, ?)");
$stmt->bind_param("ss", $admin_name, $hashedPassword);
$stmt->execute();
$result = $stmt->affected_rows;

if ($result == 1) {
    echo "注册成功。";
} else {
    echo "注册失败。";
}

// 关闭预处理语句和数据库连接
$stmt->close();
$conn->close();
?>
