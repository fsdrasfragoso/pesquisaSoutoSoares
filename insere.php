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
$numeroPessoas = $_POST['numeroPessoas'];
$constFamiliar = $_POST['constFamiliar'];
$rendaFamilia = $_POST['rendaFamilia'];
$contribRendaFamiliar = $_POST['contribRendaFamiliar'];
$carro = $_POST['carro'];
$moto = $_POST['moto'];
$bicicleta = $_POST['bicicleta'];
$maqLavar = $_POST['maqLavar'];
$tanquinho = $_POST['tanquinho'];
$geladeira = $_POST['geladeira'];
$lavLoucas = $_POST['lavLoucas'];
$micOndas = $_POST['micOndas'];
$fogGas = $_POST['fogGas'];
$dvd = $_POST['dvd'];
$tv = $_POST['tv'];
$apTvcabo = $_POST['apTvcabo'];
$interBl = $_POST['interBl'];
$interCell = $_POST['interCell'];
$computador = $_POST['computador'];
$notebook = $_POST['notebook'];
$tablet = $_POST['tablet'];
$som = $_POST['som'];
$telFxo = $_POST['telFxo'];
$telCell = $_POST['telCell'];
$telCell12a = $_POST['telCell12a'];
$telCell18a = $_POST['telCell18a'];
$ventilador = $_POST['ventilador'];
$arCondicionado = $_POST['arCondicionado'];
$escolMae = $_POST['escolMae'];
$escolPai = $_POST['escolPai'];
$escolOutroResp = $_POST['escolOutroResp'];
$sitOcupMae = $_POST['sitOcupMae'];
$sitOcupPai = $_POST['sitOcupPai'];
$sitOcupOutro = $_POST['sitOcupOutro'];
$penaJudicial = $_POST['penaJudicial'];
$regimePena = $_POST['regimePena'];
$responsavelPena = $_POST['responsavelPena'];
$possuiDoenca = $_POST['possuiDoenca'];
$usoSubstancias = $_POST['usoSubstancias'];
$quantosAdultos = $_POST['quantosAdultos'];
$inicioUso = $_POST['inicioUso'];
$tratamentoDep = $_POST['tratamentoDep'];
$acessoInternet = $_POST['acessoInternet'];
$localAcesso = $_POST['localAcesso'];
$tipoEquipamento = $_POST['tipoEquipamento'];
$conteudoInternet = $_POST['conteudoInternet'];
$freqInternet = $_POST['freqInternet'];
$horasInternet = $_POST['horasInternet'];
$horasEletronicos = $_POST['horasEletronicos'];
$verifAcessos = $_POST['verifAcessos'];
$freqVerifAcessos = $_POST['freqVerifAcessos'];
$usamBatePapo = $_POST['usamBatePapo'];
$sozinhas = $_POST['sozinhas'];
$tempoPai = $_POST['tempoPai'];
$tempoMae = $_POST['tempoMae'];
$outroResp = $_POST['outroResp'];
$disciplina = $_POST['disciplina'];
$paisSeparados = $_POST['paisSeparados'];
$gravidezAdol = $_POST['gravidezAdol'];
$idadeAdolGrav = $_POST['idadeAdolGrav'];
$vidaEmRisco = $_POST['vidaEmRisco'];
$acaoVR = $_POST['acaoVR'];
$conversaSex = $_POST['conversaSex'];
$conversaDrogas = $_POST['conversaDrogas'];
$conversaViolencia = $_POST['conversaViolencia'];
$probDrogas = $_POST['probDrogas'];
$abortoInduzido = $_POST['abortoInduzido'];
$violSexual = $_POST['violSexual'];
$trabInfanto = $_POST['trabInfanto'];
$bolsaFam = $_POST['bolsaFam'];
$servConv = $_POST['servConv'];
$brasilSemFront = $_POST['brasilSemFront'];
$pronatec = $_POST['pronatec'];
$minhaCMV = $_POST['minhaCMV'];
$prouni = $_POST['prouni'];
$fies = $_POST['fies'];
$outro = $_POST['outro'];
$atendUbs = $_POST['atendUbs'];
$morteCrianca = $_POST['morteCrianca'];
$quando = $_POST['quando'];
$causaMorte = $_POST['causaMorte'];
$investViolDom = $_POST['investViolDom'];
$campInform = $_POST['campInform'];
$ampliarEsporte = $_POST['ampliarEsporte'];
$sitCriAdol = $_POST['sitCriAdol'];
$atuPoderPub = $_POST['atuPoderPub'];
$eca = $_POST['eca'];
$cmdca = $_POST['cmdca'];
$consTutelar = $_POST['consTutelar'];
$acessouCT = $_POST['acessouCT'];
$trabalhoJovem = $_POST['trabalhoJovem'];
$importAprendiz = $_POST['importAprendiz'];





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




