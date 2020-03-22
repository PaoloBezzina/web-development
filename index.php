<?php
    session_start();
    if(!isset($_SESSION["timeLoadedindex"])){
        $_SESSION["timeLoadedindex"] = time();
    }

    $timeSinceLoad = time() - $_SESSION["timeLoadedindex"];
    echo("You have first used this page " . $timeSinceLoad . " seconds ago"); //call function on interaction
?>

<!DOCTYPE html>

<html>
    
<head>
    <title>Testing</title>
    
</head>
    
<body style="background-color: palegoldenrod">
    
    
    
    
<?php
    echo ("</br>");
    echo date("d-M-Y");
    echo ("</br>");

     //executes only when page is loaded

    echo($_SESSION["timeLoadedindex"] . " seconds from 1970<br>");

    
?>
    

    <h1>My First Heading</h1>
    
    <p style="color:orangered;font-size:50px">My first paragraph.</p>
    <hr>
    <p style="font-size:40px" title="BEN GAY">Put mouse here to see the truth</p>
    
    <a href="introduction2.php">Introduction 2 tester</a>
    
    <br>
    
    <a href="https://www.w3schools.com">This is a link</a>
    <br>
    <img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
    <br>
    <button>Click me</button>
    
    <br>
    
    <ul id = "kemmghandek">
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ul>

    <ol>
        <li>Coffee</li>
        <li>Tea</li>
        <li>Milk</li>
    </ol>
    
    <br>
    
    <pre style="font-family:courier">
        My Bonnie lies over the ocean.

        My Bonnie lies over the sea.

        My Bonnie lies over the ocean.

        Oh, bring back my Bonnie to me.
    </pre>

</body>
</html>
