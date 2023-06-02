<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_customer = (isset($_POST['id_customer']) ? $_POST['id_customer'] : '');
$result = mysqli_query($connection,"DELETE FROM customer WHERE id_customer = '$id_customer';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_customer.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
