<?php
function dbConnect() {
    $db_host = "localhost";
    $db_user = "valley";
    $db_pass = "9*Z[Z]?z9zZo=+eQ";
    $db_name = "Valley";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);
    if (!$conn) {
        die("数据库连接失败" . $conn->connect_error);
    } else {
        return $conn;
    }
}
?>