<?php
require("../script/dbConnect.php");
session_start();
$conn = dbConnect();
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM Admins WHERE AdminName=?");
$stmt->bind_param("s", $username);
$stmt->executed();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    $hashedPassword = $row['password'];
    if (password_verify($password, $hashedPassword)) {
        $_SESSION['AdminName'] = $username;
        header("location: dashboard.php");
        exit;
    }
} else {
    header("location: index.php?msg=用户名或密码错误！");
    exit;
}
?>