$sql = "insert into aluno(data, responsavel, zona, bairro, comunidade, tipoImovel, regOcupImovel, tipoConstr, abastAgua, tratamentoAgua, coletaEsgoto, destinoLixo, segPublica, numeroPessoas, constFamiliar, rendaFamilia, contribRendaFamiliar, carro, moto, bicicleta, maqLavar, tanquinho, geladeira, lavLoucas, micOndas, fogGas, dvd, tv, apTvcabo, interBl, interCell, computador, notebook, tablet, som, telFxo, telCell, telCell12a, telCell18a, ventilador, arCondicionado, escolMae, escolPai, escolOutroResp, sitOcupMae, sitOcupPai, sitOcupOutro, penaJudicial, regimePena, responsavelPena, possuiDoenca, usoSubstancias, quantosAdultos, inicioUso, tratamentoDep, acessoInternet, localAcesso, tipoEquipamento, conteudoInternet, freqInternet, horasInternet, horasEletronicos, verifAcessos, freqVerifAcessos, usamBatePapo, sozinhas, tempoPai, tempoMae, outroResp, disciplina, paisSeparados, gravidezAdol, idadeAdolGrav, vidaEmRisco, acaoVR, conversaSex, conversaDrogas, conversaViolencia, probDrogas, abortoInduzido, violSexual, trabInfanto, bolsaFam, servConv, brasilSemFront, pronatec, minhaCMV, prouni, fies, outro, atendUbs, morteCrianca, quando, causaMorte, investViolDom, campInform, ampliarEsporte, sitCriAdol, atuPoderPub, eca, cmdca, consTutelar, acessouCT, trabalhoJovem, importAprendiz) values('$data','$responsavel', '$zona','$bairro','$comunidade', '$tipoImovel', '$regOcupImovel', '$tipoConstr', '$abastAgua', '$tratamentoAgua', '$coletaEsgoto', '$destinoLixo', '$segPublica', '$numeroPessoas', '$constFamiliar', '$rendaFamilia', '$contribRendaFamiliar', '$carro','$moto', '$bicicleta', '$maqLavar', '$tanquinho', '$geladeira', '$lavLoucas', '$micOndas', '$fogGas', '$dvd', '$tv', '$apTvcabo', '$interBl', '$interCell', '$computador', '$notebook', '$tablet', '$som', '$telFxo', '$telCell', '$telCell12a', '$telCell18a', '$ventilador', '$arCondicionado', '$escolMae', '$escolPai', '$escolOutroResp', '$sitOcupMae', '$sitOcupPai', '$sitOcupOutro', '$penaJudicial', '$regimePena', '$responsavelPena', '$possuiDoenca', '$usoSubstancias', '$quantosAdultos', '$inicioUso', '$tratamentoDep', '$acessoInternet', '$localAcesso', '$tipoEquipamento', '$conteudoInternet', '$freqInternet', '$horasInternet', '$horasEletronicos', '$verifAcessos', '$freqVerifAcessos', '$usamBatePapo', '$sozinhas', '$tempoPai', '$tempoMae', '$outroResp', '$disciplina', '$paisSeparados', '$gravidezAdol', '$idadeAdolGrav', '$vidaEmRisco', '$acaoVR', '$conversaSex', '$conversaDrogas', '$conversaViolencia', '$probDrogas', '$abortoInduzido', '$violSexual', '$trabInfanto', '$bolsaFam', '$servConv', '$brasilSemFront', '$pronatec', '$minhaCMV', '$prouni', '$fies', '$outro', '$atendUbs', '$morteCrianca', '$quando', '$causaMorte', '$investViolDom', '$campInform', '$ampliarEsporte', '$sitCriAdol', '$atuPoderPub', '$eca', '$cmdca', '$consTutelar', '$acessouCT', '$trabalhoJovem', '$importAprendiz')";
$count = $con->exec($sql);
$rows = $con->query("select count(*) from aluno")->fetchColumn();


echo "<html><head><title>Cadastro OK</title></head><body bgcolor='#00ABF1'><p>$count registro foi concluido</p><br><p><div>Total de questionários já registrados... - <h2>$rows</h2></div></p><br><a href='index.php'><h1>Clique aqui para Novo cadastro</h1></a></body></html>"

 ?>
