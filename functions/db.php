<?php
    $host = "wordpresmvaly.mysql.db";
    $dbname = "wordpresmvaly";
    $user = "wordpresmvaly";
    $password = "Nina38150";
    
    // Create connection
    $connexion = new PDO('mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8', $user, $password);
    if (!$connexion) {
        var_dump("DB disconnected");
    }