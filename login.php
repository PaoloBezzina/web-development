<?php

    //renders login page

    require_once __DIR__.'/bootstrap.php';

    echo $twig->render('/templates/login.html');

?>