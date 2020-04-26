<?php
    session_start();
    if(!isset($_SESSION["timeLoadedform"])){
        $_SESSION["timeLoadedform"] = time();
    }

    $timeSinceLoad = time() - $_SESSION["timeLoadedform"];
    echo("You have first used this page " . $timeSinceLoad . " seconds ago."); //call function on interaction
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
?>

<!DOCTYPE html>

<html>
<body>
    
    <br>
    
    Welcome <?php echo $_SESSION["name"]; ?><br>
Your Surname is: <?php echo $_SESSION["surname"]; ?>
    
    <br>
    
    <a href="index.php">Back to home page</a>

</body>
    
</html>