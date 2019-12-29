<?php
    date_default_timezone_set('America/Sao_Paulo');
    ini_set('default_charset', 'UTF-8');
    $date = date('d-m-Y H:i');
    include('classes/Bairro.class.php');    

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags -->
	<title>Formulario de Pesquisa Souto Soares</title>
	<meta name="keywords" content="Study Application Form Responsive widget, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- stylesheets -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
<!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Tema opcional -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Última versão JavaScript compilada e minificada -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Última versão CSS compilada e minificada -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- google fonts  -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
<script>
	function verifica(value){
	var zona = document.getElementById("zona");
	if (value == "Rural") {
		comunidade.disabled = false;
		bairro.value = "";
		bairro.disabled = true;
	}else if(value == "Urbana"){
		bairro.disabled = false;
		comunidade.value = "";
		comunidade.disabled = true;
	}
};
function verificaReclusao(value){
	var penaJudicial = document.getElementById("penaJudicial");
	if (value == "Sim") {
		regimePena1.disabled = false;
		regimePena2.disabled = false;
		regimePena3.disabled = false;
		regimePena4.disabled = false;
		regimePena5.disabled = false;
		regimePena6.disabled = false;
		regimePena7.disabled = false;
		responsavelPena1.disabled = false;
		responsavelPena2.disabled = false;
		responsavelPena3.disabled = false;
		responsavelPena4.disabled = false;
		responsavelPena5.disabled = false;
		responsavelPena6.disabled = false;


	}else if(value == "Nao"){
		regimePena7.checked = true;
		responsavelPena6.checked = true;
		regimePena1.disabled = true;
		regimePena2.disabled = true;
		regimePena3.disabled = true;
		regimePena4.disabled = true;
		regimePena5.disabled = true;
		regimePena6.disabled = true;
		regimePena7.disabled = true;
		responsavelPena1.disabled = true;
		responsavelPena2.disabled = true;
		responsavelPena3.disabled = true;
		responsavelPena4.disabled = true;
		responsavelPena5.disabled = true;
		responsavelPena6.disabled = true;
	}
};
function verificaInternet(value) {
	var acessoInternet = document.getElementById("acessoInternet");
	if (value == "sim") {
		localAcesso.disabled = false;
		

	}else if(value == "nao") {

	}
};

