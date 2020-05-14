<?php

    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    session_start();

    $db = new Db();

    $errors = array();
    $success = array();

    $username = $_POST['username'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

    

    if (empty($username)){

         array_push($errors, "Username is required"); 

    }if (empty($password1)){

         array_push($errors, "Password is required");

    }if ($password1 != $password2){

	    array_push($errors, "The two passwords do not match");
    }
    


    $userExists = "SELECT * FROM users WHERE username='$username' LIMIT 1";
    $result = $db -> query($userExists);
    $user = mysqli_fetch_assoc($result);
  
    if ($user) { // if user exists
        if ($user['username'] === $username){
            array_push($errors, "Username already exists");
        }
    }

    if (count($errors) == 0) {
        $password = md5($password1); #md5 is used to encrypt the pasword, so that it is not visible in the database

        $query = "INSERT INTO users (username, password) VALUES('$username', '$password')";
    	$db -> query($query);
  	    $_SESSION['username'] = $username;
  	    array_push($success, "You are now logged in");
  	    #header('location: home.php');
     }

    if (count($errors) > 0) {

        echo $twig -> render('/templates/outcome.html', ['outcome' => $errors]);

    }

    else{

    echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);

    }

?>