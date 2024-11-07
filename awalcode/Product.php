<?php

require_once('Config.php');
class Product{
    private $id;
    private $product_name;
    private $description;
    private $price;
    private $stock_quantity;
    private $image_url;
    private $conn;
    public function __construct($id, $product_name, $description, $price, $stock_quantity, $image_url){
        $this->id = $id;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->image_url = $image_url;
        $config = new Config();
        $this->conn = $config->config_connection();

    }
    public function index(){
        return "index.php";
    }
    public function save(){

        $sql = "INSERT INTO products (product_name, description, price, stock_quantity, image_url) VALUES ('$this->product_name', '$this->description', '$this->price', '$this->stock_quantity', '$this->image_url')";
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    public function fetchAllData()
    {
        $sql = "SELECT * FROM products";
        $result = $this->conn->query($sql);
        // $products = [];
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product = new Product(null, $_POST['product_name'], $_POST['description'], $_POST['price'], $_POST['stock_quantity'], $_POST['image_url']);
    $product->save();
    $product->index();

}