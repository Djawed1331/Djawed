<script type="text/javascript" src="../js/login.js"></script>;

<?php
include_once('../modele/login.php');

include_once('../view/login.php');

if(isset($_POST['nom']) & isset($_POST['mdp'])) {
        if(check_user($bdd, $_POST['nom'], $_POST['mdp']))
        {
                session_start();
                $_SESSION['name']=$_POST['nom'];

                header ('Location: home.php');
        } else {
                
                echo '<script> echec()</script>';
        }
       
}



?>