<?php
    require(dirname(__DIR__) . "/db.php");
    session_start();
    
    // Validate username
    if (empty(($_POST["nickname"]))) {
        header('location: /index.php?created=2');
    } else {
        // Prepare a select statement
        $checkNickname = "SELECT nickname FROM users WHERE nickname = :nickname";
        if ($connexion->prepare($checkNickname)) {
            $checkNickname = $connexion->prepare($checkNickname);
            // Bind variables to the prepared statement as parameters
            $checkNickname->bindParam(':nickname', $_POST['nickname']);
            $checkNickname->execute();
            $foundNickname = $checkNickname->fetchAll();
            
            if (!empty($foundNickname)) {
                header('location: /index.php?created=3');
            } else {
                // Validate password
                if (empty($_POST["password"])) {
                    header('location: /index.php?created=4');
                } else {
                    // Validate confirm password
                    if (empty($_POST["confirmPassword"])) {
                        header('location: /index.php?created=5');
                    } else if (($_POST ['password'] != $_POST['confirmPassword'])) {
                        header('location: /index.php?created=6');
                    } else {
                        if (empty($_POST['email'])) {
                            header('location: /index.php?created=7');
                        } else {
                            $createUser = "INSERT INTO users (nickname, password, email) VALUES (:nickname, SHA2(:password,256), :email)";
                            $createUser = $connexion->prepare($createUser);
                            $createUser->bindParam(':nickname', $_POST['nickname']);
                            $createUser->bindParam(':password', $_POST['password']);
                            $createUser->bindParam(':email', $_POST['email']);
                            $createUser->execute();
                            header('location: /index.php?created=1');
                        }
                    }
                }
            }
        } else {
            echo("<script> alert('Oops! Un erreur est survenue! Veuillez réessayer plus tard.'); window.location.href='/index.php'; </script>");
        }
    }
    
    