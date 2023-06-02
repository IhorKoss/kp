<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
   <h1 class="text">Сортування виробу за вибраним атрибутом</h1>
</head>
<body>
<?php
if(isset($_POST['name_product'])){
   $name_product = $_POST['name_product'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $result = mysqli_query($connection, "select * from product order by name_product;"); }
else {
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $price_product = (isset($_POST['price_product']) ? $_POST['price_product'] : '');
   $result = mysqli_query($connection,"select * from product order by price_product;");}
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>ID цеху</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 4 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
?>
<a href="select_product.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
