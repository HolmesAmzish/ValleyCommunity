<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO Users (Username, Password, Email) VALUES (?, ?, ?);");
$stmt->bind_param("sss", $username, $hashedPassword, $email);
$stmt->execute();
$result = $stmt->affected_rows;

if ($result == 1) {
    echo "注册成功";
    exit;
} else {
    echo "注册失败";
    exit;
}

?>