<?php
require_once('Config.php');
class Product{
    private $conn, $productid, $productname, $productdesc, $productprice, $productstockquan, $produkimg;
    public function __construct($id, $product_name, $description, $price, $stock_quantity, $image_url,)
    {
        $this->productid = $id;
        $this->productname = $product_name;
        $this->productdesc = $description;
        $this->productprice = $price;
        $this->productstockquan = $stock_quantity;
        $this->produkimg = $image_url;
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
    public function delete($id)
    {
        $sql = "DELETE FROM products WHERE product_id=$id";
        if ($this->conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            $this->conn->close(); // Close connection header("Location: index.php"); exit(); } else { echo "Error: " . $sql . "<br>" . $this->conn->error; } }
        }
    }
}
//Hapus Data
$siProduk = new Product(null,null,null,null,null,null);
$siProduk->delete(2);