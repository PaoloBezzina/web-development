<?php

    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/bootstrap.php';
    require_once __DIR__.'/database.php';

    session_start();

    $db = new Db();

    $errors = array();
    $success = array();

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        array_push($errors, "Username is required");
    }
    if (empty($password)) {
        array_push($errors, "Password is required");
    }

    if (count($errors) == 0) {
        $password = md5($password);
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $results = $db -> query($query);

        if (mysqli_num_rows($results) == 1) {
            $_SESSION['username'] = $username;
            array_push($success, "Welcome $username!");
            #header('location: home.php');
          }else {
              array_push($errors, "Wrong username or Password");
          }
    }

    if (count($errors) > 0) {

        echo $twig -> render('/templates/outcome.html', ['outcome' => $errors]);

    }else{

        echo $twig -> render('/templates/outcome.html', ['outcome' => $success]);

    }

?>