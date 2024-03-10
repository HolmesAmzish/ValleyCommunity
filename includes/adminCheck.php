<?php
if (!isset($_SESSION['admin_name'])) {
    header("location:../admin/index.php?msg=未知管理员");
    exit;
}
?>