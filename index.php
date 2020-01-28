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

<?php
    
    require(__DIR__ . "/bdd/users/read.php");
    
?>

<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <h1>Do You Trust ?</h1>
                <h2>Aïl & Fines Herbes Corporation</h2>
                <p class="lead">
                    Ils savent comment désamorcer la bombe... mais peux tu leur faire confiance ?
                </p>
                
                <h2></h2>
                
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
                        <form class="form-inline" role="form">
                            <div class="row">
                                <div class="col-md-12 form-field">
                                    <div class="form-group"><input type="text" class="form-control input-lg"
                                                                   id="nickname"
                                                                   placeholder="Ton pseudo"></div>
                                    <div class="form-group"><input type="password" class="form-control input-lg"
                                                                   id="password"
                                                                   placeholder="Ton mot de passe">
                                    </div>
                                </div>
                            </div>
    
                            <button type="submit" class="btn btn-lg btn-default" id="sign-in-submit">Se connecter</button>
                        </form>
                    </div>
                    
                    <div class="col-md-12" id="sign-up-div">
                        <form class="form-inline" role="form">
                            <div class="row">
                                <div class="col-md-12 form-field">
                                    <div class="form-group"><input type="text" class="form-control input-lg"
                                                                   id="nicknameRegister"
                                                                   placeholder="Ton pseudo"></div>
                                    <div class="form-group"><input type="email" class="form-control input-lg"
                                                                   id="emailRegister"
                                                                   placeholder="Ton email"></div>
                                </div>
                                <div class="col-md-12 form-field">
                                    <div class="form-group"><input type="password" class="form-control input-lg"
                                                                   id="passwordRegister"
                                                                   placeholder="Ton mot de passe">
                                    </div>
                                    <div class="form-group"><input type="password" class="form-control input-lg"
                                                                   id="passwordVerification"
                                                                   placeholder="Confirmer ton mot de passe"></div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-lg btn-default" id="sign-up-submit">S'inscrire</button>
                        </form>
                    </div>
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
    
    <!-- Lead -->
    <section class="container space-before space-after">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <h1 class="text-center">Règles du jeu</h1>
                <p class="lead text-center">
                </p>
            </div>
        </div>
    </section>
    <!-- /Lead -->
    
    
    <!-- Features -->
    <section class="container space-before">
        
        <div class="row featurelist space-after">
            <div class="col-md-5 col-sm-6 col-md-push-1 ">
                <img class="img-feature img-responsive" src="images/Picture2.png" alt="Sample image">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <h2 class="space-before">Les rôles, <span
                        class="text-muted">de 3 à 10 joueurs</span></h2>
                <p> <b>Démineur</b>, tout repose sur toi! Tu dois résoudre tous les mécanismes de la bombe, afin de
                    la désamorcer avant qu'elle n'explose!
                    <br> <b>Allié(s)</b>, tu sais comment désamorcer la bombe, alors aide le démineur dans sa mission!
                    <br> <b>Terroriste(s)</b>, tu sais aussi comment désamorcer la bombe... à toi d'induire discrètement
                    en erreur le démineur! </p>
            </div>
        </div>
        
        <div class="row featurelist space-after">
            <div class="col-md-5 col-sm-6 col-sm-push-6">
                <img class="img-feature img-responsive" src="images/bonus.jpg" alt="Sample image">
            </div>
            <div class="col-md-5 col-sm-6 col-md-pull-4 col-sm-pull-6">
                <h2 class="space-before">Les bonus, <span
                        class="text-muted">pour récompenser tes actions</span></h2>
                <p>Tout travail mérite salaire! C'est pourquoi, en fonction de ton rôle, des bonus te seront distribués
                    si tu réussis à remplir ton rôle. </p>
                <p>Pour les <b>terroristes</b>, faire éxécuter une mauvaise manoeuvre au démineur vous fera bénéficier
                    d'une accélération du temps, de temps en moins pour désamorcer la bombe, ou encore d'indices pour
                    résoudre le prochain méchanisme de la bombe.</p>
                <p>Pour les <b>alliés</b>, aider le démineur à résoudre les méchanismes vous fera profiter de bonus tels
                    que du temps supplémentaire, un ralentissement du chrono, un indice sur le prochain méchanisme à
                    résoudre, ...</p>
            </div>
        </div>
        
        <!--
        <div class="row featurelist space-after">
            <div class="col-md-5 col-sm-6 col-md-push-1 col-sm-6">
                <img class="img-feature img-responsive" src="images/screen3.png" alt="Sample image">
            </div>
            <div class="col-md-5 col-md-push-1 col-sm-6">
                <h2 class="space-before">Violet does look good too!</span></h2>
                <p>Here. Put that in your report! And "I may have found a way out of here. you want a guarantee, buy a
                    toaster. are you feeling lucky punk dyin' ain't much of a livin', boy. what you have to ask yourself
                    is, Do I feel lucky. Well do ya' punk? You see, in this world there's two kinds of people, my
                    friend: those with loaded guns and those who dig. you dig.</p>
            </div>
        </div>
        -->
    </section>
    <!-- /Features -->

</main>


<footer id="footer" class="jumbotron">
    <section class="container">
        <div class="row">
            <div class="col-md-5 col-md-push-1" id="footer-1">
                <h2>Intéressé par notre projet ?</h2>
                <p>N'hésite pas à en parler à tes amis!</p>
                
                <div id="rs">
                    <a href="https://www.facebook.com/Do-You-Trust--100341478197437/" target="_blank"><img
                            src="images/iconfinder_square-facebook_317727.png"
                            alt="facebook"></a>
                    <a href="#" target="_blank"><img
                            src="images/iconfinder_square-twitter_317723.png"
                            alt="twitter"></a>
                    <a href="https://github.com/Naayru/Naayru.github.io" target="_blank"><img
                            src="images/iconfinder_github_317712.png"
                            alt="github"></a>
                </div>
            
            
            </div>
            <div class="col-md-5 col-md-push-1" id="footer-2">
                <h2>Tu as des questions ?</h2>
                <p>Notre équipe répondra à toute tes questions à l'adresse suivante: <a
                        href="mailto:oli.charon@gmail.com?subject=Contact DoYouTrust">oli.charon@gmail.com</a></p>
                <p>Pour être informé des récents correctifs et suggérer des amélioration au niveau du code, rends toi sur ce répertoire <a
                            href="https://github.com/Naayru/Naayru.github.io" target="_blank">GitHub</a></p>
            </div>
        </div>
    </section>
    
    <p class="small text-muted text-center">Copyright &copy; 2020, Aïl & Fines Herbes Corporation. Design by: <a
            href="https://github.com/OlivierCharon" target="_blank"
            rel="designer"
            title="Github repository">Aïl & Fines Herbes Corporation</a>
    </p>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="js/template.js"></script>


</body>
</html>