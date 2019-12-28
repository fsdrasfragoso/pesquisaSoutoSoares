<?php
include 'conexao.php';

$data = $_POST['data'];
$responsavel = $_POST['responsavel'];
$zona = $_POST['zona'];
$bairro = $_POST['bairro'];
$comunidade = $_POST['comunidade'];
$quantCrianca = $_POST['quantCrianca'];
$quantHCri = $_POST['quantHCri'];
$quantMCri = $_POST['quantMCri'];
$quantAdol = $_POST['quantAdol'];
$quantHAdol = $_POST['quantHAdol'];
$quantMAdol = $_POST['quantMAdol'];




$sql = "insert into quest2(data, responsavel, zona, bairro, comunidade, quantCrianca, quantHCri, quantMCri, quantAdol, quantHAdol, quantMAdol) values ('$data','$responsavel', '$zona', '$bairro', '$comunidade', '$quantCrianca', '$quantHCri', '$quantMCri', '$quantAdol', '$quantHAdol', '$quantMAdol')";
$count = $con->exec($sql);

$rows = $con->query("select count(*) from quest2")->fetchColumn();


echo "<html><head><title>Cadastro OK</title></head><body bgcolor='#00ABF1'><p>$count registro foi concluido</p><br><p><div>Total de questionários já registrados... - <h2>$rows</h2></div></p><br><a href='index.php'><h1>Clique aqui para Novo cadastro</h1></a></body></html>"


?>
