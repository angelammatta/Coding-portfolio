<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="keywords" content="CIS Restaurant, Lunch Menu">
<meta name="description" content="CIS Restaurant: Lunch Menu">
<title>CIS Restaurant Menu</title>
<link rel="stylesheet" type="text/css" href=" ../style.css">
<link rel="stylesheet" type="text/css" href=" report.css">
</head>
<body>
<div id="container">
<h2 class="blue center">Order Details</h2>


<?php
$payment_id = substr(filter_input(INPUT_GET,'payment_id',FILTER_SANITIZE_NUMBER_INT),0,8);
$rownum = 1;
 include('.../.../connect.php');

 try {
    $DBH = new PDO("mysql:host=$host;dbname=$database", $username, $password);
   }

   catch(PDOException $e) {
    echo $e->getMessage();
   }

   $sql = "SELECT * FROM order WHERE payment_id = $payment_id";
   $stmt = $DBH->prepare($sql);
   $stmt->execute();
   $result = $stmt->fetchAll();

   echo "<table class = 'table2 tablectr>'";
   echo "<tr><th>Order No</th><th>Menu Items</th><th>Quantity</th>";

   foreach($result as $row){

    echo "<tr>";
    echo "<td>$rownum</td>";
    echo "<td>" . $row['menuitem'] . "</td><td>" . $row['quantity'] . "</td>";
    echo "</tr>";
    $rownum++; 
   }

   echo "</table>";

$DBH = null;

?>
<br>
</div>

</body>
</html>

