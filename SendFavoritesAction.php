<?php

    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';

    /* Namespace alias. */
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    /* Include the Composer generated autoload.php file. */
    require './vendor/autoload.php';

    session_start();

    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        $db = new Db();
        $user = $db -> quote($username);
        $dishesresult = $db -> select("SELECT fd.*, t.name as typeName from food fd inner join type t on fd.type = t.id, favorites fav WHERE fav.username =".$user." AND fav.foodId = fd.id");

        $dishes = array(array());
        $menuItem = array();
        $message = "";

        for($d = 0; $d < count($dishesresult); $d++){

            $menuItem = [
                //'id'                => $dishesresult[$d]['id'],
                'typeName'          => $dishesresult[$d]['typeName'],
                //'image'             => $dishesresult[$d]['image'],
                'name'              => $dishesresult[$d]['name'],
                'price'             => $dishesresult[$d]['price'],
                'diet'              => $dishesresult[$d]['diet'],
                'calories'          => $dishesresult[$d]['calories'],
                'allergies'         => $dishesresult[$d]['allergies'],
            ];

            array_push($dishes, $menuItem);

        /*save items fund from query in array */
        }
    

    /* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
    $mail = new PHPMailer(TRUE);

    //$implodedDishes = print_r($dishes, true);

    foreach($dishes as $menuItem => $item ){
        foreach($item as $key => $val){
            //echo nl2br($val.' is the '.$key.' '.$menuItem."\r\n");
            $message .= $key.':  '.$val.PHP_EOL;
        }

        $message .= PHP_EOL;
    }

    $recipient = $_POST['email'];
    $recipientName = $_SESSION['username'];
    $sender = "tapinurestaurant@gmail.com";
    $senderName = "Ta' Pinu Restaurant"; 
    $subject = "Favorite Items";

    /* Open the try/catch block. */
    try {
        /* Set the mail sender. */
        $mail->setFrom($sender, "$senderName");

        /* Add a recipient. */
        $mail->addAddress($recipient, $recipientName);

        /* Set the subject. */
        $mail->Subject = $subject;

        /* Set the mail message body. */
        $mail->Body = $message;
        
        /* SMTP parameters. */
   
        /* Tells PHPMailer to use SMTP. */
        $mail->isSMTP();

        /* 
        To test if email has been sent or not
        $mail->SMTPDebug = 2;
        */
   
        /* SMTP server address. */
        $mail->Host = 'smtp.gmail.com';//'smtp.empire.com';

        /* Use SMTP authentication. */
        $mail->SMTPAuth = TRUE;
   
        /* Set the encryption system. */
        $mail->SMTPSecure = 'tls';
   
        /* SMTP authentication username. */
        $mail->Username = 'tapinurestaurant@gmail.com';
   
        /* SMTP authentication password. */
        $mail->Password = 'icqdjutisaassnyl';
   
        /* Set the SMTP port. */
        $mail->Port = 587;   

        /* Finally send the mail. */
        $mail->send();


        $isSent = TRUE;

    }catch (Exception $e){

    /* PHPMailer exception. */
        echo $e-> errorMessage();

        $isSent = FALSE;

    }catch (\Exception $e){

    /* PHP exception (note the backslash to select the global namespace Exception class). */
        echo $e-> errorMessage();

        $isSent = FALSE;
    }

    if($isSent==TRUE){
        echo $twig->render('/templates/emailSent.html');
    }else{
        echo $twig->render('/templates/emailError.html', ['error' => $e]);
    }

}

?> 