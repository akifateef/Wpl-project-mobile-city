<?php 

    $to = "usamajadi@hotmail.com"; // this is your Email address  
    $Name = $_GET['first_name']['last_name'];
    $Email = $_GET['email_id'];
    $subject = "Invoice for customer from mobile city";
	$message = "$NAME.' '.$_GET['mobile_number'].' '.$_GET['cnic'].' '.$_GET['PRICE'].' '.$_GET['model].' '.$_GET['city'].' '.$_GET['address']";
	$headers = "From:" . $_GET['email_id'];
	

    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $Name . ", we will contact you shortly.";
	header(Location : invoice.php);
}
?>