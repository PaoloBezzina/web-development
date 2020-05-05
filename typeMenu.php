<?php
    require_once __DIR__.'/database.php';

    $db = new Db();

    $itemTypes = $db ->select("SELECT id, name FROM type order by id");