<?php

$name = $_POST['name'];
$email= $_POST['email'];
$sub=$_POST['sub'];
$message= $_POST['message'];
$to = "ratanojha10@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $sub ."\r\n Message =" . $message;
$headers="Website";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}

header("Location: contact.html");
?>