<?php
    require_once __DIR__.'/bootstrap.php';

    $staff = [
        [
            'id'        =>  1,
            'name'      =>  'Christopher Sciberras',
            'image'     =>  'assets/images/temp_image_1.jpg',
            'bio'       =>  "Mr. Christopher Sciberras is the founder and owner of Ta' Pinu Restaurant. Although he is the owner, he is still a huge asset in the day-to-day running of our Restaurant as he constantly helps in the preparation of dishes and serves food when the Restauant is busy."
        ],
        [
            'id'        =>  2,
            'name'      =>  'Sonia Sciberras',
            'image'     =>  'assets/images/temp_image_2.jpg',
            'bio'       =>  "Mrs. Sonia Sciberras is the Head Chef at Ta' Pinu Restaurant which from years of experience has never failed to delight customers by preparing dishes the traditional way."
        ],
        [
            'id'        =>  3,
            'name'      =>  'Nicholas Sciberras',
            'image'     =>  'assets/images/temp_image_3.jpg',
            'bio'       =>  "Mr. Nicholas Sciberras is an Assistant Manager at Ta' Pinu Restaurant who waits at tables during opening hours and also works on accounts and many other manegerial tasks along with his father Christopher when not at work."
        ],
    ];

    //render creates an html page loading things from the database
    echo $twig->render('/templates/about-us.html', ['staff' => $staff]);

        
