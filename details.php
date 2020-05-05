<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    

    //getting database object

    if(isset($_GET['a'])){


        $db = new Db();
        $menuItemId = $db -> quote($_GET['a']);
        $result = $db -> select("SELECT f.*, t.name as typeName FROM food f inner join type t on f.type = t.id WHERE f.id = ". $menuItemId );

        if (count($result) > 0){
            
            //result has been found
            $menuItem = [
                'id'                => $result[0]['id'],
                'typeName'          => $result[0]['typeName'],
                'image'             => $result[0]['image'],
                'name'              => $result[0]['name'],
                'price'             => $result[0]['price'],
                'diet'              => $result[0]['diet'],
                'calories'          => $result[0]['calories'],
                'allergies'         => $result[0]['allergies'],
            ];

            //render creates an html page loading things from the database
            echo $twig->render('/templates/details.html', ['menuItem' => $menuItem]);

        }else{
            echo $twig->render('/templates/error404.html');
        }

    }
