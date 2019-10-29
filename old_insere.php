<?php

include 'conexao.php';

$data = $_POST['data'];
$responsavel = $_POST['responsavel'];
$zona = $_POST['zona'];
$bairro = $_POST['bairro'];
$comunidade = $_POST['comunidade'];
$tipoImovel = $_POST['tipoImovel'];
$regOcupImovel = $_POST['regOcupImovel'];
$tipoConstr = $_POST['tipoConstr'];
$abastAgua = $_POST['abastAgua'];
$tratamentoAgua = $_POST['tratamentoAgua'];
$coletaEsgoto = $_POST['coletaEsgoto'];
$destinoLixo = $_POST['destinoLixo'];
$segPublica = $_POST['segPublica'];

$lista0 = '';
if(!empty($_POST['tipoConstr'])){
	foreach($_POST['tipoConstr'] as $check0) {
		$lista0 .= $check0;
	}
	//echo '<p>' + $lista + '</p>';
	$tipoConstr = $lista0;
}





$lista = '';
if(!empty($_POST['abastAgua'])){
	foreach($_POST['abastAgua'] as $check) {
		$lista .= $check;
	}
	//echo '<p>' + $lista + '</p>';
	$abastAgua = $lista;
}

$lista1 = '';
if(!empty($_POST['tratamentoAgua'])){
	foreach($_POST['tratamentoAgua'] as $check1) {
		$lista1 .= $check1;
	}
	//echo '<p>' + $lista + '</p>';
	$tratamentoAgua = $lista1;
}
$lista2 = '';
if(!empty($_POST['coletaEsgoto'])){
	foreach($_POST['coletaEsgoto'] as $check2) {
		$lista2 .= $check2;
	}
	//echo '<p>' + $lista + '</p>';
	$coletaEsgoto = $lista2;
}
$lista3 = '';
if(!empty($_POST['destinoLixo'])){
	foreach($_POST['destinoLixo'] as $check3) {
		$lista3 .= $check3;
	}
	//echo '<p>' + $lista + '</p>';
	$destinoLixo = $lista3;
}




$sql = "insert into aluno(data, responsavel, zona, bairro, comunidade, tipoImovel, regOcupImovel, tipoConstr, abastAgua, tratamentoAgua, coletaEsgoto, destinoLixo, segPublica) values('$data','$responsavel', '$zona','$bairro','$comunidade', '$tipoImovel', '$regOcupImovel', '$tipoConstr', '$abastAgua', '$tratamentoAgua', '$coletaEsgoto', '$destinoLixo', '$segPublica')";
$count = $con->exec($sql);

echo "<p>$count registro foi concluido</p><br><a href='index.php'>Novo cadastro</a>"

 ?>
