<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */
 

/*ini_set('display_errors', 1);
error_reporting(E_ALL);*/
session_destroy();
session_start();


// Chama as classes
include_once 'classes/Conexao.class.php';
include_once 'classes/Select.class.php';


// Instanciando as classes
$select = new Select();


// Recebe as informações do formulário
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);


// Verifica as informações no banco de dados
if ($select->VerificaUsuario($email, $senha))
{
    header('Location:home.php');
} else {
    header('Location:login.php?msg=0');
}

?>
