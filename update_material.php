<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_material = (isset($_POST['id_material']) ? $_POST['id_material'] : '');
$name_material = $_POST['name_material'];
$price_material = $_POST['price_material'];
$result = mysqli_query($connection,"UPDATE material SET name_material ='$name_material',price_material ='$price_material' WHERE id_material='$id_material';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_material.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
