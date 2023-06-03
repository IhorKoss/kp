<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<div class="container">
    <?php
    $conn = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
    if(mysqli_connect_errno()) {
       echo "Помилка".mysqli_connect_error();}
    $query=mysqli_query($conn, "select * from customer");
    ?>
    <form class="form" method="post">
                   <h1 class="text">Пошук клієнта</h1>
                       <div class="form-group">
                            <div class="form-inputs">
                               <label class="form-label">ID клієнта</label>
                               <input class="form-control" type='search' list='id_customer' name="id_customer" placeholder="ID">
                            </div>
                           <datalist id='id_customer'>
                               <?php
                               while($row=mysqli_fetch_array($query))
                               {
                                   echo "<option>$row[id_customer]</option>";
                               }
                               echo "</datalist>";
                               ?>
                       </div>
                   <button type="submit" name="submit"  class="nav-btn" style="margin-bottom: 20px;">Підтвердити</button>
                   <button class="main_btn" type="button"><a href="./select_customer.php">Назад</a></button>
                </form>
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
