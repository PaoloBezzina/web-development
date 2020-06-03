<?php
    require_once __DIR__.'/Database.php';

    $db = new Db();

    $itemTypes = $db ->select("SELECT id, name FROM type order by id");

    //used to add the second navigation bar for menu, so user can chose type of dish