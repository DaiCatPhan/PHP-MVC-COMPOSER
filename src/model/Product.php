<?php
class Product extends ConnectDB
{
    public $tableName = 'product';

    public function getAllProduct()
    {
        try {
            $sql = "SELECT * FROM  $this->tableName";
            $stml = $this->conn->prepare($sql);
            $stml->execute();
            return $stml->fetchAll();
        } catch (PDOException $e) {

            error_log($e->getMessage());
            return false;
        }
    }

    public function getProductDetail($id)
    {
        try {

            $sql = "SELECT * FROM  $this->tableName WHERE id= ?";
            $stml = $this->conn->prepare($sql);
            $stml->execute([$id]);
            $result = $stml->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                return $result; // Trả về dữ liệu nếu tìm thấy
            } else {
                // Xử lý khi không tìm thấy dữ liệu
                return ['error' => 'Không tìm thấy sản phẩm.'];
            }
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }

    public function deleteProduct($id)
    {
        try {
            $sql = "DELETE FROM {$this->tableName} WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }

    public function updateProduct($id, $name, $des)
    {
        try {
            $sql = "UPDATE {$this->tableName} SET name = :name, des = :des WHERE id = :id";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':des', $des, PDO::PARAM_STR);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }

    public function create($name, $des)
    {
        try {
            $sql = "INSERT INTO $this->tableName (name, des) VALUES (:name, :des)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindParam(':name', $name, PDO::PARAM_STR);
            $stmt->bindParam(':des', $des, PDO::PARAM_STR);
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        }
    }
}