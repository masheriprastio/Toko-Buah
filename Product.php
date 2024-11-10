<?php
require_once('Config.php');
class Product{
    private $conn;
    public function __construct(){
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
}
$product = new Product();
// $product->index();
$product->getData();
