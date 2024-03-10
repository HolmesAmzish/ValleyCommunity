<?php
session_start();
if (!isset($_SESSION['admin_name'])) {
    header("location:index.php?msg=Unknow admin");
}

require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$post_id = $_GET['pid'];

$stmt = $conn->prepare("DELETE FROM posts WHERE post_id = ?");
$stmt->bind_param("i", $post_id);
$stmt->execute();
$result = $stmt->affected_rows;

if ($result > 0) $msg = "删除成功";
else $msg = "删除失败";

header("location:PostList.php?msg=$msg");

$stmt->close();
$conn->close();

?>