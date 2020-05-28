<?php
    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';
    require_once __DIR__.'/TypeMenu.php';


    if (isset($_GET['type'])){

        $typeSelected = $db -> quote($_GET['type']);

    }else{

        $typeSelected = -1;
    }


    //getting database object
    $db = new Db();

    $food = $db -> select("SELECT f.id, f.image, f.name, t.name as typeName FROM food f inner join type t on f.type = t.id where (t.id = $typeSelected or $typeSelected = -1) order by f.name");
    
    

    //render creates an html page loading things from the database
    echo $twig->render('/templates/menu.html', ['food' => $food, 'itemType' => $itemTypes]);