<?php
//Step1
 $db = mysqli_connect('localhost','Gabba1','Biamwu123!@#','https://c-gerhaylx.aserv.co.za:2083/cpsess8222686962/3rdparty/phpMyAdmin/sql.php?db=gerhaylx_GCoetzee_Email_Form&table=Portfolio_Address_Form&token=22a75f9abbd9371f8f9cc1fc02de91e5')
 or die('Error connecting to MySQL server.');
?>

<html>
 <head>
 </head>
 <body>
 <h1>PHP connect to MySQL</h1>

<?php
//Step2
$query = "SELECT * FROM Portfolio_Address_Form";
mysqli_query($db, $query) or die('Error querying database.');
?>
</body>
</html>
