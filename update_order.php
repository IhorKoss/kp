<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_order = (isset($_POST['id_order']) ? $_POST['id_order'] : '');
$id_product = $_POST['id_product'];
$id_material = $_POST['id_material'];
$id_customer =$_POST['id_customer'];
$price_order =$_POST['price_order'];
$quantity =$_POST['quantity'];
$date_order =$_POST['date_order'];

$result = mysqli_query($connection,"UPDATE orders SET id_product ='$id_product', id_material ='$id_material', id_customer = '$id_customer',
price_order ='$price_order',quantity='$quantity', date_order='$date_order' WHERE id_order='$id_order';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_order.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
