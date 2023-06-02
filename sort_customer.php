<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<h1 class="text">Сортування клієнтів за ПІБ</h1>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$query ="select * from customer order by fullname_customer";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ID</th><th>ПІБ</th><th>Номер телефону</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 3 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
mysqli_close($connection);
?>
<a href="select_customer.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
