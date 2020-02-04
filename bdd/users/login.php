<?php
    include("../db.php");
    
    if (empty($_POST['nickname'])) {
        header("location: /index.php?connected=2");
    } else if (empty($_POST['password'])) {
        header("location: /index.php?connected=3");
    } else {
        $checkAccount = "SELECT u.*, r.role as role FROM users u inner join roles r on u.id_role = r.id WHERE nickname = :nickname AND password = SHA2(:password,256)";
        //$checkAccount = "SELECT * FROM users WHERE nickname = :nickname AND password = SHA2(:password,256)";
        $checkAccount = $connexion->prepare($checkAccount);
        $checkAccount->bindParam(':nickname', $_POST['nickname']);
        $checkAccount->bindParam(':password', $_POST['password']);
        $checkAccount->execute();
        $accountFound = $checkAccount->fetch(PDO::FETCH_ASSOC);
        
        if (!empty($accountFound)) {
            session_start();
            $_SESSION = $accountFound;
            header("location: /index.php");
        } else {
            header("location: /index.php?connected=4");
        }
    }
    
    