
<?php
    $host = 'localhost:3306';
    $dbname = 'doyoutrust';
    $user = 'root'; // utilisateur de la base de données
    $pass = 'password'; // Mot de passe de la base de données
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;

// Connexion à la base de données
try {
    $dbh = new PDO('mysql:host='.$host.';dbname='.$dbname.';charset=UTF8', $user, $pass, $pdo_options);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}
?>