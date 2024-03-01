<?php
session_start();
require_once("../scripts/dbConnect.php");
$conn = dbConnect();


$content = $_POST['comment'];
$post_id = $_POST['post_id'];
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

// 插入评论到数据库
$sql = "INSERT INTO comments (post_id, user_id, username, comment_content) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("iiss", $post_id, $user_id, $username, $content);

if ($stmt->execute()) {
    header("location:../pages/post_single.php?id=$post_id");
    exit;
} else {
    die("发送评论时出错：" . $conn->error);
}

// 关闭数据库连接
$stmt->close();
$conn->close();
?>
