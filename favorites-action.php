<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    session_start(); 

    $success = array();

    //check if user is logged in
    if (!isset($_SESSION['username'])) {
            echo  $twig->render ('/templates/favorites-not-logged-in.html');
    }

    if (isset($_SESSION['username'])) {

        $db = new Db();

        $username = $_SESSION['username'];
        
        $foodId = $_POST['a'];
        
        $query = "INSERT INTO favorites (username, foodId) VALUES('$username', '$foodId')";
        $db -> query($query);
        
        array_push($success, "Successfully added Item to Favorites");

    }

    if($success > 0){
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
