<?php
require_once('Product.php');
$product = new Product(null, '', '', '', '', '');
$products = $product->fetchAllData();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Produk</title>
    <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet"> -->
     <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Daftar Produk</h2>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Jumlah Stok</th>
                    <th>URL Gambar</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?php echo $product['product_id']; ?></td>
                        <td><?php echo $product['product_name']; ?></td>
                        <td><?php echo $product['description']; ?></td>
                        <td><?php echo $product['price']; ?></td>
                        <td><?php echo $product['stock_quantity']; ?></td>
                        <td><img src="<?php echo $product['image_url']; ?>" alt="Product Image" width="100"></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="index.php
        " class="btn btn-primary">Tambah Produk Baru</a>
    </div>
</body>

</html>