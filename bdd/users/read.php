<?php
    
    session_start();
    
    function allUsers()
    {
    
    }
    
    /*
    function user($id)
    {
        require(dirname(__DIR__) . "/db.php");
 
        $sql = 'SELECT * from users WHERE id = :id'; // Requête SQL
        $sth = $connexion->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->execute(array(':id' => $id)); // Valeur du where (id)
        //$sth = $sth->fetchAll();
        foreach ($sth->fetchAll() as $row) {
            print $row['id'];
            print $row['nickname'];
            print $row['password'];
        }
    }
    */
    /*
    function isUser($nickname, $password){
        require(dirname(__DIR__) . "/db.php");
    
        $sql = 'SELECT * from users WHERE nickname = :nickname AND password = :password'; // Requête SQL
        $sth = $connexion->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $sth->bindParam(':nickname', $nickname, PDO::PARAM_STR, 255);
        $sth->bindParam(':password', $password, PDO::PARAM_STR);
        
        //$sth = $sth->fetchAll();
        print count($sth->fetchAll());
        if(count($sth->fetchAll()) == 1){
            $connectedUser = $sth[0];
            return $connectedUser;
        } else {
            print 'This user doesn\'t exists';
            die;
        }
    }
    */

?>


