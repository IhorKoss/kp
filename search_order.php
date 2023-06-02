<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
   <form  method="post">
       <h1 class="text">Пошук замовлення</h1>
        <div class="form-group">
               <label>ID замовлення</label>
               <input type="text" class="form-control" name="id_order" placeholder="number">
        </div>
       <button type="submit" name="submit"  class="btn btn-primary">Підтвердити</button>
       <p> </p>
       <a href="select_order.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
       </form>
</body>
</html>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_order = (isset($_POST['id_order']) ? $_POST['id_order'] : '');
$query ="select * FROM orders WHERE id_order = '$id_order';";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result)
{
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
   mysqli_free_result($result);}
mysqli_close($connection);
?>
