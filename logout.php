<?php 

    //renders logout page

    require_once __DIR__.'/Bootstrap.php';

    session_start();

    echo $twig->render('/templates/logout.html', ['username' => $_SESSION['username']]);

?>