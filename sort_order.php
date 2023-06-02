<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
   <h1 class="text">Сортування замовлень за вибраним атрибутом</h1>
</head>
<body>
<?php
if(isset($_POST['quantity'])){
   $quantity = $_POST['quantity'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $result = mysqli_query($connection, "select * from orders order by quantity;"); }
else {
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $date_order = (isset($_POST['date_order']) ? $_POST['date_order'] : '');
   $result = mysqli_query($connection,"select * from orders order by date_order;");}
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ID замовлення</th><th>ID виробу</th><th>ID матеріалу</th><th>ID клієнта</th><th>Ціна (грн.)</th><th>Кількість</th><th>Дата замовлення</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 7 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
?>
<a href="select_order.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
