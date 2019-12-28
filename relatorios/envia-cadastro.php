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
include_once 'classes/Insert.class.php';


// Instanciando as classes
$insert = new Insert();


// Recebe as informações do formulário
$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$senha = addslashes($_POST['senha']);


// Verifica as informações no banco de dados
if ($insert->InsereUsuario($nome, $email, $senha))
{
    header('Location:index.php?msg=1');
} else {
    header('Location:cadastro.php?msg=3');
}

?>
