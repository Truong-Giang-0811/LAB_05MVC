<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Danh sách sản phẩm từ Database</h1>
        <div class="d-flex justify-content-end mb-3">
            <a href="index.php?page=product-add" class="btn btn-success">
                <i class="bi bi-plus-circle"></i> Thêm sinh viên mới
            </a>
        </div>  
        <div class="table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Tên học sinh</th>
                        <th>Mã sinh viên</th>
                        <th>Email</th>
                        <th>Mật khẩu</th>
                        <th class="text-center">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($products as $item): ?>
                    <tr>
                        <td><?= $item['ID'] ?></td>
                        <td><?= $item['Fullname'] ?></td>
                        <td><?= $item['Student_code'] ?></td>
                        <td><?= $item['Email'] ?></td>
                        <td><?= $item['Password'] ?></td>
                        <td class="text-center">
                          
                            <a href="index.php?page=edit&id=<?= $item['ID'] ?>" class="btn btn-warning btn-sm">
                                Sửa
                            </a>
                            <a href="index.php?page=product-detail&id=<?= $item['ID'] ?>" class="btn btn-info btn-sm text-white">
                                Xem
                            </a>
                            <a href="index.php?page=product-delete&id=<?= $item['ID'] ?>"
                               class="btn btn-danger btn-sm" 
                               onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">
                                Xóa
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>