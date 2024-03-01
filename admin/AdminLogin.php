<?php
require("../scripts/dbConnect.php");
session_start();
$conn = dbConnect();
$admin_name = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM admins WHERE admin_name=?");
$stmt->bind_param("s", $admin_name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['admin_name'] = $admin_name;
        header("location: dashboard.php");
        exit;
    }
} else {
    header("location: index.php?msg=用户名或密码错误！");
    exit;
}
?>