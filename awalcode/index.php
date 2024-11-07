<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Tambah Produk Baru</h2>
        <form action="Product.php" method="POST">
            <div class="form-group">
                <label for="product_name">Nama Produk</label>
                <input type="text" class="form-control" id="product_name" name="product_name" required>
            </div>
            <div class="form-group">
                <label for="description">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="price">Harga</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="form-group">
                <label for="stock_quantity">Jumlah Stok</label>
                <input type="number" class="form-control" id="stock_quantity" name="stock_quantity" required>
            </div>
            <div class="form-group">
                <label for="image_url">URL Gambar</label>
                <input type="text" class="form-control" id="image_url" name="image_url" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Produk</button>
        </form>
    </div>
</body>

</html>