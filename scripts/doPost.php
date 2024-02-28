<?php
session_start();
require_once("dbConnect.php");
$conn = dbConnect();

$title = $_POST['title'];
$content = $_POST['content'];
$author = $_SESSION['username'];

$sql = "INSERT INTO posts (title, content, author) 
        VALUES ('$title', '$content', '$author')";
$result = $conn->query($sql);
if ($result) {
    $post_id = $conn->insert_id;
    header("location:../pages/post_single.php?id=$post_id");
    $_SESSION['post_msg'] = "发送成功";
    exit;
} else {
    header("location:../pages/post.php");
    $_SESSION['post_error'] = "发送失败";
    exit;
}
?>