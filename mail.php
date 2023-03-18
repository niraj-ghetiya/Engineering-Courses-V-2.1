<?php
//get data from form  

// $name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$subject= $_POST['subject'];
$to = "gtubook@yahoo.com";
// $subject = "Mail From website";
$txt =" Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    echo'ok';
}
//redirect
header("Location:index.php");
?>