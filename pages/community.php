<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>社区-Valley</title>
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

    <style>
        .card {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .list-group-item:hover {
            background-color: #f0f8ff !important;
        }
    </style>
</head>
<body>
    <?php
    include("../includes/header.php");
    require_once("../scripts/dbConnect.php");
    $conn = dbConnect();

    // Pagination
    $rowsPerPage = 10;
    $page = isset($_GET['page']) && is_numeric($_GET['page']) ? intval($_GET['page']) : 1;
    $start = ($page - 1) * $rowsPerPage;

    // Count total rows
    $countQuery = "SELECT COUNT(*) AS total FROM posts";
    $countResult = $conn->query($countQuery);
    $totalRows = $countResult->fetch_assoc()['total'];
    $totalPages = ceil($totalRows / $rowsPerPage);

    // SQL Query
    $sql = "SELECT * FROM posts ORDER BY creation_date DESC LIMIT ?, ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $start, $rowsPerPage);
    $stmt->execute();
    $result = $stmt->get_result();
    ?>
    
    <div class="container mt-5">
        <!-- 显示信息 -->
        <?php if (isset($_GET['msg'])) { ?>
            <div class="alert alert-dismissible fade show" role="alert">
                <?php echo $_GET['msg']; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php } ?>
        
        <div class="row">
            <div class="col-md-8">
                <h2>社区</h2>
                <!-- 筛选选项栏 -->
                <div class="row mt-3">
                    <div class="col-md-6">
                        <label for="provinceSelect" class="form-label">选择省份</label>
                        <select class="form-select" id="provinceSelect">
                            <option selected>选择省份</option>
                            <option>江苏</option>
                            <option>安徽</option>
                            <option>浙江</option>
                            <!-- 其他省份选项 -->
                        </select>
                    </div>
                </div>
                <!-- 帖子列表 -->
                <div class="row mt-4">
                    <div class="col-md-12">
                        <form class="d-flex mb-3" action="" method="GET">
                            <input type="text" name="key" value="<?php echo isset($_GET['key']) ? htmlspecialchars($_GET['key']) : ''; ?>" class="form-control me-2" placeholder="搜索帖子...">
                            <button class="btn btn-outline-primary" type="submit"><i class="fas fa-search"></i></button>
                        </form>
                        <ul class="list-group">
                            <?php
                            require("../scripts/timespan.php");
                            while ($row = $result->fetch_assoc()) {
                                $time_span = time_span($row['creation_date']);
                            ?>
                            <a href="post_single.php?pid=<?php echo $row['post_id']; ?>" class="list-group-item list-group-item-action">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><?php echo $row['title']; ?></h5>
                                    <small><?php echo $time_span; ?></small>
                                </div>
                                <p class="mb-1"><?php echo (strlen($row['content']) > 100) ? substr($row['content'], 0, 100) . '...' : $row['content']; ?></p>
                                <small>By <?php echo $row['author']; ?></small>
                            </a>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <!-- Pagination -->
                <?php
                $stmt->close();

                if ($totalPages > 1) {
                    echo "<div class='row mt-3'><div class='col-md-12'>";
                    echo "<nav aria-label='Page navigation'><ul class='pagination justify-content-center'>";
                    
                    $first = "<li class='page-item'><a class='page-link' href='?page=1" . (isset($_GET['key']) ? "&key=" . urlencode($_GET['key']) : '') . "'>首页</a></li>";
                    $last = "<li class='page-item'><a class='page-link' href='?page=$totalPages" . (isset($_GET['key']) ? "&key=" . urlencode($_GET['key']) : '') . "'>末页</a></li>";
                    $pre = ($page > 1) ? "<li class='page-item'><a class='page-link' href='?page=".($page - 1) . (isset($_GET['key']) ? "&key=" . urlencode($_GET['key']) : '') . "'>上一页</a></li>" : '';
                    $next = ($page < $totalPages) ? "<li class='page-item'><a class='page-link' href='?page=".($page + 1) . (isset($_GET['key']) ? "&key=" . urlencode($_GET['key']) : '') . "'>下一页</a></li>" : '';

                    echo $first . $pre;
                    for ($i = 1; $i <= $totalPages; $i++) {
                        echo "<li class='page-item " . ($i == $page ? 'active' : '') . "'><a class='page-link' href='?page=$i" . (isset($_GET['key']) ? "&key=" . urlencode($_GET['key']) : '') . "'>$i</a></li>";
                    }
                    echo $next . $last;
                    echo "</ul></nav></div></div>";
                }
                ?>
            </div>
            <div class="col-md-4">
                <!-- 侧栏 -->
                <h3 class="mt-5">侧栏</h3>
                <div class="card mt-3">
                    <div class="card-body">
                        <h5 class="card-title">发布帖子</h5>
                        <p class="card-text">创建新的讨论。</p>
                        <a href="/pages/post.php" class="btn btn-primary">发布</a>
                    </div>
                </div>
                <!-- 其他侧栏内容 -->
            </div>
        </div>
    </div>

    <?php include("../includes/footer.html"); ?>
    <script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
