<?php
// constantes com as credenciais de acesso ao banco MySQL
define('DB_HOST', 'localhost');
define('DB_USER', 'admin');
define('DB_PASS', '556459');
define('DB_NAME', 'dbpesquisa');
  
// habilita todas as exibições de erros
ini_set('display_errors', true);
error_reporting(E_ALL);
 
date_default_timezone_set('America/Sao_Paulo');
  
// inclui o arquivo de funçõees
require_once 'functions.php';
?>

