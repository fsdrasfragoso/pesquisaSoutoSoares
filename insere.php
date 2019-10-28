<?php

include 'conexao.php';

$data = $_POST['data'];
$responsavel = $_POST['responsavel'];
$zona = $_POST['zona'];
$bairro = $_POST['bairro'];
$comunidade = $_POST['comunidade'];
$tipoImovel = $_POST['tipoImovel'];

$sql = "insert into aluno(data, responsavel, zona, bairro, comunidade, tipoImovel) values('$data','$responsavel', '$zona','$bairro','$comunidade', '$tipoImovel')";
$count = $con->exec($sql);

echo "<p>$count registro foi concluido</p><br><a href='index.php'>Novo cadastro</a>"

 ?>
