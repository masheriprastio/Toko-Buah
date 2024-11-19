<?php
require_once('Product.php');

$product = null;
if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id = $_GET['id'];
    $panggilEditProduk = new Product();
    $product = $panggilEditProduk->getById($id);

    // Debugging statement
    if ($product === null) {
        echo "Product with ID $id not found.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Edit Produk</h2>
        
        <!-- Check if $product is set and not null -->
        <?php if (isset($product) && $product): ?>
        <form action="update_product.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $product['product_id']; ?>">
            <div class="form-group">
                <label for="product_name">Nama Produk</label>
                <input type="text" class="form-control" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required><?php echo $product['description']; ?></textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" value="<?php echo $product['price']; ?>" required>
            </div>
            <div class="form-group">
                <label for="stock_quantity">Jumlah Stok</label>
                <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" value="<?php echo $product['stock_quantity']; ?>" required>
            </div>
            <div class="form-group">
                <label for="image_url">URL Gambar</label>
                <input type="text" class="form-control" id="image_url" name="image_url" value="<?php echo $product['image_url']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
        <?php else: ?>
        <p>Produk tidak ditemukan.</p>
        <?php endif; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>
