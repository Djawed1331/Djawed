<?php

include_once('bdd.php');

function check_user($bdd, $username, $password)

{
    $requete= $bdd->prepare("SELECT name, password FROM user WHERE name=? AND password=?");
    $requete->execute(array($username, $password));
    $result= $requete->fetchAll(PDO::FETCH_ASSOC);
    
    if (count($result) == 1) {
        return true;
    }

    return false;
}


?>