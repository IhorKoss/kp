<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<?php
$conn = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
if(mysqli_connect_errno())
{
   echo "Помилка".mysqli_connect_error();
}
$query=mysqli_query($conn, "select * from material");
?>
<div class="container">
   <form class="form" action="delete_material.php" method="post">
      <h1 class="text">Видалити матеріал</h1>
      <div class="form-group">
         <div class="form-inputs">
             <label class="form-label">Назва матеріалу</label>
             <input type='search' list='name_material' name="name_material" placeholder="name">
         </div>
          <datalist id='name_material'>
             <?php
              while($row=mysqli_fetch_array($query))
              {
                 echo "<option>$row[name_material]</option>";
             }
             echo "</datalist>";
             ?>
      </div>
      <button type="submit" name="submit" action="delete_material.php" class="nav-btn">Підтвердити</button>
   </form>
</div>
</body>
</html>
