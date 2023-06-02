<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
   <h1 class="text">Сортування працівників за вибраним атрибутом</h1>
</head>
<body>
<?php
if(isset($_POST['fullname_worker'])){
   $fullname_worker= $_POST['fullname_worker'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $result = mysqli_query($connection, "select * from workers order by fullname_worker;"); }
else {
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $specialist_worker = (isset($_POST['specialist_worker']) ? $_POST['specialist_worker'] : '');
   $result = mysqli_query($connection,"select * from workers order by specialist_worker;");}
if($result) {
   $rows = mysqli_num_rows($result);
   echo "<table><tr><th>ID</th><th>ID цеху</th><th>ПІБ працівника</th><th>Адреса</th><th>Номер телефону</th><th>Посада</th>";
   for ($i = 0 ; $i < $rows ; ++$i)
   {
       $row = mysqli_fetch_row($result);
       echo "<tr>";
       for ($j = 0 ; $j < 6 ; ++$j) echo "<td> $row[$j]</td>";
       echo "</tr>";
   }
   echo "</table>";
   mysqli_free_result($result); }
?>
<a href="select_workers.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
