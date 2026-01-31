<?php
namespace App\Models;
use PDO;

class Product extends BaseModel {
    public function getAllProducts() {
        $sql = "SELECT * FROM students"; // Đảm bảo bảng này đã tồn tại trong DB
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    // app/Models/Product.php
    public function delete($id) {
        // Sử dụng $this->pdo (thuộc tính protected từ BaseModel)
        $sql = "DELETE FROM students WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
    }
    // app/Models/Product.php
    public function getProductById($id) {
        // Lưu ý: Sử dụng ID viết hoa nếu cột trong DB của bạn là ID
        $sql = "SELECT * FROM students WHERE ID = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(); // Trả về 1 dòng duy nhất
    }
    // app/Models/Product.php
    public function insert($data) {
        $sql = "INSERT INTO students (Fullname, Student_code, Email, Password) 
                VALUES (:fullname, :student_code, :email, :password)";
        
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            'fullname'     => $data['fullname'],
            'student_code' => $data['student_code'],
            'email'        => $data['email'],
            'password'     => $data['password'] // Lưu ý: thực tế nên dùng password_hash
        ]);
    }
    // app/Models/Product.php
    public function update($id, $data) {
        $sql = "UPDATE students SET 
                Fullname = :fullname, 
                Student_code = :student_code, 
                Email = :email, 
                Password = :password 
                WHERE ID = :id";
        
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([
            'fullname'     => $data['fullname'],
            'student_code' => $data['student_code'],
            'email'        => $data['email'],
            'password'     => $data['password'],
            'id'           => $id
        ]);
    }
}