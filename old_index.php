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
						<div class="form-group col-md-12">
						<p><b>Perfil da Moradia - Questoes de 1 a 8</b></p>
						</div>

					</div>
					<div class = "form-row">
						<div class="form-group col-md-3">
							<label>1 - Tipo do Imovel.</label>
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
							<label>2 - Regime de ocupacao do Imovel.</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="regOcupImovel" id="regOcupImovel1" value="Propria" checked>
								<label class="form-check-label" for="regOcupImovel1">
									1. Propria
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
							<label>3 - Tipo de Construcao.</label>
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
							<label>4 - Fonte de abastecimento de agua:</label>
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
									5. Rio / Corrego / Lagoa
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
						<label>5 - Tratamento de agua para beber:</label>
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
									3. Cloracao
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
						<label>6 - Coleta de esgoto sanitario:</label>
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
									3. Lancamento direto em curso dagua / Vala
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
									5. Lancado a ceu aberto
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
						<label>7 - Destino do Lixo:</label>
						<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Coleta publica" checked>
								<label class="form-check-label" >
									1. Coleta Publica
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
									4. Lancado no fundo do quintal
								</label>
							</div>
							<div class="form-check">
								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Lancado em terreno baldio" >
								<label class="form-check-label" >
									5. Lancado em terreno baldio
								</label>
							</div>

							<div class="form-check">

								<input class="form-check-input" type="checkbox" name="destinoLixo[]"  value="Lancado em curso dagua" >
								<label class="form-check-label" >
									6. Lancado em curso dagua
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
							<label>8 - Como o(a) Sr(a) avalia a qualidade da seguranca publica no seu bairo?</label>
							<div class="form-check">
								<input class="form-check-input" type="radio" name="segPublica" id="segPublica1" value="Otima" checked>
								<label class="form-check-label" for="segPublica1">
									1. Otima
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
					<div class="form-group col-md-12" align="center">
					<button class="btn btn-default" type="submit" name="button">Enviar</button>
					</div>
				</div>

				</form>
			</div>
		</div>
	</div>
		<div class="copyright" align="center">
		<p>©2019 Formularios de pesquisa. All rights reserved | Design by <a href="http://www.netosales.com.br">NS informatica.</a> - (77)9 9122-2146.</p>

		</div>
	</div>
</body>
</html>
