<?php

$servidor = "localhost";
$usuario = "admin";
$senha = "556459";

try{
  $con = new PDO("mysql: host= $servidor; dbname=dbpesquisa", $usuario, $senha);

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
}

catch(PDOexception $e){
  echo "Erro na Conexão: ".$e->getMessage();
}

 ?>
