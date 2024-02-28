<?php
require_once("dbConnect.php");
$conn = dbConnect();
if ($conn->connect_error) {
    die("MySQL connect failed: " . $conn->connect_error);
}
$username = $_GET['username'];
$sql = "SELECT * FROM users WHERE username='$username'";
$result = $conn->query($sql);
if ($result->num_rows) {
    echo "existed";
} else {
    echo "available";
}