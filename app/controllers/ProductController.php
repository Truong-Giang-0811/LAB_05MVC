<?php
namespace App\Controllers;
use App\Models\Product;

class ProductController {
    public function index() {
        // 1. Lấy dữ liệu từ Model
        $productModel = new Product();
        $products = $productModel->getAllProducts();

        // 2. Truyền dữ liệu sang View
        // Lưu ý: Sử dụng đường dẫn dựa trên cấu trúc folder app/View bạn đang có
        include __DIR__ . '/../View/product_list.php';
    }
    // app/Controllers/ProductController.php
    public function delete() {
        
        $id = $_GET['id'] ?? null;

        if ($id) {
            $model = new \App\Models\Product();
            $model->delete($id);
        }

        // 2. Logic: Sau khi xóa xong, quay về trang danh sách
        header("Location: index.php?page=products");
        exit();
    }
        // app/Controllers/ProductController.php
    public function detail() {
        $id = $_GET['id'] ?? null;

        if ($id) {
            $model = new \App\Models\Product();
            $product = $model->getProductById($id);

            if ($product) {
                // Gọi file view chi tiết
                include __DIR__ . '/../View/product_detail.php';
            } else {
                echo "Sản phẩm không tồn tại!";
            }
        } else {
            header("Location: index.php?page=products");
        }
    }
    // app/Controllers/ProductController.php


    public function create() {
        include __DIR__ . '/../View/product_add.php';
    }

   
    public function store() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            
            $data = [
                'fullname'     => $_POST['fullname'] ?? '',
                'student_code' => $_POST['student_code'] ?? '',
                'email'        => $_POST['email'] ?? '',
                'password'     => $_POST['password'] ?? ''
            ];

            // Validate sơ bộ: Không để trống
            foreach ($data as $key => $value) {
                if (empty(trim($value))) {
                    die("Vui lòng điền đầy đủ thông tin!");
                }
            }

            // Gọi Model để insert
            $model = new \App\Models\Product();
            $model->insert($data);

            // Chuyển hướng về danh sách
            header("Location: index.php?page=products");
            exit();
        }
    }
    // app/Controllers/ProductController.php

// Bước 1: Hiện form với dữ liệu cũ
    public function edit() {
        $id = $_GET['id'] ?? null;
        $model = new Product();
        $product = $model->getProductById($id); // Tận dụng hàm đã viết ở Phần 2.2
        include __DIR__ . '/../View/product_edit.php';
    }

    // Bước 2: Nhận dữ liệu từ form và lưu vào DB
    public function update() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $data = [
                'fullname'     => $_POST['fullname'],
                'student_code' => $_POST['student_code'],
                'email'        => $_POST['email'],
                'password'     => $_POST['password']
            ];

            $model = new Product();
            $model->update($id, $data);
            
            header("Location: index.php?page=products");
            exit();
        }
    }
}