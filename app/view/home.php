<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ MVC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="index.php">My Project</a>
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Trang chủ</a>
                <a class="nav-link" href="index.php?url=product-list">Danh sách sản phẩm</a>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title text-primary"><?php echo $message; ?></h1>
                        <hr>
                        <div class="alert alert-info">
                            <strong>Thông tin từ Model:</strong> <?php echo $studentInfo; ?>
                        </div>
                        <p class="text-muted italic">Đây là nội dung được hiển thị từ file View.</p>
                        
                        <a href="index.php?url=product-list" class="btn btn-success">
                            Xem danh sách ngay &raquo;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>