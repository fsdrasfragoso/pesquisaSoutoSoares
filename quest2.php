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
						<select class="form-control" name="bairro" id = "bairro" disabled = "true">
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
							<option value="Alagadico de Campo Alegre">1 - Alagadiço de Campo Alegre</option>
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
							<option value="Velho Chico">58 - Velho Chico</option>

							<option value="Xavier">59 - Xavier</option>
	
						</select>
					</div>
		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Perfil  - Questoes de 1 a 7</b></h1>
						</div>

		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">1. Sexo (1-feminino e 2-masculino)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Sexo</th>
						<td><input class="form-control" type="number" name="sexC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="sexC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="sexC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="sexC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="sexC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="sexC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="sexC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="sexA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="sexA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="sexA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="sexA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="sexA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="sexA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="sexA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">2. Idade (0 (menos de 1 ano) a 17 anos)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Idade</th>
						<td><input class="form-control" type="number" name="idadeC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="idadeC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="idadeC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="idadeC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="idadeA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="idadeA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">3. Cor declarada (1-branca, 2-negra/preta, 3-parda, 4-amarela, 5-indígena, 6-não sabe)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Cor</th>
						<td><input class="form-control" type="number" name="corC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="corC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="corC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="corC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="corC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="corC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="corC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="corA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="corA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="corA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="corA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="corA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="corA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="corA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">4. Altura (1-questão aberta, 2-não sabe)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Altura</th>
						<td><input class="form-control" type="text" name="alturaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="text" name="alturaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="text" name="alturaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="text" name="alturaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="text" name="alturaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="text" name="alturaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="text" name="alturaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="text" name="alturaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="text" name="alturaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="text" name="alturaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="text" name="alturaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="text" name="alturaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="text" name="alturaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="text" name="alturaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">5. Peso (1-questão aberta, 2-não sabe)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Peso</th>
						<td><input class="form-control" type="number" name="pesoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="pesoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="pesoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="pesoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="pesoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="pesoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="pesoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="pesoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="pesoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="pesoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="pesoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="pesoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="pesoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="pesoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">6.Colocação familiar (1-filho natural, 2-enteado(a), 3-filho(a) adotivo(a), 4-filho sob tutela, 5-filho(a) em família substituta, 6-filho(a) sob guarda, 7-outro, 8-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">C.Fam.</th>
						<td><input class="form-control" type="number" name="colFamC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="colFamC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="colFamC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="colFamC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="colFamC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="colFamC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="colFamC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="colFamA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="colFamA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="colFamA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="colFamA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="colFamA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="colFamA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="colFamA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">7.Naturalidade (1-Souto Soares, 2-outros municípios, 3-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Natur.</th>
						<td><input class="form-control" type="number" name="naturalidadeC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="naturalidadeC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="naturalidadeA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="naturalidadeA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naturalidadeA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>

		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Vida Escolar - Questões de 8 a 12</b></h1>
						</div>

		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">8.Frequenta qual nível de ensino? (1-Ed. Infantil, 2-Fund. Municipal, 3-Fund. Estadual, 4-Fund. Particular, 5-Médio Estadual, 6-Médio Particular, 7-Sup. Particular, 8-EJA, 9-Outro, 10-Não Frequenta, 11-Não sabe, 12-Sem resposta.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">N.ensino</th>
						<td><input class="form-control" type="number" name="nivelEnsinoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="nivelEnsinoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="nivelEnsinoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="nivelEnsinoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">9.Se não frequenta, qual nível de ensino parou? (1-Antes 4º a. E. Fund., 2-5º a. EF, 3-6º a. EF., 4-7º a. EF, 5-8º a. EF, 6-9º a. EF, 7-1º a. do Ens Méd, 8-2º a. do Ens. Med, 9-3º a. do Ens. Méd., 10-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">I.ensino</th>
						<td><input class="form-control" type="number" name="intEnsinoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="intEnsinoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="intEnsinoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="intEnsinoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="intEnsinoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">10.Motivo por não frequentar? (1-Menor de 3 anos (bebê), 2-Conc. o ens. médio, 3-Por prob. de saúde/nec. especial, 4-Por estar trab., 5-Por grav./filho, 6-Não gosta, n/ q. estu.(evasão), 7-Outro, 8-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">N.Freq.</th>
						<td><input class="form-control" type="number" name="naoFreqC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="naoFreqC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="naoFreqA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="naoFreqA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="naoFreqA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">11.Distância casa x escola? (1-Menos de 1 KM, 2-De 1 a 3 KM, 3-De 3,1 a 6 KM, 4-Mais de 6 KM, 5-Não sabe, 6-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">D.Escola</th>
						<td><input class="form-control" type="number" name="distCasaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="distCasaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="distCasaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="distCasaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="distCasaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="distCasaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="distCasaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">12.Meio de transporte para a escola? (1-A pé, 2-Bicicleta, 3-Transp. particular(tipo), 4-Van escolar, 5-Ônibus público, 06-Transp. gratuito, 08- Outros 09-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">T.Escola</th>
						<td><input class="form-control" type="number" name="meioTranspC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="meioTranspC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="meioTranspA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="meioTranspA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="meioTranspA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>



		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Cultura, esporte e lazer - Questões de 13 a 16</b></h1>
		</div>

						</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">13.Principal atividade de lazer? (1-Brincar, 2-Ouvir música, 3-Vídeo game, 4-Celular/Tablet, 5-Acessar internet, 06-Assistir TV, 07-Sair com amigos, 08-Leitura, 09-Outros, 10-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Lazer</th>
						<td><input class="form-control" type="number" name="ativLazerC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="ativLazerC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="ativLazerA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="ativLazerA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ativLazerA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">14.Pratica esporte? (01-Futebol, 02-Natação, 03-Ginástica, 04-Vôlei, 05-Basquete, 06-Capoeira, 07-Artes marciais, 08-Outro, 09-Não, 10-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Esporte</th>
						<td><input class="form-control" type="number" name="esporteC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="esporteC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="esporteC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="esporteC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="esporteC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="esporteC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="esporteC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="esporteA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="esporteA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="esporteA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="esporteA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="esporteA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="esporteA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="esporteA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">15.Pratica Atividade Cultural? (01-Música, 02-Teatro, 03-Dança, 04-Artesanato,  05-Outra, 06-Não, 07-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Cultural</th>
						<td><input class="form-control" type="number" name="culturalC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="culturalC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="culturalC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="culturalC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="culturalC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="culturalC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="culturalC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="culturalA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="culturalA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="culturalA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="culturalA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="culturalA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="culturalA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="culturalA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">16.Participa de algum grupo ou comunidade religiosa? (01-Sim, 02-Não, 03-Não Sabe, 04-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Grupo</th>
						<td><input class="form-control" type="number" name="grupoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="grupoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="grupoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="grupoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="grupoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="grupoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="grupoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="grupoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="grupoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="grupoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="grupoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="grupoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="grupoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="grupoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>



		
		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Trabalho - Questões de 17 a 19</b></h1>
						</div>

		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">17.Trabalha? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Trabalha</th>
						<td><input class="form-control" type="number" name="trabalhaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="trabalhaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="trabalhaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="trabalhaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabalhaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">18.Se sim, trabalha com carteira assinada? (01-Sim, 02-Não, 03-Não sabe, 04-Sem resposta.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Cart.</th>
						<td><input class="form-control" type="number" name="trabSimC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="trabSimC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="trabSimC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="trabSimC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="trabSimA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="trabSimA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="trabSimA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">19.Onde trabalha? (01-Serv. doméstico em casa, 02-Serv. dom. fora de casa, 03-Serv. na rua, 04-Trab. profissionalizante (aprendiz), 05-Trab. na ind. ou com., 06-Outro, 07-Sem resposta.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">L.Trab.</th>
						<td><input class="form-control" type="number" name="locTrabC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="locTrabC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="locTrabC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="locTrabC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="locTrabA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="locTrabA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="locTrabA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>




		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Convivência - Questões de 20 a 23</b></h1>
						</div>

		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">20.Com quem fica quando está fora da escola ou de ativ. cult. e esporte? (01-pai/pad., 02-Mãe/madr., 03-Irmãos, 04-Resp. legais, 05-Avós, 06-Empr. domést., 07-Vizinhos, 08-Amigos, 09-Ninguém, 10-Outros, 11-Sem resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>
						<th scope="row">Q.Conv.</th>
						<td><input class="form-control" type="number" name="qFicaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="qFicaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="qFicaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="qFicaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="qFicaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="qFicaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="qFicaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">21.Onde fica quando não está na escola ou realizando ativ. cult. e de esporte? (01-Casa dos pais ou resp. legal, 02-Soz. rua/casa, 03-C. de amigos, 04-Creche/hotel, 05-C. de Avós, 06-C.de vizinhos, 07-Outros, 08-Sem resposta.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">O.Fica</th>
						<td><input class="form-control" type="number" name="ondeFicaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="ondeFicaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="ondeFicaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="ondeFicaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="ondeFicaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">22.Cumpre medida socioeducativa decorrente de ato infracional? (01-Sim, 02-Não, 03-Sem resposta.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Socioed.</th>
						<td><input class="form-control" type="number" name="medidaSocC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="medidaSocC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="medidaSocA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="medidaSocA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medidaSocA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">23.Qual  medida socioeducativa decorrente de ato infracional recebe? (01-Advertência, 02-Obr. de reparar o dano, 03-Prest. de serviço à com., 04-Lib., 05-Semiliberdade, 06-Internação, 07-Outra, 08-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">M.Soc.</th>
						<td><input class="form-control" type="number" name="medSocC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medSocC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medSocC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medSocC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="medSocC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medSocC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medSocC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="medSocA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medSocA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medSocA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medSocA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="medSocA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medSocA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medSocA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>





		

		<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Saúde e bem-estar - Questões de 24 a 53</b></h1>
						</div>

		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">24.Houve alguma mudança drástica de comportamento recentemente? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">M.Comp.</th>
						<td><input class="form-control" type="number" name="mudComportC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="mudComportC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="mudComportC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="mudComportC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="mudComportA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="mudComportA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="mudComportA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">25.A que você atrib. a mud.? (01-Mud.de esc./dom., 02-Morte de pes. próx., 03-Sep. dos pais, 04-Prob. financ. da fam., 05-Envolv. com gang./drog., 06-Grav. prec., 07-Bullying e Cyber., 08-Doença, 09-Outro, 10-Não sabe, 11-Sem resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">M.Comp.</th>
						<td><input class="form-control" type="number" name="motMudC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="motMudC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="motMudC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="motMudC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="motMudC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="motMudC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="motMudC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="motMudA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="motMudA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="motMudA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="motMudA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="motMudA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="motMudA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="motMudA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">26.Possui plano de saúde? (01-Não, 02-Sim, 03-Outro, 04-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">P.Saude</th>
						<td><input class="form-control" type="number" name="planoSaudeC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="planoSaudeC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="planoSaudeA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="planoSaudeA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="planoSaudeA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">27.Na gestação deste filho, foi feito pré-natal? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">P.Natal</th>
						<td><input class="form-control" type="number" name="preNatalC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="preNatalC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="preNatalC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="preNatalC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="preNatalA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="preNatalA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="preNatalA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">28.Consulta regularmente o médico? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">C.Medico</th>
						<td><input class="form-control" type="number" name="consMedC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consMedC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consMedC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consMedC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="consMedC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consMedC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consMedC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="consMedA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consMedA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consMedA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consMedA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="consMedA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consMedA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consMedA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">29.Com que frequência? (01-Mens., 02-Semestralmente, 03-Anualmente, 04-A cada 2 anos, 05-Três anos ou mais, 06-Outro, 07-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">C.Medico</th>
						<td><input class="form-control" type="number" name="freqMedC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="freqMedC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="freqMedC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="freqMedC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="freqMedA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="freqMedA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqMedA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">30.Consulta regularmente o dentista? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Dentista</th>
						<td><input class="form-control" type="number" name="consDentC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consDentC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consDentC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consDentC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="consDentC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consDentC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consDentC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="consDentA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consDentA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consDentA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consDentA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="consDentA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consDentA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consDentA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		

				<span class = "label label-warning">31.Com que frequência? (01-Anual., 02-Semestr., 03-mais de duas vezes ano, 04-A cada 3 anos, 05-Mais de 3 anos, 06-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">F.Dentista</th>
						<td><input class="form-control" type="number" name="freqDentC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="freqDentC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="freqDentC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="freqDentC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="freqDentA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="freqDentA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="freqDentA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">32.Vacinação em dia? (01-Sim, 02-Não, 03-Sem resposta - por que?)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Vacina</th>
						<td><input class="form-control" type="number" name="vacinaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="vacinaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="vacinaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="vacinaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="vacinaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="vacinaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="vacinaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">33.Pos. alg. das doen. a seg.? (01-Alerg., 02-Bronq., 03-Asma, 04-Diab., 05-Transt. ment., 06-Câncer, 07-DST/AIDS, 08-D. card., 09-Hepat., 10-D. Resp., 11-Lesh., 12-Lept., 13-Mening., 14-Paral. Inf., 15-Tox., 16-Outra, 17-Não, 18-S/resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Doenças</th>
						<td><input class="form-control" type="number" name="doencasC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="doencasC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="doencasC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="doencasC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="doencasC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="doencasC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="doencasC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="doencasA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="doencasA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="doencasA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="doencasA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="doencasA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="doencasA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="doencasA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">34.Contraiu, no último ano, algum dos vírus a seguir? (01-Dengue, 02-Zica vírus, 03-Chikungunya, 04-Não, 05-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Vírus</th>
						<td><input class="form-control" type="number" name="virusC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="virusC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="virusC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="virusC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="virusC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="virusC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="virusC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="virusA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="virusA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="virusA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="virusA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="virusA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="virusA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="virusA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">35.Faz uso contínuo de algum tipo de medicação? (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Medica.</th>
						<td><input class="form-control" type="number" name="medicacaoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="medicacaoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="medicacaoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="medicacaoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="medicacaoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">36.Como consegue adquirir o medicamento? (01-Através da rede púb., 02-Comprando, 03-Doação, 04-Não consegue, 05-Outro, 06-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Medica.</th>
						<td><input class="form-control" type="number" name="aqMedicamentoC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="aqMedicamentoC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="aqMedicamentoA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="aqMedicamentoA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">37.Possui algum tipo de necessidade especial listada a sequir? (01-Cegueira, 02-Mudez,  03-Surdez, 04-Mental, 05-Física, 06-Outro, 07-Não, 08-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">N.Espec.</th>
						<td><input class="form-control" type="number" name="necEspecialC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="necEspecialC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="necEspecialA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="necEspecialA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="necEspecialA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">38.Já sofreu algum acid. dos listados a seguir?  (01-Acid. trânsito, 02-Ac. dom. com fogo,  03-Ac. dom. substâncias quím., 04-Ac. dom. com eletr., 05-Ac. com animais, 06-Afogamento, 07-Queda, 08-Outro, 09-Não, 10-Sem resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Acidente</th>
						<td><input class="form-control" type="number" name="acidenteC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="acidenteC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="acidenteC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="acidenteC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="acidenteA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="acidenteA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="acidenteA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">39.Houve alguma sequela?  (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Acidente</th>
						<td><input class="form-control" type="number" name="seqAcidenteC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="seqAcidenteC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="seqAcidenteA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="seqAcidenteA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="seqAcidenteA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">40.A criança/adolescente sofre/sofreu algum tipo de violência?  (01-Sim - sofre, 02-Sim - já sofreu, 03-Não, 04-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Violenc.</th>
						<td><input class="form-control" type="number" name="violenciaC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="violenciaC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="violenciaC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="violenciaC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="violenciaA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="violenciaA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="violenciaA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">41.Que tipo?  (01-Neglig., 02-Aband., 03-Viol. psicológ./emoc., 04-Viol. física, 05-Viol. sexual, 5.1-Intrafam., 5.2-extrafam., 5.3-Comercial, 06-Bullying, 6.1-fisico, 6.2-verbal, 6.3-CyberB., 07-Alien. par., 08-Não sabe, 09-S/resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Violenc.</th>
						<td><input class="form-control" type="number" name="tipViolC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="tipViolC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="tipViolC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="tipViolC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="tipViolA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="tipViolA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="tipViolA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">42.Quem é/foi o autor da viol.?  (01-Pai/mãe, 02-Avô/avó, 03-Primos/tios, 04-Irmão(a), 05-Col. de sala, 06-Prof., 07-Amigos e col. próx., 08-Anônimos int., 09-Desconhec., 10-Não sabe, 11-Outro, 12-S/resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Violenc.</th>
						<td><input class="form-control" type="number" name="autorViolC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="autorViolC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="autorViolC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="autorViolC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="autorViolA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="autorViolA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="autorViolA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">43.Foi feita alguma denúncia?  (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Violenc.</th>
						<td><input class="form-control" type="number" name="denViolC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="denViolC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="denViolC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="denViolC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="denViolC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="denViolC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="denViolC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="denViolA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="denViolA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="denViolA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="denViolA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="denViolA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="denViolA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="denViolA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-6">
						<span class = "label label-warning">44- Se sim, onde ou a quem?</span>
						<input class="form-control" type="text" name="queixaViol" value="">
			</div>
	



		</div>
		</div>	
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">45.Com que idade se deu a inic. sex. da criança/adolescente?  (01-antes 8 anos, 02-8 a 10 anos, 03-11 a 12 anos, 04-13 a 14 anos, 05-15 a 16 anos, 06-17 a 18 anos, 07-Não sabe, 08-Não se aplica, 09-S/resp.)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">I.Sexual</th>
						<td><input class="form-control" type="number" name="iniSexualC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="iniSexualC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="iniSexualA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="iniSexualA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="iniSexualA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">46.A criança/adolescente tem filho(os)?  (01-Sim, 02-Está grávida, 03-Vai ser pai, 04-Não, 05-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Filhos</th>
						<td><input class="form-control" type="number" name="filhosC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="filhosC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="filhosC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="filhosC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="filhosC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="filhosC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="filhosC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="filhosA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="filhosA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="filhosA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="filhosA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="filhosA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="filhosA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="filhosA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">47.Com que idade a criança/adolescente teve filho(os)?  (01-Antes dos 10 anos, 02-10 anos, 03-11 anos, 04-12 anos, 05-13 anos, 06-14 a., 07-15 a., 08-16 a., 09-17 a.,10-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Filhos</th>
						<td><input class="form-control" type="number" name="idadeFilhosC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="idadeFilhosC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="idadeFilhosA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="idadeFilhosA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="idadeFilhosA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">48.Em que circunstâncias se deu essa gravidez?  (01-Casamento, 02-Falta de prevenção, 03-Violência exual/estupro, 04-Outra, 05-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Gravid.</th>
						<td><input class="form-control" type="number" name="circGravidezC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="circGravidezC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="circGravidezA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="circGravidezA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="circGravidezA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">49.A criança/adolescente (mãe) recebeu acompanhamento médico e pré-natal?  (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">P.Natal</th>
						<td><input class="form-control" type="number" name="natalC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="natalC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="natalC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="natalC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="natalC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="natalC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="natalC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="natalA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="natalA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="natalA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="natalA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="natalA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="natalA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="natalA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">50.Quantas consultas foram realizadas no acompanhamento médico e pré-natal?  (01-Nenhuma, 02-1 a 3, 03-4 a 6, 04-7 a 9, 05-Acima de 9, 06-Não Sabe, 07-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Consult.</th>
						<td><input class="form-control" type="number" name="consultasC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consultasC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="consultasC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consultasC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="consultasC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consultasC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="consultasC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="consultasA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consultasA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consultasA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consultasA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="consultasA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consultasA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="consultasA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>


		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">51.A criança/adolescente recebeu apoio familiar?  (01-Sim, 02-Não, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">A.Famil.</th>
						<td><input class="form-control" type="number" name="apoioFamC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="apoioFamC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="apoioFamA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="apoioFamA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="apoioFamA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">52.Referente ao genitor:  (01-É criança ou adolescente, 02-É maior de idade, 03-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Genitor</th>
						<td><input class="form-control" type="number" name="genitorC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="genitorC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="genitorC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="genitorC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="genitorC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="genitorC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="genitorC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="genitorA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="genitorA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="genitorA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="genitorA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="genitorA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="genitorA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="genitorA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
		</div>
		</div>
		<div class = "form-row">
			<div class="form-group col-md-12">		
				<span class = "label label-warning">53.O genitor assumiu a paternidade do filho?  (01-Sim, part. da rotina do filho, 02-Sim, assumiu resp. judic., part. da rotina, 03-Sim, assumiu resp. jud. e não part. rot., 04-Não, 05-Sem resposta)</span>

				<table class = "table">
				<thead>
					<tr>
						<th scope="col">Quant.</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

						<th scope="col">|</th>
						<th scope="col">1</th>
						<th scope="col">2</th>
						<th scope="col">3</th>
						<th scope="col">4</th>
						<th scope="col">5</th>
						<th scope="col">6</th>
						<th scope="col">7</th>

					</tr>
				</thead>
				<tbody>
					<tr>

						<th scope="row">Patern.</th>
						<td><input class="form-control" type="number" name="paternidadeC1" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeC2" style="background: #FEEF00" value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeC3" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeC4" style="background: #FEEF00"value=""></td>
						<td><input class="form-control" type="number" name="paternidadeC5" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeC6" style="background: #FEEF00"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeC7" style="background: #FEEF00"value="">
</td>
						<td>|</td>
						<td><input class="form-control" type="number" name="paternidadeA1" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeA2" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeA3" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeA4" style="background: #87CEFA"value=""></td>
						<td><input class="form-control" type="number" name="paternidadeA5" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeA6" style="background: #87CEFA"value="">
</td>
						<td><input class="form-control" type="number" name="paternidadeA7" style="background: #87CEFA"value="">
</td>

						
					</tr>
				</tbody>
			</table>
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
