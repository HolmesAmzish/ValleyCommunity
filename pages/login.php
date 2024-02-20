<?php
require_once("../scripts/dbConnect.php");
$conn = dbConnect();

$username = $_POST['username'];
$password = $_POST['password'];

$stmt = $conn->prepare("SELECT * FROM Users WHERE Username=? AND Password=?");
$stmt->bind_param("ss", $username, $password);
$stmt->executed();
$result = $stmt->get_result();

if ($result->num_rows == 1) {

} else {

}
?>