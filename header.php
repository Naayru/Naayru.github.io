<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Do You Trust? The game</title>
    
    <link rel="shortcut icon" href="images/bombe.png">
    
    <!-- Bootstrap itself -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/styles.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    
    
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script> <![endif]-->
</head>

<body>

<!-- Header -->
<header class="header">
    <?php if ($_SESSION) { ?>
        <a href="<?php session_destroy() ?>">
            <button id="sign-out" type="button" class="btn btn-lg btn-default">Se déconnecter</button>
        </a>
    <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <h1>Do You Trust ?</h1>
                <h2>Aïl & Fines Herbes Corporation</h2>
                <p class="lead">
                    Ils savent comment désamorcer la bombe... mais peux tu leur faire confiance ?
                </p>
                
                <?php if($_GET['created'] == 1){ //COMPTE CREE ?>
                    <p class="ok-message"> Votre compte a bien été créé! </p>
                <?php } else if ($_GET['created'] == 2){ //PSEUDO VIDE ?>
                    <p class="error-message"> Merci de renseigner un pseudo pour votre compte </p>
                <?php } else if ($_GET['created'] == 3){ //PSEUDO DEJA PRIS ?>
                    <p class="error-message"> Pseudo déjà pris </p>
                <?php } else if ($_GET['created'] == 4){ //MDP VIDE ?>
                    <p class="error-message"> Merci de renseigner un mot de passe pour votre compte </p>
                <?php } else if ($_GET['created'] == 5){ //CONFIRMATION MDP VIDE ?>
                    <p class="error-message"> Merci de confirmer votre mot de passe </p>
                <?php } else if ($_GET['created'] == 6){ //MDP != CONFIRMATION MDP ?>
                    <p class="error-message"> Le mot de passe et la confirmation ne correspondent pas </p>
                <?php } else if ($_GET['created'] == 7){ //MDP != CONFIRMATION MDP ?>
                    <p class="error-message"> Merci de renseigner une adresse email pour votre compte </p>
                <?php } ?>
                
                <?php if ($_SESSION){ ?>
                    <h2>Bienvenue <?= $_SESSION['nickname'] ?></h2>
                    <a href="#">
                        <button id="play-button" type="button" class="btn btn-lg btn-default">Jouer</button>
                    </a>
                
                <?php } else { ?>
                <div class="row">
                    <div class="col-md-12" id="account">
                        <div id="switch">
                            <!--.or.animated OR-->
                            <div class="diamond"></div>
                            <div class="choice on" id="sign-in">Déjà membre</div>
                            <div class="choice" id="sign-up">Nouveau joueur</div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12" id="sign-in-div">
                        <form class="form-inline" role="form" method="POST" action="bdd/users/login.php"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 form-field">
                                    
                                    <div class="form-group">
                                        <label for="nickname" style="display: none;">Pseudo</label>
                                        <input name="nickname" type="text" class="form-control input-lg"
                                               id="nickname"
                                               placeholder="Ton pseudo"></div>
                                    <div class="form-group">
                                        <label for="password" style="display: none;">Mot de passe</label>
                                        <input name="password" type="password" class="form-control input-lg"
                                               id="password"
                                               placeholder="Ton mot de passe">
                                    </div>
                                </div>
                            </div>
                            
                            <input type="submit" class="btn btn-lg btn-default" id="sign-in-submit"
                                   value="Se connecter">
                        </form>
                    </div>
                    
                    <div class="col-md-12" id="sign-up-div">
                        <form class="form-inline" role="form" method="POST" action="bdd/users/create.php"
                              enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-12 form-field">
                                    <div class="form-group"><input name="nickname" type="text" class="form-control input-lg"
                                                                   id="nicknameRegister"
                                                                   placeholder="Ton pseudo"></div>
                                    <div class="form-group"><input name="email" type="email" class="form-control input-lg"
                                                                   id="emailRegister"
                                                                   placeholder="Ton email"></div>
                                </div>
                                <div class="col-md-12 form-field">
                                    <div class="form-group"><input name="password" type="password" class="form-control input-lg"
                                                                   id="passwordRegister"
                                                                   placeholder="Ton mot de passe">
                                    </div>
                                    <div class="form-group"><input name="confirmPassword" type="password" class="form-control input-lg"
                                                                   id="passwordVerification"
                                                                   placeholder="Confirmer ton mot de passe"></div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-default" id="sign-up-submit">S'inscrire</button>
                        </form>
                    </div>
                    <?php
                        }
                    ?>
                
                
                </div>
            </div>
        
        </div>
        
        <div style="display: none" class="col-md-6">
            <p> Autrement, inscris toi, et joue gratuit avec
                tes amis... si tenté qu'ils soient VRAIMENT des amis...</p>
            <br>
        
        
        </div>
    
    </div>
    </div>
    </div>
    
    </div>
</header>
<!-- /Header -->


<!-- Content -->
<main class="content">