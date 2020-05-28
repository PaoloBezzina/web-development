<?php
    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';
    
    session_start(); 

    $success = array();

    $db = new Db();

    $username = $_SESSION['username'];
        
    $foodId = $_POST['a'];
        
    $query = "DELETE FROM favorites WHERE foodId = ". $foodId ." AND username = '" . $username ."'" ;        //query to remove the specified favorite
    $db -> query($query);        //this actually queries the database
        
    array_push($success, "Successfully removed Item to Favorites");


    if($success > 0){
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
