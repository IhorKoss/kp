<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
<h1 class="text">Кількість замовлень</h1>
<?php
if(isset($_POST['dodatok'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select orders.id_order,product.name_product,product.price_product,material.name_material,material.price_material,customer.fullname_customer, customer.phone_customer,orders.price_order, orders.quantity,orders.date_order from orders inner join product,material,customer on orders.id_product=product.id_product, orders.id_material=material.id_material, orders.id_customer=customer.id_customer;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ІD замовлення</th><th>Назва виробу</th><th>Ціна виробу за одиницю</th><th>Назва матеріалу</th><th>Ціна матеріалу за одиницю</th><th>ПІБ клієнта</th><th>Номер телефону клієнта</th><th>Ціна замовлення за одиницю</th><th>Кількість</th><th>Дата замовлення</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 10 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['product'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select product.name_product, count(orders.id_order) as NumberOfOrders from orders left join product on orders.id_product=product.id_product group by name_product;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>Назва виробу</th><th>К-сть замовлень</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 2 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['material'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select material.name_material, count(orders.id_order) as NumberOfOrders from orders left join material on orders.id_material=material.id_material group by name_material;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>Назва матеріалу</th><th>К-сть замовлень</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 2 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
if(isset($_POST['customer'])){
   $connection = mysqli_connect('localhost','root','igor12345kos54321!','furniture');
   $query ="select customer.fullname_customer, count(orders.id_order) as NumberOfOrders from orders left join customer on orders.id_customer=customer.id_customer group by fullname_customer;";
   $result = mysqli_query($connection, $query) or die("Помилка" . mysqli_error($connection));
   if($result) {
       $rows = mysqli_num_rows($result);
       echo "<table><tr><th>ПІБ клієнта</th><th>К-сть замовлень</th>";
       for ($i = 0 ; $i < $rows ; ++$i)
       {
           $row = mysqli_fetch_row($result);
           echo "<tr>";
           for ($j = 0 ; $j < 2 ; ++$j) echo "<td> $row[$j]</td>";
           echo "</tr>";
       }
       echo "</table>";
       mysqli_free_result($result); }}
mysqli_close($connection);
?>
<p> </p>
<a href="select_order.php"><h1 class="text">Повернутись до попередньої сторінки</h1></a>

</body>
</html>
