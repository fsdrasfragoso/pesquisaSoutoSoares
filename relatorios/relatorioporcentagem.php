<?php
    date_default_timezone_set('America/Sao_Paulo');
    ini_set('default_charset', 'UTF-8');
    $date = date('d-m-Y H:i');
    include('classes/DB.class.php');   
    include('classes/Bairro.class.php');  
    include('classes/Comunidade.class.php');   
    include('classes/Relatorio.class.php') 

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
	<link rel="stylesheet" href="../css1/style.css">
<!--	<link rel="stylesheet" href="../css1/bootstrap.css"> -->
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
			<img src="../../logoSoutoSoares.png">
		</div>
		<h1>Monte o Seu Relatório</h1>
	</div>
		<div class="container">			
            <div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Atenção selecione o campo que será calculado a porcentagem!</b></h1>
						</div>
			<div class="agile-form">
				<form action="guardaRelatorioCont.php" method="post">
					<div class="form-row">
                
                
					<div class="form-group col-md-2">
						<label>Selecione o campo para agrupar</label>
                        <select class="form-control" name="campo" required>                         
                        <?php foreach(Relatorio::getColunasQuest2() as $coluna){ ?>
                           <option value="<?php echo $coluna['Field']?>"> <?php echo $coluna['Field']?> </option> 
                        <?php }?>  
                        </select>
                    </div>
				
	
			</div>
			<div class = "form-row">
						<div class="form-group col-md-12 bg-primary text-white">
						<h1><b>Agora que você já selecionou todos o campo do seu relatório  chegou a hora de Selecionar os filtros!</b></h1>
						</div>

			</div>
            <div class = "form-row">
              <?php foreach(Relatorio::getColunasQuest2() as $coluna){ ?>  
				<div class="form-group col-md-3">
						<span class = "label label-info">Filtrar por <?php echo $coluna['Field'] ?></span>
						<select class="form-control" name="<?php echo $coluna['Field'] ?>" id ="<?php echo $coluna['Field'] ?>"  required>
                            <option selected value="0">Não Aplicar Esse Filtro</option>
                            <?php if($coluna['Field'] != 'id_quest'):?>
                            <?php foreach(Relatorio::getOptions($coluna['Field']) as $option){ ?> 
                                <?php 
                                     $isSex = $coluna['Field'][0].$coluna['Field'][1].$coluna['Field'][2];
                                     if($isSex == 'sex'):    
                                ?>
                                <option value="<?php echo $option[$coluna['Field']] ?>"><?php echo  $option[$coluna['Field']] == 1 ? "Feminino" : "Masculino"; ?></option>
                                <?php else: ?>
                            <option value="<?php echo $option[$coluna['Field']] ?>"><?php echo $option[$coluna['Field']] ?></option>
                            <?php endif; } endif;?>									
						</select>
				</div>            
              <?php } ?>	 
                
           <div class="form-group col-md-3">
           <label>Titulo do Relatório</label>
			  <input class="form-control" type="text" name="tituloRelatorio" value="" required="">
             
           </div>


		</div>	
								
			<div class = "form-row">
					<div class="form-group col-md-12" align="center">
					<button class="btn btn-default" type="submit" name="button">Cadastrar e Gerar Novo Relatório</button>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script> 
$(document).ready(function () {
        $("#todos").click(function () {
            $(":checkbox").attr('checked', this.checked);
            alert('Você selecionou todos os campos do registro');
        });
    });

</script>
