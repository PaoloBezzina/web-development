<?php
    session_start();
    if(!isset($_SESSION["timeLoadedformGET"])){
        $_SESSION["timeLoadedformGET"] = time();
    }

    $timeSinceLoad = time() - $_SESSION["timeLoadedformGET"];
    echo("You have first used this page " . $timeSinceLoad . " seconds ago."); //call function on interaction
    $_SESSION["course"] = $_GET["course"];
    $_SESSION["year"] = $_GET["year"];
?>

<!DOCTYPE html>

<html>
<body>
    
<br>
    
    Course: <?php echo $_SESSION["course"]; ?><br>
Your Year is: <?php echo $_SESSION["year"]; ?>
    
    <br>
    
    <a href="index.php">Back to home page</a>

</body>
    
    
</html>