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
    <link href='https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css' rel='stylesheet' type='text/css'>
    <link href='https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="../css/styles.css">
    
    
    <!--[if lt IE 9]>
    <script src="../js/html5shiv.js"></script> <![endif]-->
</head>

<body id="join-lobby-body">
<!-- Header -->
<header class="join-lobby-header">
    <script src="https://cdn.jsdelivr.net/npm/socket.io-client@2/dist/socket.io.js"></script>
    <script>
        var socket = io('192.168.1.87:3000');
    </script>
    
    <?php
        if ($_SESSION) { ?>
            <a href="../functions/logout.php">
                <button id="sign-out" type="button" class="btn btn-lg btn-default">Se déconnecter</button>
            </a>
        <?php } ?>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-push-2 text-center">
                <a href="../index.php" class="no-txt-trans">
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
        
        <table id="players-waiting" class="display nowrap" style="width: 25%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Pseudo</th>
                <th>Role</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>1</td>
                <td>joueur 1</td>
                <td></td>
            </tr>
            <tr>
                <td>2</td>
                <td>JOUEUR 2</td>
                <td></td>
            </tr>
            <tr>
                <td>3</td>
                <td>Joueur 3</td>
                <td></td>
            </tr>
            <tr>
                <td>4</td>
                <td>Joueur 4</td>
                <td></td>
            </tr>
            <tr>
                <td>5</td>
                <td>Joueur 5</td>
                <td></td>
            </tr>

            <tr>
                <td><?=$_SESSION['id']?></td>
                <td><?=$_SESSION['nickname']?></td>
                <td><?=$_SESSION['role']?></td>
            </tr>
            
            </tbody>
        </table>
        
        <p id="minesweeper">Choisir un démineur</p>
    
        <table id="example" class="display"></table>
        
        <div class="col-md-12" id="start-game-div">
            <a href="../bdd/startGame.php">
                <button id="start-game-btn" type="button" class="btn btn-lg btn-default">Lancer la partie</button>
            </a>
        </div>
    </div>
</div>

<!--<script src="../js/jquery-3.4.1.min.js" type="text/javascript"></script>-->
<script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/template.js"></script>
<script src="../js/script.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.1/js/dataTables.buttons.min.js"></script>


</body>
