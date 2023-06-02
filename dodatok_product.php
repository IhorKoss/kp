<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<h1 class="text">Вибірка в таблиці вироби</h1>
<?php
if(isset($_POST['demartment'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.id_product,product.name_product,product.price_product,demartment.name_demartment,demartment.email, demartment.address_demartment,demartment.phone_demartment from product inner join demartment on product.id_demartment=demartment.id_demartment;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>Назва цеху</th><th>Email цеху</th><th>Адреса цеху</th><th>Номер телефону цеху</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 7 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['name_demartment'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.id_product,product.name_product,product.price_product,demartment.name_demartment from product inner join demartment on product.id_demartment=demartment.id_demartment;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>Назва цеху</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 4 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['email'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.id_product,product.name_product,product.price_product,demartment.email from product inner join demartment on product.id_demartment=demartment.id_demartment;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>Email цеху</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 4 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['address_demartment'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.id_product,product.name_product,product.price_product,demartment.address_demartment from product inner join demartment on product.id_demartment=demartment.id_demartment;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>Адреса цеху</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 4 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['phone_demartment'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.id_product,product.name_product,product.price_product,demartment.phone_demartment from product inner join demartment on product.id_demartment=demartment.id_demartment;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD</th><th>Назва виробу</th><th>Ціна з одиницю</th><th>Номер телефону цеху</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 4 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
?>
<p> </p>
<a href="select_product.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
