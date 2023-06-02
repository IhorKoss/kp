<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
   <h1 class="text">Сортування матеріалу за вибраним атрибутом</h1>
</head>
<body>
<?php
if(isset($_POST['name_material'])){
   $name_material = $_POST['name_material'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $result = mysqli_query($connection, "select * from material order by name_material;"); }
else {
       $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
       $price_material = (isset($_POST['price_material']) ? $_POST['price_material'] : '');
       $result = mysqli_query($connection,"select * from material order by price_material;");}
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ID</th><th>Назва матеріалу</th><th>Ціна (грн.)</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 3 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
?>
<a href="select_material.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
