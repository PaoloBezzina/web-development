<?php
    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';
    
    session_start(); 

    $success = array();

    //check if user is logged in
    if (!isset($_SESSION['username'])) {
            echo  $twig->render ('/templates/favorites-not-logged-in.html');
    }

    if (isset($_SESSION['username'])) {

        $db = new Db();

        $username = $_SESSION['username'];      //din irridu nippruvawa bil quote() function
        
        $foodId = $_POST['a'];                  
        
        $query = "INSERT INTO favorites (username, foodId) VALUES('$username', '$foodId')";     //halli awekk ma toqodx taghmel ' ' madwar il variables
        $db -> query($query);
        
        array_push($success, "Successfully added Item to Favorites");

    }

    if($success > 0){
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
