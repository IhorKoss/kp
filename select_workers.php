<!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="select.css">
   <title>Працівники</title>
   <meta charset="utf-8">
   <link rel="stylesheet" href="file.css">
</head>
<body>
<div class="container">
  <h1 style="text-align: center; font-family: 'Times New Roman'">Інформація по працівниках фабрики</h1>
  <?php
  $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
  $query ="SELECT * FROM workers";
  $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
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
  mysqli_close($connection);
  ?>
    <div class="butt">
      <button class="nav-btn" type="button" ><a href="add_workers.html">Додати</a></button>
      <button class="nav-btn" type="button" ><a href="delete_workers.html">Видалити</a></button>
      <button class="nav-btn" type="button" ><a href="search_workers.php">Пошук</a></button>
      <button class="nav-btn" type="button" ><a href="update_workers.html">Оновлення</a></button>
      <button class="nav-btn" type="button" ><a href="sort_workers.html">Сортування</a></button>
      <button class="nav-btn" type="button" ><a href="dodatok_workers.html">Додатково</a></button>
    </div>
    <button class="main_btn" type="button"><a href="index.html">Головна сторінка</a></button>
</div>
</body>
</html>
