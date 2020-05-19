<?php
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';
    
    session_start(); 

    $success = array();

    $db = new Db();

    $username = $_SESSION['username'];
        
    $foodId = $_POST['a'];
        
    $query = "DELETE FROM favorites WHERE foodId = $foodId";
    $db -> query($query);
        
    array_push($success, "Successfully removed Item to Favorites");


    if($success > 0){
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);
    }
