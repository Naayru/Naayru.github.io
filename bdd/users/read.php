<?php
    
    session_start();
    
    
    function allUsers()
    {
    
    }
    
    function user($id)
    {
        require(dirname(__DIR__) . "/db.php");
 
        $sql = 'SELECT * from users WHERE id = :id'; // Requête SQL
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $id)); // Valeur du where (id)
        //$sth = $sth->fetchAll();
        foreach ($sth->fetchAll() as $row) {
            print $row['id'];
            print $row['nickname'];
            print $row['password'];
        }
    }
    
    function isUser($nickname, $password){
        require(dirname(__DIR__) . "/db.php");
    
        $sql = 'SELECT * from users WHERE nickname = :nickname AND password = :password'; // Requête SQL
        $sth = $dbh->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->bindParam(':nickname', $nickname, PDO::PARAM_STR, 255);
        $sth->bindParam(':password', $password, PDO::PARAM_STR);
        $sth = $sth->fetch();
        print $sth['id'];
    }
    
    isUser('coucou', 'coucou')

?>

<h2><?php isUser('coucou', 'coucou'); ?></h2>