<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<h1 class="text">Сортування цеху за назвою</h1>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$query ="select * from demartment order by name_demartment";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ID цеху</th><th>Email</th><th>Адреса</th><th>Номер телефону</th><th>Назва цеху</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 5 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
mysqli_close($connection);
?>
<a href="select_demartment.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
