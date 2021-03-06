<?php

    require_once __DIR__.'/Bootstrap.php';
    require_once __DIR__.'/Database.php';

    session_start();

    $db = new Db();

    //initilaises empty arrays which are to be filled, depending on the result
    $errors = array();
    $success = array();

    $username = $_POST['username'];
    $password = $_POST['password'];

    //checks for empty fields
    if (empty($username)) {
        array_push($errors, "Username is required");        
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password); //encrypts password
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";  //database query
        $results = $db -> query($query);    //queries database

        if (mysqli_num_rows($results) == 1) {   // if username/password combination is unique, log-in, else don't log-in
            $_SESSION['username'] = $username;      
            array_push($success, "Welcome $username!");
            #header('location: home.php'); //redirects user to home page
          }else {
              array_push($errors, "Wrong username or Password");
          }
    }

    if (count($errors) > 0) {
        //renders error page
        echo $twig -> render('/templates/outcome.html', ['outcome' => $errors]);

    }else{
        //renders success page
        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);

    }

?>