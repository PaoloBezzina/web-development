<?php 

    require_once __DIR__.'/bootstrap.php';

    session_start(); 

    if (!isset($_SESSION['username'])) {
            include '/login.php';
        header('location: login.php');
    }

    if (isset($_SESSION['username'])) {
        include '/logout.php';
        header('location: logout.php');
    }

?>