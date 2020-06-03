<?php

    //renders home page

    require_once __DIR__.'/Bootstrap.php';
    
    echo $twig->render('/templates/home.html');

