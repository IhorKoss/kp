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
$query=mysqli_query($conn, "select * from demartment");
?>
<form action="delete_demartment.php" method="post">
   <h1 class="text">Видалити цех</h1>
   <div class="form-group">
       <label>Назва виробу</label>
       <input type='search' list='name_demartment' name="name_demartment" placeholder="name">
       <datalist id='name_demartment'>
           <?php
           while($row=mysqli_fetch_array($query))
           {
               echo "<option>$row[name_demartment]</option>";
           }
           echo "</datalist>";
           ?>
   </div>
   <button type="submit" name="submit" action="delete_demartment.php" class="btn btn-primary">Підтвердити</button>
</form>
</body>
</html>
