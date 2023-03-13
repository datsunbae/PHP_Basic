<?php 
    require_once("C:/xampp/htdocs/lab5/config/db.class.php");

    class Product{
        public $productID;
        public $productName;
        public $cateID;
        public $price;
        public $quantity;
        public $description;
        public $picture;

        public function __construct($productName, $cateID, $price, $quantity, $description, $picture){
            $this->productName = $productName;
            $this->cateID = $cateID;
            $this->price = $price;
            $this->quantity = $quantity;
            $this->description = $description;
            $this->picture = $picture;
        }

        public static function list_products(){
            $db = new Db();
            $sql = "SELECT * FROM product";
            $result = $db->select_to_array($sql);
            return $result;
        }

        public function save(){
            $db = new DB();
            $sql = "INSERT INTO Product(ProductName, CateId, Price, Quantity, Description, Picture) VALUES('$this->productName','$this->cateID', '$this->price', '$this->quantity', '$this->description', '$this->picture')";

            $result = $db->query_execute($sql);
            return $result;
        }
    }

?>
