<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

function escape_data($data) {
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}

$user_id = $_POST['user_id'];
$gender = escape_data($_POST['gender']);
$phone_number = escape_data($_POST['phone_number']);
$province = escape_data($_POST['province']);
$city = escape_data($_POST['city']);
$bio = escape_data($_POST['bio']);

$stmt = $conn->prepare("UPDATE users SET gender=?, phone_number=?, province=?, city=?, bio=? WHERE user_id=?");
$stmt->bind_param("sssssi", $gender, $phone_number, $province, $city, $bio, $user_id);
$stmt->execute();

if ($stmt->affected_rows > 0) {
    $update_msg = "更新成功";
    header("location:UserList.php?msg=$update_msg");
    exit;
} else {
    $update_error = "更新失败";
    header("location:UserList.php?msg=$update_error");
    exit;
}

$stmt->close();
$conn->close();
?>
