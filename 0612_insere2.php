<?php
include 'conexao.php';

$data = $_POST['data'];
$responsavel = $_POST['responsavel'];
$zona = $_POST['zona'];
$bairro = $_POST['bairro'];
$comunidade = $_POST['comunidade'];
$sexC1 = $_POST['sexC1'];
$sexC2 = $_POST['sexC2'];
$sexC3 = $_POST['sexC3'];
$sexC4 = $_POST['sexC4'];
$sexC5 = $_POST['sexC5'];
$sexC6 = $_POST['sexC6'];
$sexC7 = $_POST['sexC7'];
$sexA1 = $_POST['sexA1'];
$sexA2 = $_POST['sexA2'];
$sexA3 = $_POST['sexA3'];
$sexA4 = $_POST['sexA4'];
$sexA5 = $_POST['sexA5'];
$sexA6 = $_POST['sexA6'];
$sexA7 = $_POST['sexA7'];







$sql = "insert into quest2(data, responsavel, zona, bairro, comunidade, sexC1, sexC2, sexC3, sexC4, sexC5, sexC6, sexC7, sexA1, sexA2, sexA3, sexA4, sexA5, sexA6, sexA7) values ('$data','$responsavel', '$zona', '$bairro', '$comunidade', '$sexC1', '$sexC2', '$sexC3', '$sexC4', '$sexC5', '$sexC6', '$sexC7', '$sexA1', '$sexA2', '$sexA3', '$sexA4', '$sexA5', '$sexA6', '$sexA7')";
$count = $con->exec($sql);

$rows = $con->query("select count(*) from quest2")->fetchColumn();


echo "<html><head><title>Cadastro OK</title></head><body bgcolor='#00ABF1'><p>$count registro foi concluido</p><br><p><div>Total de questionários já registrados... - <h2>$rows</h2></div></p><br><a href='index.php'><h1>Clique aqui para Novo cadastro</h1></a></body></html>"


?>
