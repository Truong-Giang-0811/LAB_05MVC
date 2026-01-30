<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Trang chủ MVC</title>
    <style>
        body { font-family: sans-serif; line-height: 1.6; padding: 20px; }
        .container { max-width: 600px; margin: auto; border: 1px solid #ddd; padding: 20px; border-radius: 8px; }
        h1 { color: #2c3e50; }
        .info { background: #f9f9f9; padding: 10px; border-left: 5px solid #3498db; }
    </style>
</head>
<nav style="margin-bottom: 20px;">
    <a href="index.php?page=home" style="margin-right: 15px; font-weight: bold; text-decoration: none; color: #3498db;">Trang chủ</a>
    <a href="index.php?page=products" style="text-decoration: none; color: #2c3e50;">Danh sách sản phẩm</a>
</nav>
<body>
    <div class="container">
        <h1><?php echo $message; ?></h1>
        <div class="info">
            <p><strong>Thông tin từ Model:</strong> <?php echo $studentInfo; ?></p>
        </div>
        <p><em>Đây là nội dung được hiển thị từ file View.</em></p>
    </div>
</body>

<hr>
</html>