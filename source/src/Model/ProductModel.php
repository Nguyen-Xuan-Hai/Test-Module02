<?php
namespace App\Model;
use PDO;

class ProductModel
{
    protected $database;

    public function __construct(){
        $db = new DBConnect();
        $this->database = $db->connect();
    }

    public function getAll(){
        $sql = "SELECT * FROM suppermarket";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function addProduct($names,$types,$price,$amount,$to_date,$description){
        $sql = "INSERT INTO suppermarket(names,types,price,amount,to_date,description) VALUES (:names,:types,:price,:amount,:to_date,:description)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':names',$names);
        $stmt->bindParam(':types',$types);
        $stmt->bindParam(':price',$price);
        $stmt->bindParam(':amount',$amount);
        $stmt->bindParam(':to_date',$to_date);
        $stmt->bindParam(':description',$description);
        $stmt->execute();
    }

    public function deleteProduct($id){
        $sql = "DELETE FROM suppermarket WHERE product_id=:product_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':product_id',$id);
        $stmt->execute();
    }

    public function getProductLine(){
        $sql = "SELECT * FROM types";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }

    public function editProduct($product_id,$names,$types,$price,$amount,$to_date,$description){
        $sql = "UPDATE suppermarket SET names=:names,types=:types,price=:price,amount=:amount,to_date=:to_date,description=:description WHERE product_id=:product_id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(':product_id',$product_id);
        $stmt->bindParam(':names',$names);
        $stmt->bindParam(':types',$types);
        $stmt->bindParam(':price',$price);
        $stmt->bindParam(':amount',$amount);
        $stmt->bindParam(':to_date',$to_date);
        $stmt->bindParam(':description',$description);
        $stmt->execute();
    }
}