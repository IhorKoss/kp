<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
   <form  method="post">
       <h1 class="text">Пошук працівника</h1>
        <div class="form-group">
               <label>ID працівника</label>
               <input type="text" class="form-control" name="id_worker" placeholder="0">
        </div>
       <button type="submit" name="submit"  class="btn btn-primary">Підтвердити</button>
       <p> </p>
       <a href="select_workers.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
       </form>
</body>
</html>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_worker = (isset($_POST['id_worker']) ? $_POST['id_worker'] : '');
$query ="select * FROM workers WHERE id_worker = '$id_worker';";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result)
{
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
   mysqli_free_result($result);}
mysqli_close($connection);
?>