</script>
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<div>
			<img src="../logoSoutoSoares.png">
		</div>
		<h1>Monte o Seu Relatório</h1>
	</div>
		<div class="container">
			<div class="heading">
					<h2>Aplicação</h2>
				<p>Atenção selecione os campos que vão compor o seu relatório</p>
			</div>
			<div class="agile-form">
				<form action="insere.php" method="post">
					<div class="form-row">
					<div class="form-group col-md-2">
						<label>Data e Hora</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="data">					</div>
					<div class="form-group col-md-2">
						<label>Nome Digitador</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="responsavel">
					</div>
					
					<div class="form-group col-md-2">
						<label>Zona- </label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="zona">

					</div>

					<div class="form-group col-md-3">
						<label>Bairro - Zona Urbana</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="bairro">

					</div>
					<div class="form-group col-md-3">
						<label>Comunidade - Zona Rural</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="comunidade">

					</div>
					
					<div class = "form-row">
						<div class="form-group col-md-3">
                       
						<label>Tipo do Imóvel.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="tipoImovel">

				
                         </div>
						</div>
						
						<div class="form-group col-md-3">
                        <label>Regime de ocupação do Imóvel.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="regOcupImovel">

						</div>

						<!-- Inicio Questao 3 -->						
						<div class="form-group col-md-3">
                        <label>Tipo de Construção.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="tipoConstr">

						</div>

						<!-- Final questao 3 -->
						<!-- inicio questao 4 -->
						<div class="form-group col-md-3">
                        <label>Fonte de abastecimento de água.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="abastAgua">

						</div>
												
						<!-- final questao 4 -->						

					</div>
		</div>						

				
				<div class = "form-row">
					<div class = "form-group col-md-4">						
					<label>Tratamento de água para beber.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="tratamentoAgua">
					</div>
					<div class = "form-group col-md-4">
					<label>Coleta de esgoto sanitário.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="coletaEsgoto">
					</div>
					
					<div class = "form-group col-md-4">
                    <label> Destino do Lixo.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="destinoLixo">
						</div>

					<div class="form-group col-md-3">
                    <label> Avaliação da Segurança Publica do Bairro.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="segPublica">
			</div>

			</div>
			

					</div>
					<div class = "form-row">
						<div class="form-group col-md-3">
                        <label>Número de Pessoas residentes no domicílio.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="numeroPessoas">
						</div>
						
						<div class="form-group col-md-3">
                        <label>Constituição familiar.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="constFamiliar">
						</div>

						<!-- Inicio Questao 3 -->						
						<div class="form-group col-md-3">
						<label>Qual é a renda total de sua família por mês.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="rendaFamilia">
						</div>

						<!-- Final questao 3 -->
						<!-- inicio questao 4 -->
						<div class="form-group col-md-3">
                        <label>Quem contribui para a renda familiar.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="contribRendaFamiliar">
						</div>
												
						<!-- final questao 4 -->						

					</div>
			
			</div>
			<div class="form-row">
					<div class="form-group col-md-1">
						<label class = "control-label small">14 - Carro</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="carro">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">15 - Moto</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="moto">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">16 - Bicicl.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="bicicleta">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">17-Mq.Lav.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="maqLavar">	
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">18-Tanqui.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="tanquinho">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">19-Gelad.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="geladeira">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">20-L.Louç.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="lavLoucas">					</div>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">21-M.Onda</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="micOndas">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">22-F.Gás</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="fogGas">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">23-DVD</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="dvd">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">24-TV</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="tv">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">25-par/tvcb</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="apTvcabo">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">26-inter.BL</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="interBl">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">27-interCel</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="interCell">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">28-comput.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="computador">					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">29-Noteb.</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="notebook">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">30-Tablet</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="tablet">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">31-Som</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="som">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">32-TelFxo</label>
                        <input class="form-check-input" type="checkbox" name="campo[]" value="telFxo">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">33-TelCell</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="telCell">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">34-TCel12a</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="telCell12a">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">35-TCel18a</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="telCell18a">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">36-Ventil.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="ventilador">
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">37-ArCond.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="arCondicionado">
					</div>
		
			</div>
			<div class = "form-row">
				<div class="form-group col-md-2">
                <label class = "control-label small"> Escol. Mãe / Madastra.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="escolMae">
				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Escol. Pai / Padastro.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="escolPai">
				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Escol. Pai / Padastro.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="escolOutroResp">
				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Sit. Ocup. Mãe / Madastra</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="sitOcupMae">
				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Sit. Ocup. Pai - Padastro</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="sitOcupPai">
				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Sit. Ocup. Outro Responsável</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="sitOcupOutro">
				</div>
				<div class="form-group col-md-3">
                <label class = "control-label small"> Algum dos responsáveis já cumpriu pena judicial</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="penaJudicial">
							</div>
							


				</div>
				<div class="form-group col-md-2">
                <label class = "control-label small"> Em qual regime</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="regimePena">
							</div>
							
				</div>		
				<div class="form-group col-md-2">
                <label class = "control-label small"> Qual O Responsável</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="responsavelPena">
				</div>
				<label class = "control-label small"> Algum dos responsáveis possui alguma doença</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="possuiDoenca">
							</div>
				</div>
				
				

			
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
					

				</div>
				<div class="form-group col-md-3">
                <label class = "control-label small"> adultos faz uso de drogas licitas ou ilicitas</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="usoSubstancias">
                         
				</div>

				<div class="form-group col-md-3">
                <label class = "control-label small"> Quantos (adultos)</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="quantosAdultos">
							</div>




				</div>
				<div class="form-group col-md-3">
                <label class = "control-label small"> Onde iniciou o uso dessa substancia</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="inicioUso">
							</div>

				</div>
				<div class="form-group col-md-3">
                <label class = "control-label small"> Algum usuario esta em tratamento contra a dependencia quimica</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="tratamentoDep">
							</div>


				</div>




			</div>
			
			</div>
			<div class="form-group col-md-3">
            <label class = "control-label small"> acesso a internet</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="acessoInternet">
					</div>
					<div class="form-check">
						<label>Local de Acesso</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="localAcesso">
					</div>
					<div class="form-check">
						<label>Etipo de equipamento </label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="tipoEquipamento">
					</div>


		
			</div>
			<div class="form-group col-md-3">
            <label>tipo de conteudo acessado</label>

					<input class="form-check-input" type="checkbox" name="campo[]" value="conteudoInternet">
					</div>


			</div>
			<div class="form-group col-md-3">
            <label> frequencia do acesso a internet</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="freqInternet">
					</div>



			</div>
			<div class="form-group col-md-3">
            <label>  Quantas horas por dia que ficam na internet</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="horasInternet">
					</div>


			</div>
			<div class="form-group col-md-3">
            <label>  horas por dia que utilizam eletronicos</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="horasEletronicos">
					</div>

			</div>
			<div class="form-group col-md-3">
					
					<label>  responsavel verifica os acessos</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="verifAcessos">
					</div>

			</div>
			<div class="form-group col-md-3">
					
					<label> frequentam salas de bate papo ou conversam com pessoas desconhecidas pela internet</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="usamBatePapo">
					
			</div>
			<div class = "form-row">
				<div class="form-group col-md-12">

				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						
						<label> Horas sozinhas em casa</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="sozinhas">
				</div>
				<div class="form-group col-md-3">						
						<label>Horas efetivas com  Pai/padrasto</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="tempoPai">
				</div>
				<div class="form-group col-md-3">
						
						<label>Horas efetivas com a Mae/madrasta</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="tempoMae">
				</div>
				<div class="form-group col-md-3">					
						<label>Horas efetivas com outro responsavel</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="outroResp">
				</div>
				<div class="form-group col-md-3">
				<label>Educacao/disciplina da crianca/adolescente</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="disciplina">
					</div>

				
				</div>
				<div class="form-group col-md-3">
                    <label>Crianca/adolescente com pais separados(contato)</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="paisSeparados">
					</div>

				</div>
				<div class="form-group col-md-3">					
                    <label> caso de gravidez Crianca/adolescente</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="gravidezAdol">
					</div>

				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-12">

				</div>
			</div>

			<div class = "form-row">
				<div class="form-group col-md-3">
					
					<label> vidaEmRisco</label>
					<input class="form-check-input" type="checkbox" name="campo[]" value="gravidezAdol">

					<div class="form-check">
						<label>Idade da adolecente gravida:</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="idadeAdolGrav">
					</div>


				</div>
				<div class="form-group col-md-3">
					
					<label>Conversa sobre sexualidade</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="conversaSex">

				</div>
				<div class="form-group col-md-3">					
					<label>Conversa sobre drogas</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="conversaDrogas">
				</div>
				<div class="form-group col-md-3">					
					<label>Conversa sobre violencia</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="conversaViolencia">
				</div>
			</div>			

			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">					
						<label> Conhece C/A com problemas com drogas</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="probDrogas">
				</div>
				<div class="form-group col-md-3">						
						<label> Conhece C/A que sofreu aborto induzido</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="abortoInduzido">						
				</div>
				<div class="form-group col-md-3">						
                        <label> Conhece C/A que sofreu violencia sexual</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="violSexual">	
				</div>
				<div class="form-group col-md-3">
					    <label> Conhece C/A que realiza trabalho infantojuvenil</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="trabInfanto">
				</div>


			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">						
                        <label> Participa do BOLSA FAMILIA</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="bolsaFam">
				</div>
				<div class="form-group col-md-3">						
						<label> Serv. de Conv. e Fortalec. de Vinculos</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="servConv">
				</div>
				<div class="form-group col-md-3">					
						<label> Brasil sem fronteiras?</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="brasilSemFront">
				</div>
				<div class="form-group col-md-3">					
						<label> Pronatec</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="pronatec">
				</div>


			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">						
						<label> Minha Casa Minha Vida</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="minhaCMV">
				</div>
				<div class="form-group col-md-3">						
						<label> PROUNI</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="prouni">
				</div>
				<div class="form-group col-md-3">					
						<label> FIES</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="fies">
				</div>
				<div class="form-group col-md-3">					
                        <label> Outro</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="outro">
				</div>

			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">						
                        <label> Fam. atendida equip. UBS</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="atendUbs">
				</div>
				<div class="form-group col-md-3">					
						<label> Houve morte de criança ou adolescente</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="morteCrianca">
				</div>
				<div class="form-group col-md-3">						
						<label>Quando</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="quando">
				</div>
				<div class="form-group col-md-3">
						
						<label>Causa Morte</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="causaMorte">
				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">						
						<label>Em Souto Soares, invest. prev. viol. doméstica</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="investViolDom">
				</div>
				<div class="form-group col-md-3">						
						<label>Em Souto Soares, camp. info. drog. e sex.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="campInform">
				</div>
				<div class="form-group col-md-3">						
						<label>Em Souto Soares, ampliar esporte e lazer.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="ampliarEsporte">
				</div>
				<div class="form-group col-md-3">						
                        <label>Em Souto Soares situação da Cri. e adol.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="sitCriAdol">	
				</div>
			</div>
			<div class = "form-row">
			<div class="form-group col-md-3">						
						<label>Atuação do poder público em rel. Cri. e adol.</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="atuPoderPub">	
				</div>
				<div class="form-group col-md-3">					
						<label>Conhece Estatuto Cri. Adol. (ECA)</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="eca">	
				</div>
				<div class="form-group col-md-3">						
						<label>Conh. Cons. Munic.dos Dir. Cri. e Ad. (CMDCA)</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="cmdca">	
				</div>
				<div class="form-group col-md-3">						
						<label>Conhece Conselho Tutelar</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="consTutelar">	
				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">						
						<label> Ja acess. o Conselho Tutelar</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="acessouCT">	
				</div>
				<div class="form-group col-md-3">						
						<label> Jovem pode trabalhar legalmente</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="trabalhoJovem">	
				</div>
				<div class="form-group col-md-3">					
						<label> O que e importante no trab. Aprendiz</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="importAprendiz">
				</div>
                <div class="form-group col-md-3">					
						<label> Selecionar todos os campos</label>
						<input class="form-check-input" type="checkbox" name="campo[]" value="*">
				</div>
	
			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Agora que você já selecionou todos os campos que aparecerão no seu relatório chegou a hora de Selecionar os filtros!</b></h1>
						</div>

			</div>
            <div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">Filtrar por Zona</span>
						<select class="form-control" name="zona" id ="zona"  required>
							<option selected valeu="0">Todas as Zonas</option>
							<option value="Rural">Rural</option>
							<option value="Urbana">Urbana</option>					
							
						</select>
				</div>            
				<div class="form-group col-md-3">
						<span class = "label label-info"> Bairro </span>
						<select class="form-control" name="abortoInduzido" id = "abortoInduzido"  required>
							<option selected value="0">Todos os bairros</option>							
                            <?php 
                                foreach(Bairro::bairros() as $bairro){
                                         echo "<option value='".$bairro['bairro']."'>".$bairro['bairro']."</option>";
                                } 
                            ?>
						</select>
				</div>
                </div>



		</div>	
								
			<div class = "form-row">
					<div class="form-group col-md-12" align="center">
					<button class="btn btn-default" type="submit" name="button">Enviar</button>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
		<div class="copyright" align="center">
		<p>©2019 Formulários de pesquisa. All rights reserved | Design by <a href="http://www.netosales.com.br">NS informática.</a> - (77)9 9122-2146.</p>

		</div>
	</div>
</body>
</html>
