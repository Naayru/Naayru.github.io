
<?php
    $host = '192.168.1.87';
    $dbname = 'doyoutrust';
    $user = 'fdp'; // utilisateur de la base de données
    $pass = '0000'; // Mot de passe de la base de données
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

// Connexion à la base de données
try {
    $connexion = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8', $user, $pass, $pdo_options);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>