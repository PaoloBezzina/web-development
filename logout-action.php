<?php

    require_once __DIR__.'/bootstrap.php';
    
    $message = array();

    session_start();
    unset($_SESSION['username']);
    session_destroy();
    array_push($message, "You have logged out");

    echo $twig -> render('/templates/outcome.html', ['outcome' => $message]);
?>