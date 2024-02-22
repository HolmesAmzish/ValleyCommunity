<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // 使用准备好的语句来防止 SQL 注入攻击
    $stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND Password=?");
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        $_SESSION['username'] = $username;
        header("location:../index.php");
        exit;
    } else {
        header("location:login.php");
        exit;
    }
}
?>
