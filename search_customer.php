<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
   <form  method="post">
       <h1 class="text">Пошук клієнта</h1>
        <div class="form-group">
               <label>ID клієнта</label>
               <input type="text" class="form-control" name="id_customer" placeholder="number">
        </div>
       <button type="submit" name="submit"  class="btn btn-primary">Підтвердити</button>
       <p> </p>
       <a href="select_customer.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
       </form>
</body>
</html>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_customer = (isset($_POST['id_customer']) ? $_POST['id_customer'] : '');
$query ="select * FROM customer WHERE id_customer = '$id_customer';";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result)
{
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
   mysqli_free_result($result);}
mysqli_close($connection);
?>
