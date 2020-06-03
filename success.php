<?php  
    
    //renders success page

    require_once __DIR__.'/Bootstrap.php';

    echo $twig->render('/templates/success.html');
?>