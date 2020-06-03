<?php
    require_once __DIR__.'/Bootstrap.php';

    //array storing data of staff
    $staff = [
        [
            'id'        =>  1,
            'name'      =>  'Malcolm Agius',
            'image'     =>  'assets/images/malcolm.jpg',
            'bio'       =>  "Mr. Agius is the founder and owner of Ta' Pinu Restaurant. Although he is the owner, he is still a huge asset in the day-to-day running of our Restaurant as he constantly helps in the preparation of dishes and serves food when the Restauant is busy."
        ],
        [
            'id'        =>  2,
            'name'      =>  'Benjamin Bezzina',
            'image'     =>  'assets/images/ben.jpg',
            'bio'       =>  "Mr. Bezzina is the Head Chef at Ta' Pinu Restaurant which from years of experience has never failed to delight customers by preparing dishes the traditional way."
        ],
        [
            'id'        =>  3,
            'name'      =>  'Paolo Bezzina',
            'image'     =>  'assets/images/paolo.jpg',
            'bio'       =>  "Mr. Bezzina is an Assistant Manager at Ta' Pinu Restaurant who waits at tables during opening hours and also works on accounts and many other manegerial tasks along with his father Christopher when not at work."
        ],
    ];

    //render creates an html page loading things from the database
    echo $twig->render('/templates/about-us.html', ['staff' => $staff]);

        
