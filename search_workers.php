<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="./file.css">
</head>
<body>
<div class="container">
<?php
    $conn = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
    if(mysqli_connect_errno()) {
       echo "Помилка".mysqli_connect_error();}
    $query=mysqli_query($conn, "select * from workers");
    ?>
    <form class="form" method="post">
                   <h1 class="text">Пошук працівника</h1>
                       <div class="form-group">
                            <div class="form-inputs">
                               <label class="form-label">ID працівника</label>
                               <input class="form-control" type='search' list='id_worker' name="id_worker" placeholder="ID">
                            </div>
                           <datalist id='id_worker'>
                               <?php
                               while($row=mysqli_fetch_array($query))
                               {
                                   echo "<option>$row[id_worker]</option>";
                               }
                               echo "</datalist>";
                               ?>
                       </div>
                   <button type="submit" name="submit"  class="nav-btn" style="margin-bottom: 20px;">Підтвердити</button>
                   <button class="main_btn" type="button"><a href="./select_workers.php">Назад</a></button>
                </form>

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
</div>

</body>
</html>