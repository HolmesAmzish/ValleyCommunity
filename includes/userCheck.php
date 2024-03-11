<?php
if (!isset($_SESSION['username'])) {
    header("location:../pages/login.php?msg=你必须先登录");
    exit;
}
?>