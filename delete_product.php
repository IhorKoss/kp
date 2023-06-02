<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$name_product = (isset($_POST['name_product']) ? $_POST['name_product'] : '');
$result = mysqli_query($connection,"DELETE FROM product WHERE name_product = '$name_product';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
   <link rel="stylesheet" href="./file.css">
</head>
<body>
<a href="select_product.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
