<?php

require_once('Product.php');
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $product = new Product();
    if ($product->delete($id)) {
        $_SESSION['success_message'] = "Data produk berhasil dihapus!";
}else{
    $_SESSION['error_message'] = "Data produk gagal dihapus!";
    
}
header("Location: index.php");
exit();
}
?>