<?php

    require_once __DIR__.'/Bootstrap.php';

    /* Namespace alias. */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    /* Include the Composer generated autoload.php file. */
    require './vendor/autoload.php';

    /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
    $mail = new PHPMailer(TRUE);

    //setting variables from user input data from form

    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    //contructing email assets

    $recipient = "tapinurestaurant@gmail.com";
    $recipientName = "Ta' Pinu Restaurant";
    $subject = "Contact Form";
    $mailheader = "From: $name $surname $email \r\n";
    $formcontent="To: $recipientName \n\nMessage: $message \n\n$mailheader";
    


    /* Open the try/catch block. */
    try {
        /* Set the mail sender. */
        $mail->setFrom($email, "$name $surname");

        /* Add a recipient. */
        $mail->addAddress($recipient, $recipientName);

        /* Set the subject. */
        $mail->Subject = $subject;

        //Set the mail message body. 
        $mail->Body = $formcontent;
        
        /* SMTP parameters. */
   
        //Tells PHPMailer to use SMTP.
        $mail->isSMTP();

        /* 
        To test if email has been sent or not
        $mail->SMTPDebug = 2;
        */
   
        // SMTP server address.
        $mail->Host = 'smtp.gmail.com';//'smtp.empire.com';

        // Use SMTP authentication.
        $mail->SMTPAuth = TRUE;
   
        //Set the encryption system.
        $mail->SMTPSecure = 'tls';
   
        //SMTP authentication username.
        $mail->Username = 'tapinurestaurant@gmail.com';
   
        //SMTP authentication password.
        $mail->Password = 'icqdjutisaassnyl';
   
        //Set the SMTP port.
        $mail->Port = 587;

        //Finally send the mail.
        $mail->send();

        $isSent = TRUE;

    }catch (Exception $e){

    // PHPMailer exception.
        echo $e-> errorMessage();

        $isSent = FALSE;

    }catch (\Exception $e){

    // PHP exception
        echo $e-> errorMessage();

        $isSent = FALSE;
    }

    //renders the correct page according to wheter the email was sent succesfully or not 
    if($isSent==TRUE){
        echo $twig->render('/templates/emailSent.html');
    }else{
        echo $twig->render('/templates/emailError.html', ['error' => $e]);
    }

?> 
