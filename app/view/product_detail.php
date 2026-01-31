<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Chi tiết sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 600px;">
            <div class="card-header bg-primary text-white">
                <h3 class="mb-0">Thông tin chi tiết học sinh</h3>
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> <?= $product['ID'] ?></p>
                <p><strong>Họ và tên:</strong> <?= $product['Fullname'] ?></p>
                <p><strong>Mã sinh viên:</strong> <?= $product['Student_code'] ?></p>
                <p><strong>Email:</strong> <?= $product['Email'] ?></p>
                <hr>
                <a href="index.php?page=products" class="btn btn-secondary">Quay lại danh sách</a>
            </div>
        </div>
    </div>
</body>
</html>