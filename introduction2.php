<?php
    session_start();
    if(!isset($_SESSION["timeLoadedintro2"])){
        $_SESSION["timeLoadedintro2"] = time();
    }

    $timeSinceLoad = time() - $_SESSION["timeLoadedintro2"];
    echo("You have first used this page " . $timeSinceLoad . " seconds ago"); //call function on interaction
?>
<!DOCTYPE html>
<html lang="en">
    
    <?php
    
    ?>
    
<head>
    <title>Testing2</title>
    <style>
body {background-color: powderblue;}
h1   {color: blue;}
p    {color: red;}
</style>
</head>
    
<body>
    
    <!-- Exploring HTML -->

    <h1>My First Heading</h1>
    
    <p>WWF's goal is to: <q>Build a future where people live in harmony with nature.</q></p>
    
    <p>The <abbr title="World Health Organization">WHO</abbr> was founded in 1948.</p>
    
    <p><cite>The Scream</cite> by Edvard Munch. Painted in 1893.</p>
    
    <bdo dir="rtl">This text will be written from right to left</bdo>
    
    <a href="https://www.w3schools.com/html/" target = "_top">Visit our HTML tutorial</a>
    
    <br>
    
    <a href="index.php">Back to home page tester</a>

</body>
</html>
