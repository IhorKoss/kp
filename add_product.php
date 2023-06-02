<?php
if(isset($_POST['submit'])){
  $id_product = (isset($_POST['id_product']) ? $_POST['id_product'] : '');
   $name_product = $_POST['name_product'];
   $price_product = $_POST['price_product'];
   $id_demartment =$_POST['id_demartment'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');

$query = "INSERT INTO product (id_product, name_product, price_product, id_demartment)";
$query .="VALUES ('$id_product','$name_product','$price_product','$id_demartment');";

$result = mysqli_query($connection,$query);
}
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="./file.css">
</head>
<body>
<a href="select_product.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
