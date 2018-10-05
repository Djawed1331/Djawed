<?php
session_start();
if (!isset($_SESSION['name']))
{
        header ('Location: login.php');
}

include_once('../view/contact.php');
?>