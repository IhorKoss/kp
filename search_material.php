<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
if(mysqli_connect_errno()) {
   echo "Помилка".mysqli_connect_error();}
$query=mysqli_query($conn, "select * from material");
?>
   <form  method="post">
       <h1 class="text">Пошук матеріалу</h1>
       <div class="form-group">
           <label>Назва матеріалу</label>
           <input type='search' list='name_material' name="name_material" placeholder="name">
           <datalist id='name_material'>
               <?php
               while($row=mysqli_fetch_array($query))
               {
                   echo "<option>$row[name_material]</option>";
               }
               echo "</datalist>";
               ?>
       </div>
       <button type="submit" name="submit"  class="btn btn-primary">Підтвердити</button>
       <p> </p>
       <a href="select_material.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
       </form>
</body>
</html>
<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$name_material = (isset($_POST['name_material']) ? $_POST['name_material'] : '');
$query ="select * FROM material WHERE name_material = '$name_material';";
$result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
if($result)  {
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
   mysqli_free_result($result); }
mysqli_close($connection);
?>
