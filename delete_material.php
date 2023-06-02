<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$name_material = (isset($_POST['name_material']) ? $_POST['name_material'] : '');
$result = mysqli_query($connection,"DELETE FROM material WHERE name_material = '$name_material';"
);
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_material.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
