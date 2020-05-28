<?php

    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';

    session_start();

    //check if user is logged in
    if (!isset($_SESSION['username'])) {
        echo  $twig->render ('/templates/favorites-not-logged-in.html');
    }

    if (isset($_SESSION['username'])) {

        $username = $_SESSION['username'];

        $db = new Db();
        $user = $db -> quote($username);
        $result = $db -> select("SELECT fd.*, t.name as typeName from food fd inner join type t on fd.type = t.id, favorites fav WHERE fav.username =".$user." AND fav.foodId = fd.id");

        echo $twig->render('/templates/favorites.html', ['menuItem' => $result] );
    }


    