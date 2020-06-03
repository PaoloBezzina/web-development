<?php 

    require_once __DIR__.'/Bootstrap.php';

    session_start(); 

    //checks if a user is alsready logged in, in which case the logout page is called. Otherwise the login page is called
    if (!isset($_SESSION['username'])) {
            include '/Login.php';
        header('location: Login.php');
    }

    if (isset($_SESSION['username'])) {
        include '/Logout.php';
        header('location: Logout.php');
    }

?>