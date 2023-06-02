<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_order = (isset($_POST['id_order']) ? $_POST['id_order'] : '');
$result = mysqli_query($connection,"DELETE FROM orders WHERE id_order = '$id_order';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_order.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
