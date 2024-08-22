<?php
require_once './src/model/Product.php';
class ProductController
{
    public $modelProduct;

    public function __construct()
    {
        $this->modelProduct = new Product();
    }

    public function home()
    {
        $listProduct = $this->modelProduct->getAllProduct();
        require_once './src/view/home.php';
    }

    public function productDetail($id)
    {
        $productDetail = $this->modelProduct->getProductDetail($id);

        debug($productDetail);
        require_once './src/view/product/productDetail.php';

    }

    public function showUpdateForm($id)
    {
        $product = $this->modelProduct->getProductDetail($id);
        require_once './src/view/product/updateProduct.php';
    }

    public function updateProduct($id)
    {

        $name = $_POST['name'];
        $des = $_POST['des'];




        $success = $this->modelProduct->updateProduct($id, $name, $des);

        if ($success) {
            header('Location: /php/php-mvc/'); // Chuyển hướng đến danh sách sản phẩm
        } else {
            echo "Cập nhật không thành công";
        }
    }

    public function delete($id)
    {
        $success = $this->modelProduct->deleteProduct($id);

        if ($success) {
            header('Location: /php/php-mvc/');
        } else {
            echo "Xóa không thành công";
        }
    }

    public function create()
    {
        $name = $_POST['name'];
        $des = $_POST['des'];
        $success = $this->modelProduct->create($name, $des);

        if ($success) {
            header('Location: /php/php-mvc/');
        } else {
            echo "Xóa không thành công";
        }
    }

    public function createPage()
    {
        require_once './src/view/product/createProduct.php';
    }
}