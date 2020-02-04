<?php
    include "connexion.php";
    
    if (empty($_POST['nickname'])) {
        header("location: /test/roleAttribution.php?connected=2");
    } else if (empty($_POST['password'])) {
        header("location: /test/roleAttribution.php?connected=3");
    } else {
        $checkAccount = "SELECT * FROM users WHERE nickname = :nickname AND password = SHA2(:password,256)";
        //$checkAccount = "SELECT * FROM users WHERE nickname = :nickname AND password = SHA2(:password,256)";
        $checkAccount = $connexion->prepare($checkAccount);
        $checkAccount->bindParam(':nickname', $_POST['nickname']);
        $checkAccount->bindParam(':password', $_POST['password']);
        $checkAccount->execute();
        $accountFound = $checkAccount->fetch(PDO::FETCH_ASSOC);
        
        if (!empty($accountFound)) {
            session_start();
            $_SESSION = $accountFound;
            header("location: /test/roleAttribution.php?connected=1");
        } else {
            header("location: /test/roleAttribution.php?connected=4");
        }
    }
    
    