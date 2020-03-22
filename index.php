<?php
    echo date("d-M-Y");
    echo ("</br>");

    $timeLoaded = time(); //executes only when page is loaded

    echo($timeLoaded . "<br>");

    echo(time() - $timeLoaded); //call function on interaction
?>