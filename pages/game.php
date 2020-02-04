<?php
    session_start();
    require_once '../bdd/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">
    
    <title>Do You Trust? The game</title>
    
    <link rel="shortcut icon" href="../images/bombe.png">
    
    <!-- Bootstrap itself -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!-- Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <!-- Custom styles -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,200' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/styles.css">
    
    
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script> <![endif]-->
</head>

<body id="join-lobby-body">
<!-- Header -->
<header class="join-lobby-header">
    <?php
        if ($_SESSION) { ?>
            <a href="../functions/logout.php">
                <button id="sign-out" type="button" class="btn btn-lg btn-default">Se déconnecter</button>
            </a>
        <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <a href="/SuperAwesome/functions/roleAttribution.php">
                    <h1>Do You Trust ?</h1>
                </a>
                <h2>Aïl & Fines Herbes Corporation</h2>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <!--    CHOISIR DE CREER OU REJOINDRE UNE GAME -->
    <div class="row" id="start-game-div">
        <h2>Joueurs dans la partie</h2>
        <script>
            $(document).ready(function () {
                $('#example').DataTable({
                    "processing": true,
                    "serverSide": true,
                    "ajax": "../server_side/scripts/server_processing.php"
                });
            });
        </script>
        
        <div class="col-md-3">
            <a href="../bdd/startGame.php">
                <button id="index-btn" type="button" class="btn btn-lg btn-danger">Lancer la partie</button>
            </a>
        </div>
    </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="../js/template.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="../js/script.js"></script>
</body>
