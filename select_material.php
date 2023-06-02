<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <link rel="stylesheet" href="select.css">
   <title>Матеріал</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<div class="container">
    <h1 style="text-align: center; font-family: 'Times New Roman'">Інформація по матеріалу фабрики</h1>
    <?php
    $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
    $query ="SELECT * FROM material";
    $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
    if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ID</th><th>Назва матеріалу</th><th>Ціна (грн.)</th>";
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
     <div class="butt">
        <button class="nav-btn" type="button"><a href="add_material.html">Додати</a></button>
        <button class="nav-btn" type="button"><a href="del_material.php">Видалити</a></button>
        <button class="nav-btn" type="button"><a href="search_material.php">Пошук</a></button>
        <button class="nav-btn" type="button"><a href="update_material.html">Оновлення</a></button>
        <button class="nav-btn" type="button"><a href="sort_material.html">Сортування</a></button>
     </div>
     <button class="main_btn" type="button"><a href="index.html">Головна сторінка</a></button>
</div>
</body>
</html>
