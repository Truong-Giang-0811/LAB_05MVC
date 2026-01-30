<!DOCTYPE html>
<html>
<head>
    <title>Danh sách sản phẩm</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:hover { background-color: #f5f5f5; }
    </style>
</head>
<nav style="margin-bottom: 20px;">
    <a href="index.php?page=home" style="margin-right: 15px; font-weight: bold; text-decoration: none; color: #3498db;">Trang chủ</a>
    <a href="index.php?page=products" style="text-decoration: none; color: #2c3e50;">Danh sách sản phẩm</a>
</nav>
<body>
    <h1>Danh sách sản phẩm từ Database</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên học sinh</th>
                <th>Mã sinh viên</th>
                <th>Email</th>
                <th>Mật khẩu</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $item): ?>
            <tr>
                <td><?= $item['ID'] ?></td>
                <td><?= $item['fullname'] ?></td>
                <td><?= $item['student_code'] ?></td>
                <td><?= $item['email'] ?></td>
                <td><?= $item['password'] ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>