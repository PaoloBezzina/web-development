<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    session_start(); 

    $success = array();

    $db = new Db();

    $username = quote($_SESSION['username']);
        
    $foodId = $_POST['a'];
        
    $query = "DELETE FROM favorites WHERE foodId = $foodId AND username = ".$username;        //query to remove the specified favorite
    $db -> query($query);        //this actually queries the database
        
    array_push($success, "Successfully removed Item to Favorites");


    if($success > 0){
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
