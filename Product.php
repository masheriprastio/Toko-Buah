<?php
require_once('Config.php');
class Product{
    private $conn;
    public function __construct($id, $product_name, $description, $price, $stock_quantity, $image_url){
        $this->id = $id;
        $this->product_name = $product_name;
        $this->description = $description;
        $this->price = $price;
        $this->stock_quantity = $stock_quantity;
        $this->image_url = $image_url;
        $config = new Config();
        $this->conn = $config->koneksi();

    }
    public function index(){
        header("Location:../../Toko-Buah/view/index.php");
        // echo "Tes";
    }
    public function getData(){
        $sql = "SELECT * FROM products";
        $hasil = $this->conn->query($sql);
        $products = [];
        if ($hasil->num_rows > 0) {
            while ($row = $hasil->fetch_assoc()) {
                $products[] = $row;
            }
        }
        return $products;
    }
    public function save(){
        $sql = "INSERT INTO products (product_name, description, price, stock_quantity, image_url) VALUES ('$this->product_name', '$this->description', '$this->price', '$this->stock_quantity', '$this->image_url')";
        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
            $this->conn->close(); // Close connection header("Location: index.php"); exit(); } else { echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
}
