<?php
require_once 'vendor/autoload.php';

// Chỉ cần khai báo use một lần ở đầu file
use App\controllers\HomeController;
use App\controllers\ProductController;

$page = $_GET['page'] ?? 'home';

if ($page === 'home') {
    $controller = new HomeController();
    $controller->index();
} elseif ($page === 'products') {
    $controller = new ProductController();
    // Lưu ý: Đảm bảo trong ProductController bạn đặt tên hàm là index() hoặc list() cho đúng
    $controller->index(); 
} else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 - Không tìm thấy trang!</h1>";
}