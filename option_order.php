<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <title>Document</title>
   <link rel="stylesheet" href="file.css">
</head>
<body>
   <form  method="post">
       <h1 class="text">Вибірка бази даних</h1>
       <table class="table table-bordered table-hover">
           <?php
           $check_list = $_POST['check_list'];
           $usertable = "orders";
           $namedict = [
               "product.id_product" => "ID виробу",
               "product.name_product" => "Назва виробу",
               "product.price_product" => "Ціна виробу",

               "material.id_material" => "ID матеріалу",
               "material.name_material" => "Назва матеріалу",
               "material.price_material" => "Ціна матеріалу",

               "customer.id_customer" => "ID клієнта",
               "customer.fullname_customer" => "ПІБ клієнта",
               "customer.number_customer" => "Номер телефону клієнта",

               "orders.id_order" => "ID замовлення",
               "orders.id_product" => "ID виробу",
               "orders.id_material" => "ID матеріалу",
               "orders.id_customer" => "ID клієнта",
               "orders.price_order" => "Ціна замовлення за одининцю",
               "orders.quantity" => "Кількість",
               "orders.date_order" => "Дата замовлення",
           ];
           print "<thead><tr>";
           foreach ($check_list as $item) {
               echo "<th>";
               print($namedict[$item]);
               echo "</th>";
           }
           print "</tr></thead><tbody>";
           $selected = implode(", ", $check_list);
           $connection = mysqli_connect("localhost", "root", "igor12345kos54321!", "furniture");
           $query = "SELECT $selected FROM orders INNER JOIN product ON orders.id_product=product.id_product INNER JOIN material ON orders.id_material=material.id_material INNER JOIN customer ON orders.id_customer=customer.id_customer;";
           $result = mysqli_query($connection, $query) or die("Помилка " . mysqli_error($connection));
           if ($result) {
               $result = mysqli_fetch_all($result);
               foreach ($result as $row) {
                   echo "<tr>";
                   foreach ($row as $item) {
                       echo "<td>";
                       print($item);
                       echo "</td>";
                   }
                   echo "</tr>";
               }
               mysqli_close($connection);
           }
           ?>
       </tbody>
       </table>
       <a href="index.html"><h1 class="text">Повернутись на головну сторінку</h1></a>
       </form>
</body>
</html>
