<?php
//get data from form  
$name = $_POST['Name'];
$email= $_POST['Email'];
$subject= $_POST['Subject'];
$message= $_POST['Message'];

$to = "sumeetban19@gmail.com";
$subject = "Mail From sumeety.in";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: noreply@sumeety.in" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
    header("Location:thankyou.html");
}
//redirect
//
?>