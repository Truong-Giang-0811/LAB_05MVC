<?php
namespace App\Controllers;

use App\models\Product;

class ProductController {
    public function index() {
        // 1. Khởi tạo Model
        $productModel = new Product();

        // 2. Lấy dữ liệu từ Database thông qua Model
        $products = $productModel->getAllProducts();

        // 3. Truyền dữ liệu sang View để hiển thị
        // Lưu ý: Biến $products sẽ khả dụng bên trong file views/product_list.php
        include __DIR__ . '/../View/product_list.php';
    }
}