<?php
    session_start();    //part 1 no 3
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
    

    <h1>My First Heading</h1>
    
    <p style="color:orangered;font-size:50px">My first paragraph.</p>
    <hr>

    <a href="introduction2.php">Introduction 2 tester</a>
    
    <br>
    
    <img src="w3schools.jpg" alt="W3Schools.com" width="104" height="142">
    <br>

    <br>
    
     <!-- part 1 no4 -->
    
    <p>POST from:</p>
    
    <br>
    
    <form action="formPOST.php" method="post">
Name: <input type="text" name="name"><br>
Surname: <input type="text" name="surname"><br>
<input type="submit">
</form>
    
    <br>
    
    <p>GET form:</p>
    
    <br>
    
   
    
     <form action="formGET.php" method="get">   
Course: <input type="text" name="course"><br> 
Year: <input type="number" name="year"><br>
<input type="submit">
</form>
    
   
    <?php
    echo ("<br>");      //date
    echo date("d-M-Y");
    echo ("<br><br>");


    echo "Current Session Variables:<br>"; //part 1 no5
    foreach ($_SESSION as $key=>$val)
    echo $key.": ".$val."<br/>";

    
?>
    
</body>
</html>
