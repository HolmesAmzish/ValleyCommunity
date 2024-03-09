<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>资料-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/styles.css"> <!-- 自定义样式表 -->
    <style>
    </style>
</head>
<body>
    <?php
    include("../includes/admin-header.php");
    require_once("../scripts/dbConnect.php");
    if (!isset($_SESSION['admin_name'])) {
        header("location:index.php");
        exit;
    }
    $conn = dbConnect();
    $user_id = $_GET['uid'];
    $sql = "SELECT * FROM users WHERE user_id=$user_id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    ?>

    <div class="container mt-5">
        <?php if (isset($_GET['msg'])) { ?>
            <div class="alert alert-dismissible fade show" role="alert">
                <?php echo $_GET['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        <br>
        <h1>用户信息</h1>
        <div class="row mt-3">
            <div class="col-md-6">
                <form class="profile-form form-sample">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">用户ID</label>
                        <input type="text" class="form-control" id="UserID" value="<?php echo $row['user_id']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">用户名</label>
                        <input type="text" class="form-control" id="username" value="<?php echo $row['username']; ?>" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">电子邮箱</label>
                        <input type="email" class="form-control" id="email" value="<?php echo $row['email']; ?>" disabled>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <!-- 表单 -->
                <form class="profile-form form-sample" action="UserUpdate.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">性别</label>
                        <div class="row">
                            <div class="col-auto">
                                <input type="hidden" name="user_id" value="<?php echo $row['user_id']; ?>">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male" <?php if($row['gender']=="male") echo "checked";?>>
                                    <label class="form-check-label" for="male">男</label>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female" <?php if($row['gender']=="female") echo "checked";?>>
                                    <label class="form-check-label" for="female">女</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="phone_number" class="form-label">手机号码</label>
                        <input type="text" class="form-control" name="phone_number" value="<?php echo $row['phone_number']; ?>">
                    </div>
                    <div class="row">
                        <P>所处地</p>
                        <div class="col-md-6 mb-3">
                            <label for="province" class="form-label">省份</label>
                            <input type="text" class="form-control" name="province" value="<?php echo $row['province'];?>">
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="city" class="form-label">城市</label>
                            <input type="text" class="form-control" name="city" value="<?php echo $row['city'];?>">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="bio" class="form-label">简介</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3"><?php echo $row['bio']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
