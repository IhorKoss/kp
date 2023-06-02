<?php
if(isset($_POST['submit'])){
  $id_demartment = (isset($_POST['id_demartment']) ? $_POST['id_demartment'] : '');
   $email = $_POST['email'];
   $address_demartment = $_POST['address_demartment'];
   $phone_demartment = $_POST['phone_demartment'];
   $name_demartment = $_POST['name_demartment'];
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
$query = "INSERT INTO demartment (id_demartment, email, address_demartment, phone_demartment, name_demartment)";
$query .="VALUES ('$id_demartment','$email','$address_demartment','$phone_demartment','$name_demartment');";
$result = mysqli_query($connection,$query);}
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
