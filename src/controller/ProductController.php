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
        // $product = (new Product())->getProductDetail($id);
        // require_once './views/updateProduct.php';  
    }

    public function updateProduct($id)
    {

        // $name = $_POST['name'];
        // $description = $_POST['description'];


        // $productModel = new Product();
        // $success = $productModel->updateProduct($id, $name, $description);

        // if ($success) {
        //     header('Location: /product'); // Chuyển hướng đến danh sách sản phẩm
        // } else {
        //     echo "Cập nhật không thành công";
        // }
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
}