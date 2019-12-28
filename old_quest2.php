<?php
date_default_timezone_set('America/Sao_Paulo');
ini_set('default_charset', 'UTF-8');
$date = date('d-m-Y H:i');
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<!-- Meta tags -->
	<title>Formulario 2 Souto Soares - BA</title>
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
	function calcular(){
		var quantHCri = parseInt(document.getElementById('quantHCri').value, 10);
		var quantMCri = parseInt(document.getElementById('quantMCri').value, 10);
		document.getElementById('quantCrianca').innerHTML = quantHCri + quantMCri;
	}
</script>
</head>
<body>
	<div class="w3ls-banner">
	<div class="heading">
		<div>
			<img src="logoSoutoSoares.png">
		</div>
		<h1>Questionário 2</h1>
	</div>
		<div class="container">
			<div class="heading">
					<h2>Aplicação</h2>
				<p>Preencha os campos com atenção</p>
			</div>
			<div class="agile-form">
				<form action="insere2.php" method="post">
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
						<h1><b>Perfil  - Questoes de 1 a 7</b></h1>
						</div>

					</div>
					<div class = "form-row">
						<div class="form-group col-md-1">
							<span class = "label label-warning">1 - Sexo.</span>
							<label>Quant. Criança:</label>
									
						<input class="form-control" type="number" name="quantCrianca" value="0" required>
						<label>Quant. Homem: </label>
						<input class="form-control" type="number"name="quantHCri" id = "quantHCri" value="0"  required>
						<label>Quant. Mulher:</label>
						<input class="form-control" type="number" name="quantMCri" value="0" required>
						<label>Quant. Adolescente: </label>
						<input class="form-control" type="number"name="quantAdol" id = "quantAdol"value="0"  required>
						<label>Quant. Homem: </label>
						<input class="form-control" type="number"name="quantHAdol" id = "quantHAdol"value="0" required>
						<label>Quant. Mulher:</label>
						<input class="form-control" type="number" name="quantMAdol" value="0" required>
	

								
						</div>
						
									<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Vida Escolar - Questões de 8 a 12</b></h1>
						</div>

					</div>
								<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Cultura, esporte e lazer - Questões de 13 a 16</b></h1>
						</div>

			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Trabalho - Questões de 17 a 19</b></h1>
						</div>

			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Convivência - Questões de 20 a 23</b></h1>
						</div>

			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Saúde e bem-estar - Questões de 24 a 53</b></h1>
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
