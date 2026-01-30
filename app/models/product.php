<?php
namespace App\models;
use PDO;

class Product extends BaseModels {
    public function getAllProducts() {
        $sql = "SELECT * FROM students"; // Đảm bảo bảng này đã tồn tại trong DB
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}