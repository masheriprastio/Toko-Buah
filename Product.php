<?php
require_once('Config.php');
class Product {
    private $conn, $productid, $productname, $productdesc, $productprice, $productstockquan, $produkimg;

    public function __construct($id = null, $product_name = '', $description = '', $price = 0, $stock_quantity = 0, $image_url = '') {
        $this->productid = $id;
        $this->productname = $product_name;
        $this->productdesc = $description;
        $this->productprice = $price;
        $this->productstockquan = $stock_quantity;
        $this->produkimg = $image_url;
        $config = new Config();
        $this->conn = $config->koneksi();
    }

    public function save() {
        $sql = "INSERT INTO products (product_name, description, price, stock_quantity, image_url) VALUES ('$this->productname', '$this->productdesc', '$this->productprice', '$this->productstockquan', '$this->produkimg')";
        if ($this->conn->query($sql) === TRUE) {
            $_SESSION['success_message'] = "Data produk berhasil ditambahkan!";
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }

    public function getData() {
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

    public function getById($id) {
        $sql = "SELECT * FROM products WHERE product_id=$id";
        $result = $this->conn->query($sql);
        $product = $result->fetch_assoc();
        $this->conn->close();
        return $product;
    }

    public function update() {
        $sql = "UPDATE products SET product_name='$this->productname', description='$this->productdesc', price='$this->productprice', stock_quantity='$this->productstockquan', image_url='$this->produkimg' WHERE product_id=$this->productid";
        if ($this->conn->query($sql) === TRUE) {
            $this->conn->close();
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }

    public function delete($id) {
        $sql = "DELETE FROM products WHERE product_id=$id";
        if ($this->conn->query($sql) === TRUE) {
            $this->conn->close();
            return true;
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
            return false;
        }
    }
}
?>
