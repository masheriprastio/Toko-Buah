<?php
require_once('../Product.php');
$panggilProduk = new Product();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Index</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <di class="container mt-5">
        <h2 class="text-center mb-4">Daftar Buah</h2>
        <!-- Button trigger modal -->
        <a href="add_product.php" type="button" class="btn btn-primary ms-auto ms-md-4 mb-4">
            Tambah Data Buah
        </a>


        <table class="table table-bordered ms-auto ms-md-4">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama Produk</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Gambar</th>
                    <th>Edit</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($panggilProduk->getData() as $produk): ?>
                    <tr>
                        <td><?php echo $produk['product_id']; ?></td>
                        <td><?php echo $produk['product_name']; ?></td>
                        <td><?php echo $produk['description']; ?></td>
                        <td><?php echo $produk['price']; ?></td>
                        <td><?php echo $produk['stock_quantity']; ?></td>
                        <td><img src="../assets/img/<?php echo $produk['image_url']; ?>" width="90" </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        </div>

</body>

</html>