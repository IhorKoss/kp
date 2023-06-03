<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_worker = (isset($_POST['id_worker']) ? $_POST['id_worker'] : '');
$result = mysqli_query($connection,"DELETE FROM workers WHERE id_worker = '$id_worker';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="./file.css">
</head>
<body>
<a href="select_workers.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
