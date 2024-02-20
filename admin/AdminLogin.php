<?php
require("../script/dbConnect.php");
session_start();
$conn = dbConnect();
$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM Admins WHERE AdminName=? AND Password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->executed();
$result = $stmt->get_result();

if ($result->num_rows == 1) {
    $_SESSION['AdminName'] = $username;
    header("location: dashboard.php");
    exit;
} else {
    header("location: index.php?msg=用户名或密码错误！");
    exit;
}
?>