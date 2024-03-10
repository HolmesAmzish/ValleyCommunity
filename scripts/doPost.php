<?php
session_start();
require_once("dbConnect.php");

// 建立数据库连接
$conn = dbConnect();

// 确保标题、内容和作者字段都存在且不为空
if (!empty($_POST['title']) && !empty($_POST['content']) && !empty($_SESSION['username'])) {
    $sql = "INSERT INTO posts (title, content, author, tags) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $_POST['title'], $_POST['content'], $_SESSION['username'], $_POST['tags']);
    $result = $stmt->execute();
    
    if ($result) {
        $post_id = $stmt->insert_id;
        $post_msg = "发送成功";
        header("location:../pages/post_single.php?pid=$post_id&msg=$post_msg");
        exit;
    } else {
        $post_error = "发送失败";
        header("location:../pages/post.php?msg=$post_error");
        exit;
    }
} else {
    $post_error = "标题内容不能为空";
    header("location:../pages/post.php?msg=$post_error");
    exit;
}

$stmt->close();
$conn->close();
?>
