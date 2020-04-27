<?php
    require_once __DIR__.'/bootstrap.php';

    $menuItem = [

            'id'        =>  1,
            'image'     =>  'assets/images/bruschetta.jpg',
            'name'      =>  'Bruschetta',
            'price'     =>  '€12',
            'dishType'  =>  'Starter',
            'calories'  =>  '1500cal',
            'allergies' =>  'dairy, gluten'


    ];

    //render creates an html page loading things from the database
    echo $twig->render('/templates/details.html', ['menuItem' => $menuItem]);

    /*
    [
        'id'        =>  2,
        'image'     =>  'assets/images/cheesy_garlic_bread.jpg',
        'name'      =>  'Garlic Bread',
        'price'     =>  '€9',
        'dishType'  =>  'starter',
        'calories'  =>  '1500cal',
        'allergies' =>  'dairy, gluten'
    ],
    [
        'id'        =>  3,
        'image'     =>  'assets/images/halfchicken.jpg',
        'name'      =>  'Half Chicken',
        'price'     =>  '€5',
        'dishType'  =>  'main',
        'calories'  =>  '1500cal',
        'allergies' =>  'dairy, gluten'
    ],
    */