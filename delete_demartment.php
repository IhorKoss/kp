<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$name_demartment = (isset($_POST['name_demartment']) ? $_POST['name_demartment'] : '');
$result = mysqli_query($connection,"DELETE FROM demartment WHERE name_demartment = '$name_demartment';" );
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_demartment.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
