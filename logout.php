<?php 

    require_once __DIR__.'/bootstrap.php';

    session_start();

    echo $twig->render('/templates/logout.html', ['username' => $_SESSION['username']]);

?>