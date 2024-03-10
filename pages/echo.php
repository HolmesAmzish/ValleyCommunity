<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>树洞 - Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    </head>
    <style>
        body {
            padding-bottom: 10px;
        }
    </style>
<body>
    <?php
    include("../includes/header.php");
    if (!isset($_SESSION['username'])) {
        header("location:/pages/login.php?msg=请先登录");
        exit;
    }
    
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();

    if (isset($_GET['receiver'])) {
        $receiver = $_GET['receiver'];
    } else {
        $receiver = "all";
    }
    $stmt = $conn->prepare("SELECT * FROM echo WHERE receiver=?");
    $stmt->bind_param("s", $receiver);
    $stmt->execute();
    $result = $stmt->get_result();

    ?>
    <div class="container mt-4">
        <h1 class="text-center">Valley 树洞</h1>
        <div class="mb-3 col-md-4">
            <form action="" method="get">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="receiver" placeholder="请输入接收者的名字：">
                    <button type="submit" class="btn btn-primary">查找</button>
                </div>
            </div>
            </form>
        </div>

        <!-- 列表 -->
        <div id="messages" class="mt-3">
            <?php
            require("../scripts/timespan.php");
            while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-8">
                <div class="card mt-3">
                    <div class="card-body">
                        <p class="card-text"><?php echo $row['content']; ?></p>
                        <small><?php echo $row['sent_at']; ?></small>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <hr>
        <button type="button" class="btn btn-primary me-3 mb-3" data-bs-toggle="modal" data-bs-target="#sendTreeHoleModal">发送消息</button>
        <!-- 模态框 -->
        <div class="modal fade" id="sendTreeHoleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">发送树洞消息</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <!-- 表单 -->
                    <form action="/scripts/echoSend.php" method="post" class="needs-validation" novalidate>
                        <div class="mb-3">
                            <label for="receiverInput">接收者</label>
                            <input type="text" id="receiverInput" name="receiver" class="form-control">
                            <input type="hidden" name="sender_id" value="<?php echo $_SESSION['user_id']; ?>">
                        </div>
                        <div class="mb-3">
                            <textarea class="form-control" rows="3" name="content" placeholder="请输入你想发送的消息..." required></textarea>
                            <div class="invalid-feedback">请填写你要发送的消息。</div>
                        </div>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">取消</button>
                        <input type="submit" class="btn btn-primary">
                    </form>
                </div>
            </div>
        </div>
        <script src="/assets/js/bootstrap.min.js"></script>
    </div>
    <?php include("../includes/footer.html") ?>
</body>
</html>