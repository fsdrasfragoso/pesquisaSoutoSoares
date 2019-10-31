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
</script>
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<div>
			<img src="logoSoutoSoares.png">
		</div>
		<h1>Formulário de Pesquisa</h1>
	</div>
		<div class="container">
			<div class="heading">
					<h2>Aplicação</h2>
				<p>Preencha os campos com atenção</p>
			</div>
			<div class="agile-form">
				<form action="insere.php" method="post">
					<div class="form-row">
					<div class="form-group col-md-2">
						<label>Data e Hora</label>
						<input class="form-control" type="text" name="data" value="<?php echo $date; ?>" readonly="readonly" required>
					</div>
					<div class="form-group col-md-2">
						<label>Nome Digitador</label>
						<input class="form-control" type="text" name="responsavel" value="" required>
					</div>
					
					<div class="form-group col-md-2">
						<label>Zona- </label>
						<select class="form-control" name="zona" id = "zona" onchange="verifica(this.value)" required>
							<option selected>Escolha uma Opção...</option>
							<option value="Rural">1 - Rural</option>
							<option value="Urbana">2 - Urbana</option>
						</select>
					</div>

					<div class="form-group col-md-3">
						<label>Bairro - Zona Urbana</label>
						<select class="form-control" name="bairro" id = "bairro" disabled = "true" required>
							<option selected>Escolha uma Opção...</option>
							<option value="Barroquinha">1 - Barroquinha</option>
							<option value="Centro">2 - Centro</option>
							<option value="Loteamento Flavia">3 - Loteamento Fl&aacutevia</option>
							<option value="Outro Lado">4 - Outro Lado</option>
						</select>
					</div>
					<div class="form-group col-md-3">
						<label>Comunidade - Zona Rural</label>
						<select class="form-control" name="comunidade" id="comunidade" disabled = "true" required>
							<option selected>Escolha uma Opção...</option>
							<option value="Alagadico de Campo Alegre">1 - Alagadiço e Campo Alegre</option>
							<option value="Alagadico de Pocinho">2 - Alagadiço de Pocinho</option>
							<option value="Alto da Boa Vista">3 - Alto da Boa Vista</option>
							<option value="Angico">4 - Angico</option>
							<option value="Arcênio">5 - Arcênio</option>
							<option value="As Lagoas">6 - As Lagoas</option>
							<option value="Baixa da Banana">7 - Baixa da Banana</option>
							<option value="Baixa de Zé Pedro">8 - Baixa de Zé Pedro</option>
							<option value="Baraúna 1">9 - Baraúna 1</option>
							<option value="Baraúna 2">10 - Baraúna 2</option>
							<option value="Barriguda">11 - Barriguda</option>
							<option value="Boa Sorte">12 - Boa Sorte</option>
							<option value="Boa Vista">13 - Boa Vista</option>
							
							<option value="Cabano">15 - Cabano</option>
							<option value="Cabaceira 1">16 - Cabaceira 1</option>
							<option value="Cabaceira 2">17 - Cabaceira 2</option>
							<option value="Cajazeiras">18 - Cajazeiras</option>
							<option value="Campo Alegre">19 - Campo Alegre</option>
							<option value="Campo de Fora">20 - Campo de Fora</option>
							<option value="Campo Formoso">21 - Campo Formoso</option>
							<option value="Campo Novo">22 - Campo Novo</option>
							<option value="Catinguinha">23 - Catinguinha</option>
							<option value="Chapada Bonita">24 - Chapada Bonita</option>
							<option value="Chapada de Paulo">25 - Chapada de Paulo</option>
							<option value="Cercado">26 - Cercado</option>
							<option value="Cisterna">27 - Cisterna</option>
							<option value="Emília">28 - Emília</option>
							<option value="Fazenda Nova">29 - Fazenda Nova</option>
							<option value="Jacarandá">30 - Jacarandá</option>
							<option value="Lagoa Funda">31 - Lagoa Funda</option>
							<option value="Lagoa Queimada">32 - Lagoa Queimada</option>
							<option value="Lagoa Nova">33 - Lagoa Nova</option>
							<option value="Lajedinho">34 - Lajedinho</option>
							<option value="Malhada">35 - Malhada</option>
							<option value="Manoel Joaquim">36 - Manoel Joaquim</option>
							<option value="Manoel Lourenço">37 - Manoel Lourenço</option>
							<option value="Matinha">38 - Matinha</option>
							<option value="Morrinhos de Baixo">39 - Morrinhos de Baixo</option>
							<option value="Morrinhos de Cima">40 - Morrinhos de Cima</option>
							<option value="Mundo Novo">41 - Mundo Novo</option>
							<option value="Novo Horizonte">42 - Novo Horizonte</option>
							<option value="Pau Ferro">43 - Pau Ferro</option>
							<option value="Paraguai">44 - Paraguai</option>
							<option value="Pé de Serra">45 - Pé de Serra</option>
							<option value="Pocinho">46 - Pocinho</option>
							<option value="Quixaba">47 - Quixaba</option>
							<option value="Quixaba de Pocinho">48 - Quixaba de Pocinho</option>
							<option value="Recanto 1">49 - Recanto 1</option>
							<option value="Recanto 2">50 - Recanto 2</option>
							<option value="Riacho">51 - Riacho</option>
							<option value="Rocinha">52 - Rocinha</option>
							<option value="São Caetano">53 - São Caetano</option>
							<option value="São Domingos">54 - São Domingos</option>
							<option value="Segredo">55 - Segredo</option>
							<option value="Sitio Novo">56 - Sitio Novo</option>
							<option value="Valentim">57 - Valentim</option>
						</select>
					</div>
					<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Perfil da Moradia - Questoes de 1 a 8</b></h1>
						</div>

					</div>
					<div class = "form-row">
						<div class="form-group col-md-3">
							<span class = "label label-warning">1 - Tipo do Imóvel.</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoImovel" id="tipoImovel1" value="casa" checked>
								<label class="form-check-label" for="tipoImovel1">
									1. Casa
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoImovel" id="tipoImovel2" value="Comodos, Quitinete, Barraco">
								<label class="form-check-label" for="tipoImovel2">
									2. Comodos, Quitinete, Barraco
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoImovel" id="tipoImovel3" value="outro">
								<label class="form-check-label" for="tipoImovel3">
									3. Outro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="tipoImovel" id="tipoImovel4" value="Sem Resposta">
								<label class="form-check-label" for="tipoImovel4">
									4. Sem Resposta
								</label>
							</div>


						</div>
						
						<div class="form-group col-md-3">
							<span class = "label label-warning">2 - Regime de ocupação do Imóvel.</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel1" value="Propria" checked>
								<label class="form-check-label" for="regOcupImovel1">
									1. Própria
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel2" value="Alugada">
								<label class="form-check-label" for="regOcupImovel2">
									2. Alugada
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel3" value="Cedido">
								<label class="form-check-label" for="regOcupImovel3">
									3. Cedido
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel4" value="Outro">
								<label class="form-check-label" for="regOcupImovel4">
									4. Outro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel5" value="Sem Resposta">
								<label class="form-check-label" for="regOcupImovel5">
									5. Sem Resposta
								</label>
							</div>



						</div>

						<!-- Inicio Questao 3 -->						
						<div class="form-group col-md-3">
							<span class = "label label-warning"> 3 - Tipo de Construção.</span>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Alvenaria / Tijolo" checked>
								<label class="form-check-label" >
									1. Alvenaria / Tijolo
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Madeira / Taco">
								<label class="form-check-label" >
									2. Madeira / Taco
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Taipa">
								<label class="form-check-label" >
									3. Taipa
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Casa de enchimento">
								<label class="form-check-label" >
									4. Casa de enchimento
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Aproveitado">
								<label class="form-check-label" >
									5. Aproveitado
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Adobe">
								<label class="form-check-label" >
									6. Adobe
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Outro">
								<label class="form-check-label" >
									7. Outro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tipoConstr[]"  value="Sem Resposta">
								<label class="form-check-label" >
									8. Sem Resposta
								</label>
							</div>


						</div>

						<!-- Final questao 3 -->
						<!-- inicio questao 4 -->
						<div class="form-group col-md-3">
							<span class = "label label-warning">4 - Fonte de abastecimento de água:</span>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Rede geral" checked>
								<label class="form-check-label" >
									1. Rede geral
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Poç" >
								<label class="form-check-label" >
									2. Poço
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Cisterna" >
								<label class="form-check-label" >
									3. Cisterna
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Nascente / Mina" >
								<label class="form-check-label" >
									4. Nascente / Mina
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Rio / Corrego / Lagoa" >
								<label class="form-check-label" >
									5. Rio / Córrego / Lagoa
								</label>
							</div>

							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Outro" >
								<label class="form-check-label" >
									6. Outro
								</label>
							</div>
							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="abastAgua[]"  value="Sem Resposta" >
								<label class="form-check-label" >
									7. Sem Resposta
								</label>
							</div>
	
		
						</div>
												
						<!-- final questao 4 -->						

					</div>
		</div>						

				
				<div class = "form-row">
					<div class = "form-group col-md-4">
						<span class = "label label-warning">5 - Tratamento de água para beber:</span>
						<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Filtro" checked>
								<label class="form-check-label" >
									1. Filtro
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Fervura" >
								<label class="form-check-label" >
									2. Fervura
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Cloracao" >
								<label class="form-check-label" >
									3. Cloração
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Sem Tratamento" >
								<label class="form-check-label" >
									4. Sem Tratamento
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Outro" >
								<label class="form-check-label" >
									5. Outro
								</label>
							</div>

							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="tratamentoAgua[]"  value="Sem Resposta" >
								<label class="form-check-label" >
									6. Sem Resposta
								</label>
							</div>

						
					
					</div>
					<div class = "form-group col-md-4">
						<span class = "label label-warning">6 - Coleta de esgoto sanitário:</span>
						<div class="form-check">
								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Rede Geral" checked>
								<label class="form-check-label" >
									1. Rede Geral
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Fossa rudimentar" >
								<label class="form-check-label" >
									2. Fossa rudimentar
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Lancamento direto em curso dagua / Vala" >
								<label class="form-check-label" >
									3. Lançamento direto em curso dagua / Vala
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Canalizado para o fundo do quintal" >
								<label class="form-check-label" >
									4. Canalizado para o fundo do quintal
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Lancado a ceu aberto" >
								<label class="form-check-label" >
									5. Lançado a céu aberto
								</label>
							</div>

							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="coletaEsgoto[]"  value="Sem Resposta" >
								<label class="form-check-label" >
									6. Sem Resposta
								</label>
							</div>

						
					
					</div>
					
					<div class = "form-group col-md-4">
						<span class = "label label-warning">7 - Destino do Lixo:</span>
						<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Coleta publica" checked>
								<label class="form-check-label" >
									1. Coleta Pública
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Queimado" >
								<label class="form-check-label" >
									2. queimado
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Enterrado" >
								<label class="form-check-label" >
									3. Enterrado
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Lancado no fundo d quintal" >
								<label class="form-check-label" >
									4. Lançado no fundo do quintal
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Lancado em terreno baldio" >
								<label class="form-check-label" >
									5. Lançado em terreno baldio
								</label>
							</div>

							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Lancado em curso dagua" >
								<label class="form-check-label" >
									6. Lançado em curso dagua
								</label>
							</div>
							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Sem Resposta" >
								<label class="form-check-label" >
									7. Sem Resposta
								</label>
							</div>

							

						</div>

					<div class="form-group col-md-3">
						<span class = "label label-warning">8 - Como o(a) Sr(a) avalia a qualidade da segurança pública no seu bairo?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica1" value="Otima" checked>
								<label class="form-check-label" for="segPublica1">
									1. Ótima
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica2" value="Boa">
								<label class="form-check-label" for="segPublica2">
									2. Boa
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica3" value="Regular">
								<label class="form-check-label" for="segPublica3">
									3. Regular
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica4" value="Ruim">
								<label class="form-check-label" for="segPublica4">
									4. Ruim
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica5" value="Sem Resposta">
								<label class="form-check-label" for="segPublica5">
									5. Sem Resposta
								</label>
							</div>
	
					
					</div>


					
			</div>

			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Perfil da Família - Questões de 9 a 12</b></h1>
						</div>

					</div>
					<div class = "form-row">
						<div class="form-group col-md-3">
							<span class = "label label-warning">9 - Número de Pessoas residentes no domicílio</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas1" value="1" checked>
								<label class="form-check-label" for="numeroPessoas1">
									1
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas2" value="2">
								<label class="form-check-label" for="numeroPessoas2">
									2
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas3" value="3">
								<label class="form-check-label" for="numeroPessoas3">
									3
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas4" value="4">
								<label class="form-check-label" for="numeroPessoas4">
									4
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas5" value="5">
								<label class="form-check-label" for="numeroPessoas5">
									5
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas6" value="6">
								<label class="form-check-label" for="numeroPessoas6">
									6
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas7" value="7">
								<label class="form-check-label" for="numeroPessoas7">
									7
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas8" value="8">
								<label class="form-check-label" for="numeroPessoas8">
									8
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas9" value="9">
								<label class="form-check-label" for="numeroPessoas9">
									9
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas10" value="10">
								<label class="form-check-label" for="numeroPessoas10">
									10
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas11" value="11">
								<label class="form-check-label" for="numeroPessoas11">
									11
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas12" value="12">
								<label class="form-check-label" for="numeroPessoas12">
									12
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas13" value="Mais de 12">
								<label class="form-check-label" for="numeroPessoas13">
									Mais de 12
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="numeroPessoas" id="numeroPessoas14" value="Sem Resposta">
								<label class="form-check-label" for="numeroPessoas14">
									Sem resposta
								</label>
							</div>
						</div>
						
						<div class="form-group col-md-3">
								<span class = "label label-warning">10 - Constituição familiar</span>							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar1" value="Pai, mãe e filho(s)" checked>
								<label class="form-check-label" for="constFamiliar1">
									1. Pai, mãe e filho(s)  
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar2" value="Pai e filho(s)">
								<label class="form-check-label" for="constFamiliar2">
									2. Pai e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar3" value="Mãe e filho(s) ">
								<label class="form-check-label" for="constFamiliar3">
									3. Mãe e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar4" value="Mãe, Padrasto e filho(s)">
								<label class="form-check-label" for="constFamiliar4">
									4. Mãe, Padrasto e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar5" value="Pai, Madrasta e filho(s)">
								<label class="form-check-label" for="constFamiliar5">
									5. Pai, Madrasta e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar6" value="Pai, mãe, filho(s) e avós, tio">
								<label class="form-check-label" for="constFamiliar6">
									6. Pai, mãe, filho(s) e avós, tio 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar7" value="Mãe, Madrasta e filho(s)">
								<label class="form-check-label" for="constFamiliar7">
									7. Mãe, Madrasta e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar8" value="Pai, Padrasto e filho(s)">
								<label class="form-check-label" for="constFamiliar8">
									8. Pai, Padrasto e filho(s) 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar9" value="Outro">
								<label class="form-check-label" for="constFamiliar9">
									9. Outro 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="constFamiliar" id="constFamiliar10" value="Sem Resposta">
								<label class="form-check-label" for="constFamiliar10">
									10. Sem Resposta 
								</label>
							</div>

						</div>

						<!-- Inicio Questao 3 -->						
						<div class="form-group col-md-3">
						<span class = "label label-warning">11 - Qual é a renda total de sua família por mês</span>
							
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia1" value="Até 1 SM" checked>
								<label class="form-check-label" for="rendaFamilia1">
									1. Até 1 SM  
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia2" value="+ de 1 a 2 SM">
								<label class="form-check-label" for="rendaFamilia2">
									2. + de 1 a 2 SM 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia3" value="+ de 2 a 3 SM ">
								<label class="form-check-label" for="rendaFamilia3">
									3. + de 2 a 3 SM 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia4" value="+ de 3 a 5 SM ">
								<label class="form-check-label" for="rendaFamilia4">
									4. + de 3 a 5 SM    
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia5" value="+ de 5 a 10 SM">
								<label class="form-check-label" for="rendaFamilia5">
									5. + de 5 a 10 SM
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia6" value="+ de 10 SM">
								<label class="form-check-label" for="rendaFamilia6">
									6. + de 10 SM  
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="rendaFamilia" id="rendaFamilia7" value="Sem Resposta ">
								<label class="form-check-label" for="rendaFamilia7">
									7.Sem Resposta 
								</label>
							</div>

						</div>

						<!-- Final questao 3 -->
						<!-- inicio questao 4 -->
						<div class="form-group col-md-3">
							<span class = "label label-warning">12 - Quem contribui para a renda familiar?</span>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar1" value="Somente o Pai/Padrasto" checked>
								<label class="form-check-label" for="constFamiliar1">
									1. Somente o Pai/Padrasto   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar2" value="Somente a Mãe/Madrasta">
								<label class="form-check-label" for="contribRendaFamiliar2">
									2. Somente a Mãe/Madrasta 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar3" value="Somente os Filhos">
								<label class="form-check-label" for="contribRendaFamiliar3">
									3.  Somente os Filhos 
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar4" value="Mãe/Madrasta e Pai/Padrasto">
								<label class="form-check-label" for="contribRendaFamiliar4">
									4. Mãe/Madrasta e Pai/Padrasto   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar5" value="Mãe, Pai e Filho(s)">
								<label class="form-check-label" for="contribRendaFamiliar5">
									5. Mãe, Pai e Filho(s)
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar6" value="Pais e Avósa">
								<label class="form-check-label" for="contribRendaFamiliar6">
									6. Pais e Avós   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar7" value="Avós">
								<label class="form-check-label" for="contribRendaFamiliar7">
									7.Avós   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar8" value="Tia/o(s) ">
								<label class="form-check-label" for="contribRendaFamiliar8">
									8.Tia/o(s)   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar9" value="Outro ">
								<label class="form-check-label" for="contribRendaFamiliar9">
									9.Outro   
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="contribRendaFamiliar" id="contribRendaFamiliar10" value="Sem Resposta">
								<label class="form-check-label for contribRendaFamiliar10"> 
									10.Sem Resposta   
								</label>
							</div>

		
						</div>
												
						<!-- final questao 4 -->						

					</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>BENS DE CONSUMO - Questões de 14 a 37</b></h1>
						</div>

			</div>
			<div class="form-row">
					<div class="form-group col-md-1">
						<label class = "control-label small">14 - Carro</label>
						<input class="form-control" type="number" name="carro" value="0" maxlength = "2"  required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">15 - Moto</label>
						<input class="form-control" type="number" name="moto" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">16 - Bicicl.</label>
						<input class="form-control" type="number" name="bicicleta" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">17-Mq.Lav.</label>
						<input class="form-control" type="number" name="maqLavar" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">18-Tanqui.</label>
						<input class="form-control" type="number" name="tanquinho" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">19-Gelad.</label>
						<input class="form-control" type="number" name="geladeira" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">20-L.Louç.</label>
						<input class="form-control" type="number" name="lavLoucas" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">21-M.Onda</label>
						<input class="form-control" type="number" name="micOndas" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">22-F.Gás</label>
						<input class="form-control" type="number" name="fogGas" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">23-DVD</label>
						<input class="form-control" type="number" name="dvd" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">24-TV</label>
						<input class="form-control" type="number" name="tv" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">25-par/tvcb</label>
						<input class="form-control" type="number" name="apTvcabo" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">26-inter.BL</label>
						<input class="form-control" type="number" name="interBl" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">27-interCel</label>
						<input class="form-control" type="number" name="interCell" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">28-comput.</label>
						<input class="form-control" type="number" name="computador" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">29-Noteb.</label>
						<input class="form-control" type="number" name="notebook" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">30-Tablet</label>
						<input class="form-control" type="number" name="tablet" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">31-Som</label>
						<input class="form-control" type="number" name="som" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">32-TelFxo</label>
						<input class="form-control" type="number" name="telFxo" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">33-TelCell</label>
						<input class="form-control" type="number" name="telCell" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">34-TCel12a</label>
						<input class="form-control" type="number" name="telCell12a" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">35-TCel18a</label>
						<input class="form-control" type="number" name="telCell18a" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">36-Ventil.</label>
						<input class="form-control" type="number" name="ventilador" value="0" maxlength = "2" required>
					</div>
					<div class="form-group col-md-1">
						<label class = "control-label small">37-ArCond.</label>
						<input class="form-control" type="number" name="arCondicionado" value="0" maxlength = "2" required>
					</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Sobre os pais/responsaveis - Questoes de 38 a 55</b></h1>
						</div>

			</div>
			<div class = "form-row">
				<div class="form-group col-md-2">
						<span class = "label label-warning">38 - Escolaridade Mae / Madastra</span>
						<select class="form-control" name="escolMae" id = "escolMae" >
							<option selected>Escolha uma Opção...</option>
							<option value="Analfabeto">1 - Analfabeto</option>
							<option value="Ensino Fundamental Incompleto">2 - Ensino Fundamental Incompleto</option>
							<option value="Ensino Fundamental Completo">3 - Ensino Fundamental Completo</option>
							<option value="Ensino Medio Incompleto">4 - Ensino Medio Incompleto</option>
							<option value="Ensino Medio Completo">5 - Ensino Medio Completo</option>
							<option value="Ensino Superior Incompleto">6 - Ensino Superior Incompleto</option>
							<option value="Ensino Superior Completo">7 - Ensino Superior Completo</option>
							<option value="Outro">8 - Outro</option>
							<option value="Sem Resposta">9 - Sem Resposta</option>


						</select>
				</div>
				<div class="form-group col-md-2">
						<span class = "label label-warning">39 - Escolaridade Pai / Padastro</span>
						<select class="form-control" name="escolPai" id = "escolPai" >
							<option selected>Escolha uma Opção...</option>
							<option value="Analfabeto">1 - Analfabeto</option>
							<option value="Ensino Fundamental Incompleto">2 - Ensino Fundamental Incompleto</option>
							<option value="Ensino Fundamental Completo">3 - Ensino Fundamental Completo</option>
							<option value="Ensino Medio Incompleto">4 - Ensino Medio Incompleto</option>
							<option value="Ensino Medio Completo">5 - Ensino Medio Completo</option>
							<option value="Ensino Superior Incompleto">6 - Ensino Superior Incompleto</option>
							<option value="Ensino Superior Completo">7 - Ensino Superior Completo</option>
							<option value="Outro">8 - Outro</option>
							<option value="Sem Resposta">9 - Sem Resposta</option>


						</select>
				</div>
				<div class="form-group col-md-2">
						<span class = "label label-warning">40 - Escolaridade Outro Responsavel</span>
						<select class="form-control" name="escolOutroResp" id = "escolOutroResp" >
							<option selected>Escolha uma Opção...</option>
							<option value="Analfabeto">1 - Analfabeto</option>
							<option value="Ensino Fundamental Incompleto">2 - Ensino Fundamental Incompleto</option>
							<option value="Ensino Fundamental Completo">3 - Ensino Fundamental Completo</option>
							<option value="Ensino Medio Incompleto">4 - Ensino Medio Incompleto</option>
							<option value="Ensino Medio Completo">5 - Ensino Medio Completo</option>
							<option value="Ensino Superior Incompleto">6 - Ensino Superior Incompleto</option>
							<option value="Ensino Superior Completo">7 - Ensino Superior Completo</option>
							<option value="Outro">8 - Outro</option>
							<option value="Sem Resposta">9 - Sem Resposta</option>


						</select>
				</div>


			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Crianças e adolescentes - Questões de 56 a 75</b></h1>
						</div>

			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Outras informações e conhecimentos - Questões de 76 a 100</b></h1>
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
