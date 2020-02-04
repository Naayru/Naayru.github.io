<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Do You Trust?</title>
</head>
<body>
<h1>Do You Trust?</h1>
<div id="div">
    
    <?php
        // minesweeper = 1 // allie = 2 // terorist = 3
        
        $allPlayers = array(
            ["id" => 0, "role" => null],
            ["id" => 1, "role" => null],
            ["id" => 2, "role" => null],
            ["id" => 3, "role" => null],
            ["id" => 4, "role" => null],
            ["id" => 5, "role" => null],
            ["id" => 6, "role" => null],
            ["id" => 7, "role" => null],
            ["id" => 8, "role" => null],
            ["id" => 9, "role" => null]
        );
        
        echo '$allPlayers après instanciation ';
        var_dump($allPlayers);
        
        // CHOSE THE MINESWEEPER
        $minesweeper = array_rand($allPlayers, 1); // PICK HIM IN PROD
        $allPlayers[$minesweeper]["role"] = 1;
    
        echo '$minesweeper ';
        var_dump($minesweeper);
        echo '$allPlayers après minesweeper ';
        var_dump($allPlayers);
        
        // NEW ARRAY WITHOUT MINESWEEPER
        $players = array();
        foreach ($allPlayers as $player) {
            if ($player["role"] == null) {
                array_push($players, $player);
            }
        }
        $nbPlayers = count($players);
    
        echo '$players sans minesweeper ';
        var_dump($players);
        
        // NUMBER OF ALLIES DEPENDING ON PLAYERS AMOUNT
        if ($nbPlayers > 1) {
            $allies = array();
            switch ($nbPlayers) {
                case $nbPlayers < 5:
                    foreach (array_rand($players, 1) as $ally) {
                        array_push($allies, $players[$ally]);
                    }
                    break;
                case $nbPlayers < 7:
                    foreach (array_rand($players, 2) as $ally) {
                        array_push($allies, $players[$ally]);
                    }
                    break;
                case $nbPlayers < 10:
                    foreach (array_rand($players, 3) as $ally) {
                        array_push($allies, $players[$ally]);
                    }
                    break;
            }
    
            echo '$allies instanciation ';
            var_dump($allies);
            
            // RANDOM ALLIES
            foreach ($allies as $ally) {
                $players[$ally["id"]]["role"] = 2;
            }
    
            echo '$players après allies ';
            var_dump($players);
            
            // OTHERS = TERRORISTS
            foreach ($players as $player) {
                if ($player["role"] == null) {
                    $player["role"] = 3;
                }
            }
    
            echo '$players après terrorists ';
            var_dump($players);
            
            
        } else {
            if (!$players > 1) {
                echo('Not enough players');
            } else {
                echo('Too many players');
            }
        }
    
    
    ?>
    
    <form action="#">
    
    </form>

</div>

<ul>
    
    <?php
        foreach ($players as $player) {
            if ($player["role"] == 2) {
                $role = 'ally';
            } elseif ($player["role"] == 1){
                $role = 'minesweeper';
            } else {
                $role = 'terrorist';
            }
            //echo("<li>" . $player["id"] . " est un joueurs " . $role . "</li>");
        }
    ?>

</ul>


</body>
</html>