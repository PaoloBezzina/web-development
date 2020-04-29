<?php


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $formcontent="From: $name \n Message: $message";
    $recipient = "paolobezzina@outlook.com";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";
    mail($recipient, $subject, $formcontent, $mailheader, '-fpaolobezzina@outlook.com') or die("Error!");
    echo "message has been sent"
    
?>