<?php
require_once("dbConnect.php");
$conn = dbConnect();

$content = $_POST['content'];
$receiver = $_POST['receiver'];
$sender_id = $_POST['sender_id'];
$stmt = $conn->prepare("INSERT INTO echo (receiver, content, sender_id) VALUES (?, ?, ?)");
$stmt->bind_param("ssi", $receiver, $content, $sender_id);
$result = $stmt->execute();

if ($result) {
    $msg = "发送成功";
} else {
    $msg = "发送失败";
}
header("location:/pages/echo.php?msg=$msg");

$stmt->close();
$conn->close();
?>