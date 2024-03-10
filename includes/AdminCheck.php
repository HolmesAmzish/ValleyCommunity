<?php
if (!isset($_SESSION['admin_name'])) {
        $login_error = "未知管理员";
        header("location:index.php?msg=$login_error");
        exit;
}
?>