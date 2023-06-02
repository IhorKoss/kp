<?php
if(isset($_POST['submit'])){
  $id_customer = (isset($_POST['id_customer']) ? $_POST['id_customer'] : '');
   $fullname_customer =$_POST['fullname_customer'];
   $phone_customer = $_POST['phone_customer'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$query = "INSERT INTO customer (id_customer, fullname_customer, phone_customer)";
$query .="VALUES ('$id_customer','$fullname_customer','$phone_customer');";
$result = mysqli_query($connection,$query);}
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
<a href="select_customer.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>
</body>
</html>
