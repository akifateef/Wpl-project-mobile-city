<?php 
if(isset($_POST['submit'])){
    $to = "usamajadi.com"; // this is your Email address  
    $Name = $_POST['userName'];
    $Email = $_POST['userEmail'];
	
    $subject = $_POST['subject'];
    $message = $_POST['userMsg'];
     $headers = "From:" . $Email;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $Name . ", we will contact you shortly.";
	header(Location : contact.html);
}
?>