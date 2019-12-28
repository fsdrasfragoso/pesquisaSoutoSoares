<?php

session_start();

if (empty($_SESSION['nome']))
{
    session_destroy();
    header('Location: index.php');
}

?>

