

<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>Mobile City | Invoice</title>

    <link rel="stylesheet" href="css2/style.css">

</head>

<body>
<?php
//$pri = $_GET['pr'];
//$mob_name = $_GET['model']; 
//$vender_name = $_GET['bn'];?>

<?php

$first_name1 = $_GET['first_naam'];
$last_name1 = $_GET['last_naam'];
$phone_num1 = $_GET['phone_no'];
$mobile_num1 = $_GET['mobile_number'];
$add1 = $_GET['address'];
$city = $_GET['city'];
$cnic = $_GET['cnic'];
$email_id = $_GET['email_id'];
$price = $_GET['PRICE'];
$model=$_GET['model'];



  


//include('invoice_mail_handler.php');
include('con_db.php');

$query = "INSERT INTO user_data(ph_no,first_name,address,price,cnic,email,last_name,mobile_number,city,mobile_name_model,date) 
VALUES(".$phone_num1.",'".$first_name1."','".$add1."','".$price."','".$cnic."','".$email_id."','".$last_name1."','".$mobile_num1."','".$city."','".$model."',now())";


mysql_query($query) or die(mysql_error());

echo "A Mail Has Been Sent To Your Account From MOBILE CITY";

mysql_close();


?>


  <div class="container">

  <div id="login-form">

    <h3>INVOICE</h3>

    <fieldset>

      <form action="invoice.php" method="GET">
	 <h4 align="center" style="color: #600000; "> 
	<?php echo htmlspecialchars($model); ?> <br>
	<?php echo htmlspecialchars($price); ?>
	  </h4>
        <input type="text" name="first_naam" readonly="readonly" value="<?php echo $first_name1;  ?>">


        <input type="text"  name="last_naam" readonly="readonly" value="<?php echo $last_name1; ?>">

        <input type="text"  name="mobile_number" readonly="readonly" value="<?php echo $mobile_num1; ?>">  

        <input type="text" name="phone_no" readonly="readonly" value="<?php echo $phone_num1; ?>">

        <input type="text"  name="address" readonly="readonly" value="<?php echo $add1; ?>">

        <input type="text"  name="email_id" readonly="readonly" value="<?php echo $email_id; ?>">

        <input type="text"  name="city" readonly="readonly" value="<?php echo $city; ?>">

        <input type="text"  name="cnic" readonly="readonly" value="<?php echo $cnic; ?>">   

		<input type="text"  name="PRICE" readonly="readonly"  value="Model: <?php echo $price; ?>">
		

		<input type="text"  name="model" readonly="readonly"  value="Price: <?php echo $model; ?>">		
	<br><br>
       <center> <input type="button" style="font-size:15pt;color: #fff;background-color:red"  value="HOME"  onclick="window.location.href='index.php'" > 
</center>        <footer class="clearfix">

        </footer>

      </form>

    </fieldset>

  </div> <!-- end login-form -->

</div>



</body>

</html>