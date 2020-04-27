<?php
    require_once __DIR__.'/bootstrap.php';

    $food = [
        [
            'id'        =>  1,
            'image'     =>  'assets/images/bruschetta.jpg',
            'name'      =>  'Bruschetta',
            'price'     =>  '€12',
            'dishType'  =>  'starter'
        ],
        [
            'id'        =>  2,
            'image'     =>  'assets/images/cheesy_garlic_bread.jpg',
            'name'      =>  'Garlic Bread',
            'price'     =>  '€9',
            'dishType'  =>  'starter'
        ],
        [
            'id'        =>  3,
            'image'     =>  'assets/images/halfchicken.jpg',
            'name'      =>  'Half Chicken',
            'price'     =>  '€5',
            'dishType'  =>  'main'
        ],
    ];

    //render creates an html page loading things from the database
    echo $twig->render('/templates/menu.html', ['food' => $food]);