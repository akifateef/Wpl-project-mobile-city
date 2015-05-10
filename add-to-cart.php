<!DOCTYPE html>
<html>
<body>
<?php 
session_start();

echo session_id();

$i = $i+1;
$age=array();
$naaam_model = $_GET['model'];
$brand= $_GET['brand'];
$price  = $_GET['price'];
$id  = $_GET['id'];

echo $i;
?>

<a href='preview.php?id=<?php echo $id ?>'>want to buy this or go back</a>;


<?php



echo $naaam_model;
echo $brand;
echo $price;




//unset($_SESSION['cart']);
//session_destroy();
?>
</body>
</html>
