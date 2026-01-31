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
   
    $controller->index(); 
} elseif ($page === 'product-delete') { // THÊM NHÁNH NÀY
    $controller = new ProductController();
    $controller->delete(); 
// index.php
} elseif ($page === 'product-detail') {
    $controller = new ProductController();
    $controller->detail();
}elseif ($page === 'product-add') {
    $controller = new ProductController();
    $controller->create();
} elseif ($page === 'product-store') {
    $controller = new ProductController();
    $controller->store();
}elseif ($page === 'edit') {
    (new ProductController())->edit();
} elseif ($page === 'product-update') {
    (new ProductController())->update();
}
else {
    header("HTTP/1.0 404 Not Found");
    echo "<h1>404 - Không tìm thấy trang!</h1>";
}