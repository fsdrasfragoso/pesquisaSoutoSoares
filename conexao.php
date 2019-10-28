<?php

$servidor = "localhost";
$usuario = "root";
$senha = "neto72";

try{
  $con = new PDO("mysql: host= $servidor; dbname=dbpesquisa", $usuario, $senha);

  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  echo "Conexão OK";
}

catch(PDOexception $e){
  echo "Erro na Conexão: ".$e->getMessage();
}

 ?>
