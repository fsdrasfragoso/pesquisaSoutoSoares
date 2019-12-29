<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('default_charset', 'UTF-8');
$date = date('d-m-Y H:i');
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
						<span class = "label label-info">41 - Sit. Ocup. Mãe / Madastra</span>
						<select class="form-control" name="sitOcupMae" id = "sitOcupMae" >
							<option selected>Escolha uma Opção...</option>
							<option value="Autonoma">1 - Autônoma</option>
							<option value="Profissional Liberal">2 - Profissional Liberal</option>
							<option value="Empresaria">3- Empresária</option>
							<option value="Com Carteira Assinada">4 - Com Carteira Assinada</option>
							<option value="Sem Carteira Assinada">5 - Sem Carteira Assinada</option>
							<option value="Funcionaria Publica Efetiva">6 - Funcionária Pública Efetiva</option>
							<option value="Funcionaria Publica Contratada">7 - Funcionária Pública Contratada</option>
							<option value="Aposentada">8 - Aposentada</option>
							<option value="Pensionista">9 - Pensionista</option>
							<option value="Dona de Casa">10 - Dona de Casa</option>
							<option value="Nunca Trabalhou">11- Nunca Trabalhou</option>
							<option value="Desempregada">12 - Desempregada</option>
							<option value="Diarista">13 - Diarista</option>
							<option value="Estudante">14 - Estudante</option>
							<option value="Outro">15 - Outro</option>
							<option value="Sem Resposta">16 - Sem Resposta</option>
						</select>
				</div>
				<div class="form-group col-md-2">
						<span class = "label label-info">42 - Sit. Ocup. Pai - Padastro</span>
						<select class="form-control" name="sitOcupPai" id = "sitOcupPai" >
							<option selected>Escolha uma Opção...</option>
							<option value="Autonoma">1 - Autônoma</option>
							<option value="Profissional Liberal">2 - Profissional Liberal</option>
							<option value="Empresaria">3- Empresária</option>
							<option value="Com Carteira Assinada">4 - Com Carteira Assinada</option>
							<option value="Sem Carteira Assinada">5 - Sem Carteira Assinada</option>
							<option value="Funcionaria Publica Efetiva">6 - Funcionária Pública Efetiva</option>
							<option value="Funcionaria Publica Contratada">7 - Funcionária Pública Contratada</option>
							<option value="Aposentada">8 - Aposentada</option>
							<option value="Pensionista">9 - Pensionista</option>
							<option value="Dona de Casa">10 - Dona de Casa</option>
							<option value="Nunca Trabalhou">11- Nunca Trabalhou</option>
							<option value="Desempregada">12 - Desempregada</option>
							<option value="Diarista">13 - Diarista</option>
							<option value="Estudante">14 - Estudante</option>
							<option value="Outro">15 - Outro</option>
							<option value="Sem Resposta">16 - Sem Resposta</option>
						</select>
				</div>
				<div class="form-group col-md-2">
						<span class = "label label-info">42 - Sit. Ocup. Outro Responsável</span>
						<select class="form-control" name="sitOcupOutro" id = "sitOcupOutro" >
							<option selected>Escolha uma Opção...</option>
							<option value="Autonoma">1 - Autônoma</option>
							<option value="Profissional Liberal">2 - Profissional Liberal</option>
							<option value="Empresaria">3- Empresária</option>
							<option value="Com Carteira Assinada">4 - Com Carteira Assinada</option>
							<option value="Sem Carteira Assinada">5 - Sem Carteira Assinada</option>
							<option value="Funcionaria Publica Efetiva">6 - Funcionária Pública Efetiva</option>
							<option value="Funcionaria Publica Contratada">7 - Funcionária Pública Contratada</option>
							<option value="Aposentada">8 - Aposentada</option>
							<option value="Pensionista">9 - Pensionista</option>
							<option value="Dona de Casa">10 - Dona de Casa</option>
							<option value="Nunca Trabalhou">11- Nunca Trabalhou</option>
							<option value="Desempregada">12 - Desempregada</option>
							<option value="Diarista">13 - Diarista</option>
							<option value="Estudante">14 - Estudante</option>
							<option value="Outro">15 - Outro</option>
							<option value="Sem Resposta">16 - Sem Resposta</option>
						</select>
				</div>
				<div class="form-group col-md-3">
							<span class = "label label-success">48. Algum dos responsáveis já cumpriu pena judicial?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="penaJudicial" id="penaJudicial1" onchange="verificaReclusao(this.value)" value="Sim" >
								<label class="form-check-label" for="penaJudicial1">
									1. Sim
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="penaJudicial" id="penaJudicial2" onchange="verificaReclusao(this.value)" value="Nao" checked>
								<label class="form-check-label" for="penaJudicial2">
									2. Não
								</label>
							</div>
							


				</div>
				<div class="form-group col-md-2">
							<span class = "label label-success">49. Em qual regime?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena1" value="Reclusao / Fechado" disabled>
								<label class="form-check-label" for="regimePena1">
									1. Reclusão/Fechado
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena2" value="Aberto" disabled>
								<label class="form-check-label" for="regimePena2">
									2. Aberto
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena3" value="Semiaberto" disabled>
								<label class="form-check-label" for="regimePena3">
									3. Semiaberto
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena4" value="Provisorio" disabled>
								<label class="form-check-label" for="regimePena4">
									4. Provisório
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena5" value="Outro" disabled>
								<label class="form-check-label" for="regimePena5">
									5. Outro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena6" value="Sem Resposta" disabled>
								<label class="form-check-label" for="regimePena6">
									6. Sem Resposta
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regimePena" id="regimePena7" value="Nao se Aplica" checked>
								<label class="form-check-label" for="regimePena7">
									7. Não se Aplica
								</label>
							</div>
							
				</div>		
				<div class="form-group col-md-2">
							<span class = "label label-success">50. Qual O Responsável?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena1" value="Mae / Madrasta" disabled>
								<label class="form-check-label" for="responsavelPena1">
									1. Mãe / Madrasta
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena2" value="Pai / Padrasto" disabled>
								<label class="form-check-label" for="responsavelPena2">
									2. Pai / Padrasto
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena3" value="irmao" disabled>
								<label class="form-check-label" for="responsavelPena3">
									3. Irmão
								</label>
							</div>
							
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena4" value="Outro" disabled>
								<label class="form-check-label" for="responsavelPena4">
									4. Outro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena5" value="Sem Resposta" disabled>
								<label class="form-check-label" for="responsavelPena5">
									5. Sem Resposta
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="responsavelPena" id="responsavelPena6" value="Nao se Aplica" checked>
								<label class="form-check-label" for="responsavelPena6">
									6. Não se Aplica
								</label>
							</div>
				</div>
				<div class="form-group col-md-3">
							<span class = "label label-danger">51. Algum dos responsáveis possui alguma doença?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="possuiDoenca" id="possuiDoenca1"  value="Sim" >
								<label class="form-check-label" for="possuiDoenca1">
									1. Sim
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="possuiDoenca" id="possuiDoenca2"   value="Nao">
								<label class="form-check-label" for="possuiDoenca2">
									2. Não
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="possuiDoenca" id="possuiDoenca3"   value="Sem Resposta" checked>
								<label class="form-check-label" for="possuiDoenca3">
									3. Sem Resposta
							</label>
							</div>
				</div>
				
				

			
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
					

				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">52. Algum dos adultos faz uso das substancias a sequir?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias1"  value="Alcool" >
								<label class="form-check-label" for="usoSubstancias1">
									1. Alcool
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias2"   value="Cigarro">
								<label class="form-check-label" for="usoSubstancias2">
									2. Cigarro
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias3"   value="Maconha">
								<label class="form-check-label" for="usoSubstancias3">
									3. Maconha
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias4"   value="Crack">
								<label class="form-check-label" for="usoSubstancias4">
									4. Crack
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias5"   value="Cocaina">
								<label class="form-check-label" for="usoSubstancias5">
									5. Cocaina
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias6"   value="Outro">
								<label class="form-check-label" for="usoSubstancias6">
									6. Outro
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias7"   value="Nao">
								<label class="form-check-label" for="usoSubstancias7">
									7. Nao
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias8"   value="Sem Reposta">
								<label class="form-check-label" for="usoSubstancias8">
									8. Sem Resposta
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="usoSubstancias" id="usoSubstancias9"   value="Nao se aplica" checked>
								<label class="form-check-label" for="usoSubstancias9">
									9. Nao se aplica
							</label>
							</div>


				</div>

				<div class="form-group col-md-3">
					<span class = "label label-warning">53. Quantos (adultos)?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="quantosAdultos" id="quantosAdultos1"   value="1">
								<label class="form-check-label" for="quantosAdultos1">
									1. 01
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="quantosAdultos" id="quantosAdultos2"   value="2 a 3">
								<label class="form-check-label" for="quantosAdultos2">
									2. De 02 a 03
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="quantosAdultos" id="quantosAdultos3"   value="Mais de 3">
								<label class="form-check-label" for="quantosAdultos3">
									3. Mais de  03
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="quantosAdultos" id="quantosAdultos4"   value="Sem Resposta">
								<label class="form-check-label" for="quantosAdultos4">
									4. Sem Resposta
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="quantosAdultos" id="quantosAdultos5"   value="Nao se aplica" checked>
								<label class="form-check-label" for="quantosAdultos5">
									5. Nao se aplica
							</label>
							</div>




				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">54. Onde iniciou o uso dessa substancia?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso1"  value="escola" >
								<label class="form-check-label" for="inicioUso1">
									1. Escola
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso2"   value="festa">
								<label class="form-check-label" for="inicioUso2">
									2. Festa
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso3"   value="na propria residencia">
								<label class="form-check-label" for="inicioUso3">
									3. Na propria residencia
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso4"   value="casa de amigos">
								<label class="form-check-label" for="inicioUso4">
									4. Casa de amigos
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso5"   value="bairro">
								<label class="form-check-label" for="inicioUso5">
									5. Bairro
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso6"   value="Outro">
								<label class="form-check-label" for="inicioUso6">
									6. Outro
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="iniciouso" id="inicioUso7"   value="Sem Reposta">
								<label class="form-check-label" for="inicioUso7">
									7. Sem Resposta
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="inicioUso" id="inicioUso8"   value="Nao se aplica" checked>
								<label class="form-check-label" for="inicioUso8">
									8. Nao se aplica
							</label>
							</div>

				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">55. Algum usuario esta em tratamento contra a dependencia quimica?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="tratamentoDep" id="tratamentoDep1"  value="Sim" >
								<label class="form-check-label" for="tratamentoDep1">
									1. Sim
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tratamentoDep" id="tratamentoDep2"   value="Nao">
								<label class="form-check-label" for="tratamentoDep2">
									2. Nao
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tratamentoDep" id="tratamentoDep3"   value="Sem Resposta">
								<label class="form-check-label" for="tratamentoDep3">
									3. Sem Resposta
							</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tratamentoDep" id="tratamentoDep4"   value="nao se aplica" checked>
								<label class="form-check-label" for="tratamentoDep4">
									4. Nao se aplica
							</label>
							</div>


				</div>




			</div>
			

			
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Crianças e adolescentes - Questões de 56 a 75</b></h1>
						</div>

			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">56. Tem acesso a internet?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="acessoInternet" id="acessoInternet1"  value="sim" onClick="verificaInternet(this.value)"> 
								<label class="form-check-label" for="acessoInternet1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="acessoInternet" id="acessoInternet2"  value="nao" >
								<label class="form-check-label" for="acessoInternet2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="acessoInternet" id="acessoInternet3"  value="sem resposta" >
								<label class="form-check-label" for="acessoInternet3">
									3. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="acessoInternet" id="acessoInternet4"  value="nao se aplica" onchange="verificaInternet(this.value)"checked>
								<label class="form-check-label" for="acessoInternet4">
									4. Nao se aplica
								</label>
					</div>
					<div class="form-check">
						<label>Local de Acesso:</label>
						<input class="form-control" type="text" name="localAcesso" value="nao se aplica">
					</div>
					<div class="form-check">
						<label>Em qual tipo de equipamento? </label>
						<select class="form-control" name="tipoEquipamento" id = "tipoEquipamento">
							<option selected>Escolha uma Opção...</option>
							<option value="computador">1 - Computador de mesa</option>
							<option value="notebook">2 - Notebook</option>
							<option value="celular">3 - Celular ou Tablet</option>
						</select>
					</div>


		
			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">57. Que tipo de conteudo elas acessam?</span>

					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet1"  value="sites de entretenimento"> 
								<label class="form-check-label" for="conteudoInternet1">
									1. Sites de entretenimento
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet2"  value="redes sociais"> 
								<label class="form-check-label" for="conteudoInternet2">
									2. Redes sociais
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet3"  value="jogos"> 
								<label class="form-check-label" for="conteudoInternet3">
									3. Jogos
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet4"  value="pesquisa escolar"> 
								<label class="form-check-label" for="conteudoInternet4">
									4. Pesquisa escolar
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet5"  value="outro"> 
								<label class="form-check-label" for="conteudoInternet5">
									5. Outro
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet6"  value="nao sabe"> 
								<label class="form-check-label" for="conteudoInternet6">
									6. Nao sabe
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet7"  value="sem resposta"> 
								<label class="form-check-label" for="conteudoInternet7">
									7. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conteudoInternet" id="conteudoInternet8"  value="nao se aplica" checked> 
								<label class="form-check-label" for="conteudoInternet8">
									8. Nao se aplica
								</label>
					</div>


			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">58. Com que frequencia elas acessam a internet?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet1"  value="nunca"> 
								<label class="form-check-label" for="freqInternet1">
									1. Nunca
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet2"  value="uma vez por semana"> 
								<label class="form-check-label" for="freqInternet2">
									2. Uma vez por semana
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet3"  value="ate 3 vezes por semana"> 
								<label class="form-check-label" for="freqInternet3">
									3. Ate 3 vezes por semana
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet4"  value="de 4 a 6 vezes por semana"> 
								<label class="form-check-label" for="freqInternet4">
									4. De 4 a 6 vezes por semana
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet5"  value="todos os dias"> 
								<label class="form-check-label" for="freqInternet5">
									5. Todos os dias
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet6"  value="nao sabe"> 
								<label class="form-check-label" for="freqInternet6">
									6. Nao sabe
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet7"  value="sem resposta"> 
								<label class="form-check-label" for="freqInternet7">
									7. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqInternet" id="freqInternet8"  value="nao se aplica" checked> 
								<label class="form-check-label" for="freqInternet8">
									8. Nao se aplica
								</label>
					</div>



			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">59. Quantas horas por dia elas ficam na internet?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet1"  value="ate 1 hora"> 
								<label class="form-check-label" for="horasInternet1">
									1. Ate 1 hora
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet2"  value="de  1 a 3 horas"> 
								<label class="form-check-label" for="horasInternet2">
									2. De 1 a 3 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet3"  value="de 3 a 5 horas"> 
								<label class="form-check-label" for="horasInternet3">
									3. De 3 a 5 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet4"  value="mais de 5 horas"> 
								<label class="form-check-label" for="horasInternet4">
									4. Mais de 5 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet5"  value="nao sabe"> 
								<label class="form-check-label" for="horasInternet5">
									5. Nao sabe
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet6"  value="sem resposta"> 
								<label class="form-check-label" for="horasInternet6">
									6. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasInternet" id="horasInternet7"  value="nao se aplica" checked> 
								<label class="form-check-label" for="horasInternet7">
									7. Nao se aplica
								</label>
					</div>


			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">60. Quantas horas por dia elas utilizam eletronicos?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicos1"  value="ate 1 hora"> 
								<label class="form-check-label" for="horasEletronicos1">
									1. Ate 1 hora
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicos2"  value="de 1 a 3 horas"> 
								<label class="form-check-label" for="horasEletronicos2">
									2. De 1 a 3 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id=i"horasEletronicos3"  value="de 3 a 5 horas"> 
								<label class="form-check-label" for="horasEletronicos3">
									3. De 3 a 5 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicosi4"  value="mais de 5 horas"> 
								<label class="form-check-label" for="horasEletronicos4">
									4. Mais de 5 horas
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicos5"  value="nao sabe"> 
								<label class="form-check-label" for="horasEletronicos5">
									5. Nao sabe
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicos6"  value="sem resposta"> 
								<label class="form-check-label" for="horasEletronicos6">
									6. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="horasEletronicos" id="horasEletronicos7"  value="nao se aplica" checked> 
								<label class="form-check-label" for="horasEletronicos7">
									7. Nao se aplica
								</label>
					</div>

			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">61. Algum responsavel verifica os acessos?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="verifAcessos" id="verifAcessos1"  value="sim"> 
								<label class="form-check-label" for="verifAcessos1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="verifAcessos" id="verifAcessos2"  value="nao"> 
								<label class="form-check-label" for="verifAcessos2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="verifAcessos" id="verifAcessos3"  value="sem resposta"> 
								<label class="form-check-label" for="verifAcessos3">
									3. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="verifAcessos" id="verifAcessos4"  value="nao se aplica" checked> 
								<label class="form-check-label" for="verifAcessos4">
									4. Nao se aplica
								</label>
					</div>

			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">62. Com que frequencia?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos1"  value="em todos os acessos"> 
								<label class="form-check-label" for="freqVerifAcessos1">
									1. Em todos os acessos
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos2"  value="diariamente"> 
								<label class="form-check-label" for="freqVerifAcessos2">
									2. Diariamente
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos3"  value="uma vez por semana"> 
								<label class="form-check-label" for="freqVerifAcessos3">
									3. Uma vez por semana
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos4"  value="uma vez por mes"> 
								<label class="form-check-label" for="freqVerifAcessos4">
									4. Uma vez por mes
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos5"  value="aleatoriamente"> 
								<label class="form-check-label" for="freqVerifAcessos5">
									5. Aleatoriamente
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos6"  value="nunca"> 
								<label class="form-check-label" for="freqVerifAcessos6">
									6. Nunca
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos7"  value="sem resposta"> 
								<label class="form-check-label" for="freqVerifAcessos7">
									7. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="freqVerifAcessos" id="freqVerifAcessos8"  value="nao se aplica" checked> 
								<label class="form-check-label" for="freqVerifAcessos8">
									8. Nao se aplica
								</label>
					</div>

			</div>
			<div class="form-group col-md-3">
					<span class = "label label-warning">63. Eles frequentam salas de bate papo ou conversam com pessoas desconhecidas pela internet?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="usamBatePapo" id="usamBatePapo1"  value="sim"> 
								<label class="form-check-label" for="usamBatePapo1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="usamBatePapo" id="usamBatePapo2"  value="nao"> 
								<label class="form-check-label" for="usamBatePapo2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="usamBatePapo" id="usamBatePapo3"  value="nao sabe"> 
								<label class="form-check-label" for="usamBatePapo3">
									3. Nao sabe
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="usamBatePapo" id="usamBatePapo4"  value="sem resposta"> 
								<label class="form-check-label" for="usamBatePapo4">
									4. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="usamBatePapo" id="usamBatePapo5"  value="nao se aplica" checked> 
								<label class="form-check-label" for="usamBatePapo5">
									5. Nao se aplica
								</label>
					</div>
					
			</div>
			<div class = "form-row">
				<div class="form-group col-md-12">

				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">64 - Horas sozinhas em casa? </span>
						<select class="form-control" name="sozinhas" id = "sozinhas"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="nenhuma">1 - Nenhuma</option>
							<option value="menos de 1 hora">2 - Menos de 1 hora</option>
							<option value="de 1 a 3 horas">3 - De 1 a 3 horas</option>
							<option value="de 3 a 5 horas">4 - De 3 a 5 horas</option>
							<option value="mais de 5 horas">5 - Mais de 5 horas</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>

						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">65 - Horas efetivas com  Pai/padrasto? </span>
						<select class="form-control" name="tempoPai" id = "tempoPai"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="nenhuma">1 - Nenhuma</option>
							<option value="menos de 1 hora">2 - Menos de 1 hora</option>
							<option value="de 1 a 3 horas">3 - De 1 a 3 horas</option>
							<option value="de 3 a 5 horas">4 - De 3 a 5 horas</option>
							<option value="mais de 5 horas">5 - Mais de 5 horas</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>

						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">66 - Horas efetivas com a Mae/madrasta? </span>
						<select class="form-control" name="tempoMae" id = "tempoMae"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="nenhuma">1 - Nenhuma</option>
							<option value="menos de 1 hora">2 - Menos de 1 hora</option>
							<option value="de 1 a 3 horas">3 - De 1 a 3 horas</option>
							<option value="de 3 a 5 horas">4 - De 3 a 5 horas</option>
							<option value="mais de 5 horas">5 - Mais de 5 horas</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>

						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">67 - Horas efetivas com outro responsavel? </span>
						<select class="form-control" name="outroResp" id = "outroResp"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="nenhuma">1 - Nenhuma</option>
							<option value="menos de 1 hora">2 - Menos de 1 hora</option>
							<option value="de 1 a 3 horas">3 - De 1 a 3 horas</option>
							<option value="de 3 a 5 horas">4 - De 3 a 5 horas</option>
							<option value="mais de 5 horas">5 - Mais de 5 horas</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>

						</select>
				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">68. Educacao/disciplina da crianca/adolescente</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina1"  value="dialogo"> 
								<label class="form-check-label" for="disciplina1">
									1. Dialogo
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina2"  value="castigo"> 
								<label class="form-check-label" for="disciplina2">
									2. Castigo
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina3"  value="castigo fisico"> 
								<label class="form-check-label" for="disciplina3">
									3. Castigo fisico
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina4"  value="nenhum"> 
								<label class="form-check-label" for="disciplina4">
									4. Nenhum
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina5"  value="outro"> 
								<label class="form-check-label" for="disciplina5">
									5. Outro
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina6"  value="sem resposta"> 
								<label class="form-check-label" for="disciplina6">
									6. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="disciplina" id="disciplina7"  value="nao se aplica" checked> 
								<label class="form-check-label" for="disciplina7">
									7. Nao se aplica
								</label>
					</div>

				
				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">69. Crianca/adolescente com pais separados(contato).</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados1"  value="visita livre"> 
								<label class="form-check-label" for="paisSeparados1">
									1. Visita Livre
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados2"  value="nos finais de semana"> 
								<label class="form-check-label" for="paisSeparados2">
									2. Nos finais de semana
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados3"  value="finais de semana alternados"> 
								<label class="form-check-label" for="paisSeparados3">
									3. Finais de semana alternados
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados4"  value="uma vez por mes"> 
								<label class="form-check-label" for="paisSeparados4">
									4. Uma vez por mes
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados5"  value="guarda compartilhada"> 
								<label class="form-check-label" for="paisSeparados5">
									5. Guarda compartilhada (dec. jud.)
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados6"  value="nenhuma"> 
								<label class="form-check-label" for="paisSeparados6">
									6. Nenhuma
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados7"  value="nunca conheceu genitor"> 
								<label class="form-check-label" for="paisSeparados7">
									7. Nunca conheceu genitor
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados8"  value="outro"> 
								<label class="form-check-label" for="paisSeparados8">
									8. Outro
								</label>
					</div>

					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados9"  value="sem resposta"> 
								<label class="form-check-label" for="paisSeparados9">
									9. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="paisSeparados" id="paisSeparados10"  value="nao se aplica" checked> 
								<label class="form-check-label" for="paisSeparados10">
									10. Nao se aplica
								</label>
					</div>

				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">70. caso de gravidez Crianca/adolescente?.</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="gravidezAdol" id="gravidezAdol1"  value="sim, houve"> 
								<label class="form-check-label" for="gravidezAdol1">
									1. Sim, houve
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="gravidezAdol" id="gravidezAdol2"  value="sim, atualmente"> 
								<label class="form-check-label" for="gravidezAdol2">
									2. Sim, atualmente
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="gravidezAdol" id="gravidezAdol3"  value="nao"> 
								<label class="form-check-label" for="gravidezAdo3">
									3. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="gravidezAdol" id="gravidezAdol4"  value="sem resposta"> 
								<label class="form-check-label" for="gravidezAdol4">
									4. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="gravidezAdol" id="gravidezAdol5"  value="nao se aplica" checked> 
								<label class="form-check-label" for="gravidezAdol5">
									5. Nao se aplica
								</label>
					</div>

				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">71. Qual a idade caso de gravidez Crianca/adolescente?.</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav1"  value="de 8 a 10"> 
								<label class="form-check-label" for="idadeAdolGrav1">
									1. De 8 a 10
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav2"  value="de 11 a 12"> 
								<label class="form-check-label" for="idadeAdolGrav2">
									2. De 11 a 12
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav3"  value="de 13 a 14"> 
								<label class="form-check-label" for="idadeAdolGrav3">
									3. De 13 a 14
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav4"  value="de 15 a 16"> 
								<label class="form-check-label" for="idadeAdolGrav4">
									4. De 15 a 16
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav5"  value="17 anos"> 
								<label class="form-check-label" for="idadeAdolGrav5">
									5. 17 anos
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav6"  value="sem resposta"> 
								<label class="form-check-label" for="idadeAdolGrav6">
									6. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="idadeAdolGrav" id="idadeAdolGrav7"  value="nao se aplica" checked> 
								<label class="form-check-label" for="idadeAdolGrav7">
									7. Nao se aplica
								</label>
					</div>

				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-12">

				</div>
			</div>

			<div class = "form-row">
				<div class="form-group col-md-3">
					<span class = "label label-warning">72. Crianca/adolescente com vida em risco?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="vidaEmRisco" id="vidaEmRisco1"  value="sim"> 
								<label class="form-check-label" for="vidaEmRisco1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="vidaEmRisco" id="vidaEmRisco2"  value="nao"> 
								<label class="form-check-label" for="vidaEmRisco2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="vidaEmRisco" id="vidaEmRisco3"  value="sem resposta"> 
								<label class="form-check-label" for="vidaEmRisco3">
									3. Sem resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="vidaEmRisco" id="vidaEmRisco4"  value="nao se aplica" checked> 
								<label class="form-check-label" for="vidaEmRisco4">
									4. Nao se aplica
								</label>
					</div>

					<div class="form-check">
						<label>Se sim, qual:</label>
						<input class="form-control" type="text" name="acaoVR" value="nao se aplica">
					</div>


				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">73. Conversa sobre sexualidade?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaSex" id="conversaSex1"  value="sim"> 
								<label class="form-check-label" for="conversaSex1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaSex" id="conversaSex2"  value="nao"> 
								<label class="form-check-label" for="conversaSex2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaSex" id="conversaSex3"  value="sem resposta"> 
								<label class="form-check-label" for="conversaSex3">
									3. Sem Resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaSex" id="conversaSex4"  value="nao se aplica" checked> 
								<label class="form-check-label" for="conversaSex4">
									4. Nao se aplica
								</label>
					</div>


				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">74. Conversa sobre drogas?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaDrogas" id="conversaDrogas1"  value="sim"> 
								<label class="form-check-label" for="conversaDrogas1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaDrogas" id="conversaDrogas2"  value="nao"> 
								<label class="form-check-label" for="conversaDrogas2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaDrogas" id="conversaDrogas3"  value="sem resposta"> 
								<label class="form-check-label" for="conversaDrogas3">
									3. Sem Resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaDrogas" id="conversaDrogas4"  value="nao se aplica" checked> 
								<label class="form-check-label" for="conversaDrogas4">
									4. Nao se aplica
								</label>
					</div>


				</div>
				<div class="form-group col-md-3">
					<span class = "label label-warning">75. Conversa sobre violencia?</span>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaViolencia" id="conversaViolencia1"  value="sim"> 
								<label class="form-check-label" for="conversaViolencia1">
									1. Sim
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaViolencia" id="conversaViolencia2"  value="nao"> 
								<label class="form-check-label" for="conversaViolencia2">
									2. Nao
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaViolencia" id="conversaViolencia3"  value="sem resposta"> 
								<label class="form-check-label" for="conversaViolencia3">
									3. Sem Resposta
								</label>
					</div>
					<div class="form-check">
								<input class="form-check-input" type="radio" name="conversaViolencia" id="conversaViolencia4"  value="nao se aplica" checked> 
								<label class="form-check-label" for="conversaViolencia4">
									4. Nao se aplica
								</label>
					</div>
	

				</div>
			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Outras informacoes e conhecimentos - Questoes de 76 a 102</b></h1>
						</div>

			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">76 - Conhece C/A com problemas com drogas? </span>
						<select class="form-control" name="probDrogas" id = "probDrogas"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="nao sabe">3 - Nao sabe</option>
							<option value="sem resposta">4 - Sem resposta</option>
							<option value="nao se aplica">5 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">77 - Conhece C/A que sofreu aborto induzido? </span>
						<select class="form-control" name="abortoInduzido" id = "abortoInduzido"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="nao sabe">3 - Nao sabe</option>
							<option value="sem resposta">4 - Sem resposta</option>
							<option value="nao se aplica">5 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">78 - Conhece C/A que sofreu violencia sexual? </span>
						<select class="form-control" name="violSexual" id = "violSexual"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="nao sabe">3 - Nao sabe</option>
							<option value="sem resposta">4 - Sem resposta</option>
							<option value="nao se aplica">5 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">79 - Conhece C/A que realiza trabalho infantojuvenil? </span>
						<select class="form-control" name="trabInfanto" id = "trabInfanto"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="nao sabe">3 - Nao sabe</option>
							<option value="sem resposta">4 - Sem resposta</option>
							<option value="nao se aplica">5 - Nao se aplica</option>
							
						</select>
				</div>


			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">80 - Participa do BOLSA FAMILIA? </span>
						<select class="form-control" name="bolsaFam" id = "bolsaFam"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">81 - Serv. de Conv. e Fortalec. de Vinculos? </span>
						<select class="form-control" name="servConv" id = "servConv"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">82 - Brasil sem fronteiras? </span>
						<select class="form-control" name="brasilSemFront" id = "brasilSemFront"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">83 - Pronatec? </span>
						<select class="form-control" name="pronatec" id = "pronatec"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>


			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">84 - Minha Casa Minha Vida? </span>
						<select class="form-control" name="minhaCMV" id = "minhaCMV"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">85 - PROUNI? </span>
						<select class="form-control" name="prouni" id = "prouni"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">86 - FIES? </span>
						<select class="form-control" name="fies" id = "fies"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">87 - Outro? </span>
						<select class="form-control" name="outro" id = "outro"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>

			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">88 - Fam. atendida equip. UBS? </span>
						<select class="form-control" name="atendUbs" id = "atendUbs"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">89 - Houve morte de criança ou adolescente? </span>
						<select class="form-control" name="morteCrianca" id = "morteCrianca"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">90 - Quando? </span>
						<select class="form-control" name="quando" id = "quando"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="menos de um ano">1 - Há menos de um ano</option>
							<option value="de 1 a 3 anos">2 - De 1 a 3 anos</option>
							<option value="de 3 a 5 anos">3 - De 3 a 5 anos</option>
							<option value="de 5 a 10 anos">4 - De 5 a 10 anos</option>
							<option value="mais de 10 anos">5 - Mais de 10 anos</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">91 - Causa Morte? </span>
						<select class="form-control" name="causaMorte" id = "causaMorte"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="natural">1 - Natural</option>
							<option value="acidente de transito">2 - Acidente de Trânsito</option>
							<option value="acidente domestico">3 - Acidente doméstico</option>
							<option value="acidente com armas de fogo">4 - Acidente com armas de fogo</option>
							<option value="homicidio">5 - Homicídio</option>
							<option value="outro">6 - Outro</option>
							<option value="sem resposta">7 - Sem resposta</option>
							<option value="nao se aplica">8 - Nao se aplica</option>
						</select>
				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">92 - Em Souto Soares, invest. prev. viol. doméstica? </span>
						<select class="form-control" name="investViolDom" id = "investViolDom"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">93 - Em Souto Soares, camp. info. drog. e sex.? </span>
						<select class="form-control" name="campInform" id = "campInform"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">94 - Em Souto Soares, ampliar esporte e lazer? </span>
						<select class="form-control" name="ampliarEsporte" id = "ampliarEsporte"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">95 - Em Souto Soares situação da Cri. e adol.? </span>
						<select class="form-control" name="sitCriAdol" id = "sitCriAdol"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="otima">1 - Ótima</option>
							<option value="boa">2 - Boa</option>
							<option value="regular">3 - Regular</option>
							<option value="ruim">4 - Ruim</option>
							<option value="pessima">5 - Péssima</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>
						</select>
				</div>
			</div>
			<div class = "form-row">
			<div class="form-group col-md-3">
						<span class = "label label-info">96 - Atuação do poder público em rel. Cri. e adol.? </span>
						<select class="form-control" name="atuPoderPub" id = "atuPoderPub"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="otima">1 - Ótima</option>
							<option value="boa">2 - Boa</option>
							<option value="regular">3 - Regular</option>
							<option value="ruim">4 - Ruim</option>
							<option value="pessima">5 - Péssima</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">97 - Conhece Estatuto Cri. Adol. (ECA)? </span>
						<select class="form-control" name="eca" id = "eca"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">98 - Conh. Cons. Munic.dos Dir. Cri. e Ad. (CMDCA)? </span>
						<select class="form-control" name="cmdca" id = "cmdca"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">99 - Conhece Conselho Tutelar? </span>
						<select class="form-control" name="consTutelar" id = "consTutelar"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
			</div>
			<div class = "form-row">
				<div class="form-group col-md-3">
						<span class = "label label-info">100 - Ja acess. o Conselho Tutelar? </span>
						<select class="form-control" name="acessouCT" id = "acessouCT"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="sim">1 - Sim</option>
							<option value="nao">2 - Nao</option>
							<option value="sem resposta">3 - Sem resposta</option>
							<option value="nao se aplica">4 - Nao se aplica</option>
							
						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">101 - Jovem pode trabalhar legalmente? </span>
						<select class="form-control" name="trabalhoJovem" id = "trabalhoJovem"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="nao">1 - Nao</option>
							<option value="sim, em qualquer funcao cm carteira assinada">2 - Sim, em qualquer func. com cart. assinada</option>
							<option value="sim, como aprendiz">3 - Sim, como aprendiz</option>
							<option value="sem resposta">4 - Sem resposta</option>
							<option value="nao se aplica">5 - Nao se aplica</option>

						</select>
				</div>
				<div class="form-group col-md-3">
						<span class = "label label-info">102 - O que e importante no trab. Aprendiz? </span>
						<select class="form-control" name="importAprendiz" id = "importAprendiz"  required>
							<option selected>Escolha uma Opção...</option>
							<option value="ajuda financeira">1 - Ajuda financeira a familia</option>
							<option value="independencia financeira">2 - Independencia financeira do jovem</option>
							<option value="experiencia profissiona">3 - Experiencia profissional</option>
							<option value="facilidade ingresso mercado de trabalho">4 - Facilidade ingresso mercado de trabalho</option>
							<option value="outros">5 - Outros</option>
							<option value="sem resposta">6 - Sem resposta</option>
							<option value="nao se aplica">7 - Nao se aplica</option>

						</select>
				</div>
	
			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>- - - - - - - - - - - - - - -  - - - - - - - - F I N A L - -  - - -- - - - - - - - - - - - - -</b></h1>
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
