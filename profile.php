<?php 

    require_once __DIR__.'/Bootstrap.php';

    session_start(); 

    if (!isset($_SESSION['username'])) {
            include '/Login.php';
        header('location: Login.php');
    }

    if (isset($_SESSION['username'])) {
        include '/Logout.php';
        header('location: Logout.php');
    }

?>