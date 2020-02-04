<?php
    <!-- include('header.php'); -->

    <!-- require(__DIR__ . "/header.php"); -->
    <!-- require(header.html); -->
include("header.php");
?>

<body>
    <!-- Lead -->
    <section id="home-title" class="container space-before space-after">
        <div class="row">
            <div class="col-sm-10 col-sm-push-1">
                <h2 class="text-center">Règles du jeu</h2>
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
                <i id="roles-img" class="fas fa-users"></i>
<!--                <i id="bomb-img" class="img-feature img-responsive" class="fas fa-bomb"></i>-->
<!--                <img id="bomb-img" class="img-feature img-responsive" alt="Sample image" src="https://img.icons8.com/ios/100/000000/bomb-with-timer.png">-->
<!--                <img class="img-feature img-responsive" src="images/Picture2.png" alt="Sample image">-->
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
                <i id="bonus-img" class="fas fa-hand-holding-heart"></i>
<!--                <img class="img-feature img-responsive" src="images/bonus.jpg" alt="Sample image">-->
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


<?php
    require(__DIR__ . "/footer.php");
?>
