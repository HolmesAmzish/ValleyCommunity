<?php
session_start();
if (isset($_COOKIE['isAdmin'])) {
    $_SESSION['admin'] = $_COOKIE['admin'];
    header("location:dashboard.php");
}
?>