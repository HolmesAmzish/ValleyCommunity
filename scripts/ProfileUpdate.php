<?php
session_start();
require_once("dbConnect.php");
$conn = dbConnect();

// 防止 XSS 攻击：转义用户提供的数据
function escape_data($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

// 获取用户输入并转义
$user_id = $_SESSION['user_id'];
$gender = escape_data($_POST['gender']);
$phone_number = escape_data($_POST['phone_number']);
$province = escape_data($_POST['province']);
$city = escape_data($_POST['city']);
$bio = escape_data($_POST['bio']);

// 防止 SQL 注入：使用预处理语句和绑定参数
$stmt = $conn->prepare("UPDATE users SET gender=?, phone_number=?, province=?, city=?, bio=? WHERE user_id=?");
$stmt->bind_param("sssssi", $gender, $phone_number, $province, $city, $bio, $user_id);
$stmt->execute();

// 检查更新结果并进行相应处理
if ($stmt->affected_rows > 0) {
    $update_msg = "更新成功";
    header("location:../pages/profile.php?msg=$update_msg");
    exit;
} else {
    $update_error = "更新失败";
    header("location:../pages/profile.php?msg=$update_error");
    exit;
}

$stmt->close();
$conn->close();
?>
