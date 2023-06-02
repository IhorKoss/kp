<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!', 'furniture');
$id_worker = (isset($_POST['id_worker']) ? $_POST['id_worker'] : '');
$id_demartment = $_POST['id_demartment'];
$fullname_worker =$_POST['fullname_worker'];
$address_worker =$_POST['address_worker'];
$phone_worker = $_POST['phone_worker'];
$specialist_worker =$_POST['specialist_worker'];

$result = mysqli_query($connection,"UPDATE workers SET id_demartment ='$id_demartment', fullname_worker = '$fullname_worker',
address_worker ='$address_worker',phone_worker ='$phone_worker', specialist_worker ='$specialist_worker' WHERE id_worker='$id_worker';");
?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<a href="select_workers.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
