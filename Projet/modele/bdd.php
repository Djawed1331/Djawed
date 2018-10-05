<?php


$hostname='localhost';
$dbname='oumi';
$dbuser_name='root';
$dbpassword='';

try {
    $bdd=new PDO("mysql:host=$hostname;dbname=$dbname", $dbuser_name, $dbpassword);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Échec lors de la connexion : ' . $e->getMessage();
}

?>