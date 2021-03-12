<?php
namespace App\Controller;
use App\Model\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct(){
        $this->productModel = new ProductModel();
    }

    public function getAll(){
        $products = $this->productModel->getAll();
//        var_dump($products);
        include "src/View/product/product-list.php";
    }

    public function addProduct(){
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $products= $this->productModel->getProductLine();
            include "src/View/product/add-product.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == "POST"){
            $names = $_REQUEST['names'];
            $types = $_REQUEST['types'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $to_date = $_REQUEST['to_date'];
            $description = $_REQUEST['description'];
            if (!empty($names) && !empty($types) && !empty($price) && !empty($amount) && !empty($to_date) && !empty($description)){
                $this->productModel->addProduct($names,$types,$price,$amount,$to_date,$description);
            }
        }
    }

    public function deleteProduct(){
        $id = (int)$_REQUEST['id'];
        if (!empty($id)){
            $this->productModel->deleteProduct($id);
        }

    }
    public function editProduct(){
        if ($_SERVER['REQUEST_METHOD'] == "GET"){
            $product_id = $_REQUEST['id'];
            include "src/View/product/add-update.php";
        }elseif ($_SERVER['REQUEST_METHOD'] == "POST"){
            $product_id = $_REQUEST['product_id'];
            $names = $_REQUEST['names'];
            $types = $_REQUEST['types'];
            $price = $_REQUEST['price'];
            $amount = $_REQUEST['amount'];
            $to_date = $_REQUEST['to_date'];
            $description = $_REQUEST['description'];
            if (!empty($product_id) &&!empty($names) && !empty($types) && !empty($price) && !empty($amount) && !empty($to_date) && !empty($description)){
                $this->productModel->editProduct($product_id,$names,$types,$price,$amount,$to_date,$description);
            }
        }
    }
}