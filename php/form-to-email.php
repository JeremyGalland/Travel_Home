<?php
if(!isset($_POST['submit']))
{
    //This page should not be accessed directly. Need to submit the form.
    echo "error; you need to submit the form!";
}
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


//Validate first
if(empty($name)||empty($visitor_email))
{
    echo "Name and email are mandatory!";
    exit;
}

$email_from = "jeremy.galland@efrei.net";
$email_subject = "Newsletter - Jérémy's travelling blog #1";
$email_body = "You have received a new message from the user $name.\n".
    "email address: $visitor_email\n".
    "Here is the message:\n $message".

$to = "jeremygalland@free.fr";
$headers = "From: $email_from \r\n";

//Send the email!
mail($to,$email_subject,$email_body,$headers);
//done.redirect to home page.
?>