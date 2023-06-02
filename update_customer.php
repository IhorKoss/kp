<?php
$connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$id_customer = (isset($_POST['id_customer']) ? $_POST['id_customer'] : '');
$fullname_customer =$_POST['fullname_customer'];
$phone_customer = $_POST['phone_customer'];

$result = mysqli_query($connection,"UPDATE customer SET fullname_customer ='$fullname_customer',
phone_customer ='$phone_customer' WHERE id_customer='$id_customer';");
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
