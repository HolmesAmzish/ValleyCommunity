<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valley - 管理员面板</title>
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    body {
        padding-top: 56xp;
    }
</style>
<body>
<?php include("../includes/admin-header.php"); ?>
<div class="container mt-4">
    <h3 class="text-center">欢迎，<?php echo htmlspecialchars($_SESSION['admin_name']); ?>!</h3>
</div>

<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>