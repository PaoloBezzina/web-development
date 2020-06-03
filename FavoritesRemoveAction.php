<?php
    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';
    
    session_start(); 

    $success = array();

    $db = new Db();

    $username = $_SESSION['username'];
        
    $foodId = $_POST['a'];
        
    $query = "DELETE FROM favorites WHERE foodId = ". $foodId ." AND username = '" . $username ."'" ;        //defining query to remove the specified favorite
    $db -> query($query);        //queries the database with the previously defined query
        
    array_push($success, "Successfully removed Item to Favorites");


    if($success > 0){
        //renders success page
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
