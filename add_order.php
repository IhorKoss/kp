<?php
if(isset($_POST['submit'])){
  $id_order = (isset($_POST['id_order']) ? $_POST['id_order'] : '');
   $id_product = $_POST['id_product'];
   $id_material = $_POST['id_material'];
   $id_customer =$_POST['id_customer'];
   $price_order =$_POST['price_order'];
   $quantity =$_POST['quantity'];
   $date_order =$_POST['date_order'];
   $connection = mysqli_connect('localhost','root','Password','furniture');
$query = "INSERT INTO orders (id_order, id_product, id_material, id_customer, price_order, quantity, date_order)";
$query .="VALUES ('$id_order','$id_product','$id_material','$id_customer', '$price_order', '$quantity', '$date_order');";
$result = mysqli_query($connection,$query); }
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
