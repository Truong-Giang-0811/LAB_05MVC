<?php
namespace App\Controllers;

use App\Models\Student;// Sử dụng Model đã tạo ở Bài 2

class HomeController {
    public function index() {
        // 1. Chuẩn bị dữ liệu (Logic)
        $message = "Chào mừng bạn đến với mô hình MVC!";
        
        // Gọi Model để lấy dữ liệu
        $student = new Student();
        $studentInfo = $student->getInfo();

        // 2. Gọi View và truyền dữ liệu vào
        // Các biến $message và $studentInfo sẽ có sẵn trong file home.php
        include __DIR__ . '/../View/Home.php';
    }
}