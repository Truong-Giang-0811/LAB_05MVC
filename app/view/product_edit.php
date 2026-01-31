<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <div class="card shadow mx-auto" style="max-width: 500px;">
            <div class="card-header bg-warning text-dark">
                <h4 class="mb-0 text-center">Cập nhật sinh viên</h4>
            </div>
            <div class="card-body">
                <form action="index.php?page=product-update" method="POST">
                    <input type="hidden" name="id" value="<?= $product['ID'] ?>">

                    <div class="mb-3">
                        <label class="form-label fw-bold">Họ và tên</label>
                        <input type="text" name="fullname" class="form-control" 
                               value="<?= $product['Fullname'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Mã sinh viên</label>
                        <input type="text" name="student_code" class="form-control" 
                               value="<?= $product['Student_code'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Email</label>
                        <input type="email" name="email" class="form-control" 
                               value="<?= $product['Email'] ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label fw-bold">Mật khẩu</label>
                        <input type="password" name="password" class="form-control" 
                               value="<?= $product['Password'] ?>" required>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php?page=products" class="btn btn-secondary">Quay lại</a>
                        <button type="submit" class="btn btn-warning">Lưu thay đổi</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>