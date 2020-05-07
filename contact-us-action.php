
<?php


    /* Namespace alias. */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    /* Include the Composer generated autoload.php file. */
    require 'C:\xampp\htdocs\vendor\autoload.php';

    /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
    $mail = new PHPMailer(TRUE);


    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $formcontent="From: $name \n Message: $message";
    $recipient = "paolobezzina@outlook.com";
    $recipientName = "Ta' Pinu Restaurant";
    $subject = "Contact Form";
    $mailheader = "From: $email \r\n";


    /* Open the try/catch block. */
    try {
        /* Set the mail sender. */
        $mail->setFrom($email, $name);

        /* Add a recipient. */
        $mail->addAddress($recipient, $recipientName);

        /* Set the subject. */
        $mail->Subject = $subject;

        /* Set the mail message body. */
        $mail->Body = $formcontent;
        
        /* SMTP parameters. */
   
        /* Tells PHPMailer to use SMTP. */
        $mail->isSMTP();
   
        /* SMTP server address. */
        $mail->Host = 'smtp.gmail.com';//'smtp.empire.com';

        /* Use SMTP authentication. */
        $mail->SMTPAuth = TRUE;
   
        /* Set the encryption system. */
        $mail->SMTPSecure = 'tls';
   
        /* SMTP authentication username. */
        $mail->Username = 'tapinurestaurant@gmail.com';
   
        /* SMTP authentication password. */
        $mail->Password = 'TPRbpm418';
   
        /* Set the SMTP port. */
        $mail->Port = 587;

        /* Finally send the mail. */
        $mail->send();
    }
        catch (Exception $e)
    {
    /* PHPMailer exception. */
        echo $e->errorMessage();
    }
        catch (\Exception $e)
    {
    /* PHP exception (note the backslash to select the global namespace Exception class). */
        echo $e->getMessage();
    }
?> 
