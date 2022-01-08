<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$to = "bsk68270@gmail.com";
$subject = "Mail to Baasankhuu website";
$txt = "Name = ",$name."\r\n Email = ".$email . "\r\n Message = " . $message;
$headers = "From: noreply@baaskaa_funny_kid.com" . "\r\n"."CC: somebodyelse@example.com";
if($email!=null){
    mail($to,$subject,$txt,$headers);
}
header("Location:okey.html")
?>