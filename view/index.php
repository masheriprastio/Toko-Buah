<?php
require_once('../Product.php');
$pdoct = new Product();
$pdoct->getData();
?>

<!-- Print out data
print_r($pdoct->getData()); -->

<?php foreach($pdoct->getData() as $product):?>
<?php echo $product['product_id'];?>
<?php echo $product['product_name'];?>
<?php echo $product['description'];?>
<?php echo $product['price'];?>
<?php echo $product['stock_quantity'];?>
<?php echo $product['image_url'];?>
<?php endforeach;?>