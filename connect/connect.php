<?php
class ConnectDB
{

    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "coffe_shop";
    public $conn;


    public function __construct()
    {
        try {
            // Tạo kết nối với cơ sở dữ liệu
            $this->conn = new PDO("mysql:host={$this->servername};dbname={$this->dbname}", $this->username, $this->password);
            // Thiết lập chế độ lỗi PDO
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; // Để kiểm tra kết nối, có thể bật dòng này lên
        } catch (PDOException $e) {
            // Hiển thị lỗi kết nối
            echo "Connection failed: " . $e->getMessage();
        }
    }
}