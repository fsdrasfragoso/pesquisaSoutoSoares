<?php include_once 'verifica.php'; ?>
<?php
require_once 'init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM aluno ORDER BY id_aluno ASC";
$sql_count2 = "SELECT COUNT(zona) AS total2 FROM aluno WHERE zona = 'Urbana' ORDER BY id_aluno ASC";
$sql_count3 = "SELECT COUNT(bairro) AS total3 FROM aluno WHERE zona = 'Urbana' AND bairro = 'Barroquinha' ORDER BY id_aluno ASC";
$sql_count4 = "SELECT COUNT(bairro) AS total4 FROM aluno WHERE zona = 'Urbana' AND bairro = 'Centro' ORDER BY id_aluno ASC";
$sql_count5 = "SELECT COUNT(bairro) AS total5 FROM aluno WHERE zona = 'Urbana' AND bairro = 'Loteamento Flavia' ORDER BY id_aluno ASC";
$sql_count6 = "SELECT COUNT(bairro) AS total6 FROM aluno WHERE zona = 'Urbana' AND bairro = 'Outro Lado' ORDER BY id_aluno ASC";

// INICIO DO CODIGO DA ZONA RURAL
$sql_count7 = "SELECT COUNT(*) AS total7 FROM aluno ORDER BY id_aluno ASC";
$sql_count8 = "SELECT COUNT(zona) AS total8 FROM aluno WHERE zona = 'Rural' ORDER BY id_aluno ASC";
$sql_count9 = "SELECT COUNT(comunidade) AS total9 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Alagadico de Campo Alegre' ORDER BY id_aluno ASC";
$sql_count10 = "SELECT COUNT(comunidade) AS total10 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Alagadico de Pocinho' ORDER BY id_aluno ASC";
$sql_count11 = "SELECT COUNT(comunidade) AS total11 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Alto da Boa Vista' ORDER BY id_aluno ASC";
$sql_count12 = "SELECT COUNT(comunidade) AS total12 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Angico' ORDER BY id_aluno ASC";
$sql_count13 = "SELECT COUNT(comunidade) AS total13 FROM aluno WHERE zona = 'Rural' AND comunidade = 'ArcÃªnio' ORDER BY id_aluno ASC";
$sql_count14 = "SELECT COUNT(comunidade) AS total14 FROM aluno WHERE zona = 'Rural' AND comunidade = 'As Lagoas' ORDER BY id_aluno ASC";
$sql_count15 = "SELECT COUNT(comunidade) AS total15 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Baixa da Banana' ORDER BY id_aluno ASC";
$sql_count16 = "SELECT COUNT(comunidade) AS total16 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Baixa de ZÃ© Pedro' ORDER BY id_aluno ASC";
$sql_count17 = "SELECT COUNT(comunidade) AS total17 FROM aluno WHERE zona = 'Rural' AND comunidade = 'BaraÃºna 1' ORDER BY id_aluno ASC";
$sql_count18 = "SELECT COUNT(comunidade) AS total18 FROM aluno WHERE zona = 'Rural' AND comunidade = 'BaraÃºna 2' ORDER BY id_aluno ASC";
$sql_count19 = "SELECT COUNT(comunidade) AS total19 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Barriguda' ORDER BY id_aluno ASC";
$sql_count20 = "SELECT COUNT(comunidade) AS total20 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Boa Sorte' ORDER BY id_aluno ASC";
$sql_count21 = "SELECT COUNT(comunidade) AS total21 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Boa Vista' ORDER BY id_aluno ASC";
$sql_count22 = "SELECT COUNT(comunidade) AS total22 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cabano' ORDER BY id_aluno ASC";
$sql_count23 = "SELECT COUNT(comunidade) AS total23 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cabaceira 1' ORDER BY id_aluno ASC";
$sql_count24 = "SELECT COUNT(comunidade) AS total24 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cabaceira 2' ORDER BY id_aluno ASC";
$sql_count25 = "SELECT COUNT(comunidade) AS total25 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cajazeiras' ORDER BY id_aluno ASC";
$sql_count26 = "SELECT COUNT(comunidade) AS total26 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Campo Alegre' ORDER BY id_aluno ASC";
$sql_count27 = "SELECT COUNT(comunidade) AS total27 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Campo de Fora' ORDER BY id_aluno ASC";
$sql_count28 = "SELECT COUNT(comunidade) AS total28 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Campo Formoso' ORDER BY id_aluno ASC";
$sql_count29 = "SELECT COUNT(comunidade) AS total29 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Campo Novo' ORDER BY id_aluno ASC";
$sql_count30 = "SELECT COUNT(comunidade) AS total30 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Catinguinha' ORDER BY id_aluno ASC";
$sql_count31 = "SELECT COUNT(comunidade) AS total31 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Chapada Bonita' ORDER BY id_aluno ASC";
$sql_count32 = "SELECT COUNT(comunidade) AS total32 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Chapada de Paulo' ORDER BY id_aluno ASC";
$sql_count33 = "SELECT COUNT(comunidade) AS total33 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cercado' ORDER BY id_aluno ASC";
$sql_count34 = "SELECT COUNT(comunidade) AS total34 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Cisterna' ORDER BY id_aluno ASC";
$sql_count35 = "SELECT COUNT(comunidade) AS total35 FROM aluno WHERE zona = 'Rural' AND comunidade = 'EmÃ­lia' ORDER BY id_aluno ASC";
$sql_count36 = "SELECT COUNT(comunidade) AS total36 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Fazenda Nova' ORDER BY id_aluno ASC";
$sql_count37 = "SELECT COUNT(comunidade) AS total37 FROM aluno WHERE zona = 'Rural' AND comunidade = 'JacarandÃ¡' ORDER BY id_aluno ASC";
$sql_count38 = "SELECT COUNT(comunidade) AS total38 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Lagoa Funda' ORDER BY id_aluno ASC";
$sql_count39 = "SELECT COUNT(comunidade) AS total39 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Lagoa Queimada' ORDER BY id_aluno ASC";
$sql_count40 = "SELECT COUNT(comunidade) AS total40 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Lagoa Nova' ORDER BY id_aluno ASC";
$sql_count41 = "SELECT COUNT(comunidade) AS total41 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Lajedinho' ORDER BY id_aluno ASC";
$sql_count42 = "SELECT COUNT(comunidade) AS total42 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Malhada' ORDER BY id_aluno ASC";
$sql_count43 = "SELECT COUNT(comunidade) AS total43 FROM aluno WHERE zona = 'Rural' AND comunidade = 'Manoel Joaquim' ORDER BY id_aluno ASC";






//FIM DO CODIGO DA ZONA RURAL


// SQL para selecionar os registros
$sql = "SELECT id_aluno, data, zona, bairro FROM aluno WHERE zona = 'Urbana' ORDER BY id_aluno ASC";
 
// conta o total de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count2);
$stmt_count->execute();
$total2 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count3);
$stmt_count->execute();
$total3 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count4);
$stmt_count->execute();
$total4 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count5);
$stmt_count->execute();
$total5 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count6);
$stmt_count->execute();
$total6 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count7);
$stmt_count->execute();
$total7 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count8);
$stmt_count->execute();
$total8 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count9);
$stmt_count->execute();
$total9 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count10);
$stmt_count->execute();
$total10 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count11);
$stmt_count->execute();
$total11 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count12);
$stmt_count->execute();
$total12 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count13);
$stmt_count->execute();
$total13 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count14);
$stmt_count->execute();
$total14 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count15);
$stmt_count->execute();
$total15 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count16);
$stmt_count->execute();
$total16 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count17);
$stmt_count->execute();
$total17 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count18);
$stmt_count->execute();
$total18 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count19);
$stmt_count->execute();
$total19 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count20);
$stmt_count->execute();
$total20 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count21);
$stmt_count->execute();
$total21 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count22);
$stmt_count->execute();
$total22 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count23);
$stmt_count->execute();
$total23 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count24);
$stmt_count->execute();
$total24 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count25);
$stmt_count->execute();
$total25 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count26);
$stmt_count->execute();
$total26 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count27);
$stmt_count->execute();
$total27 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count28);
$stmt_count->execute();
$total28 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count29);
$stmt_count->execute();
$total29 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count30);
$stmt_count->execute();
$total30 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count31);
$stmt_count->execute();
$total31 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count32);
$stmt_count->execute();
$total32 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count33);
$stmt_count->execute();
$total33 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count34);
$stmt_count->execute();
$total34 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count35);
$stmt_count->execute();
$total35 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count36);
$stmt_count->execute();
$total36 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count37);
$stmt_count->execute();
$total37 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count38);
$stmt_count->execute();
$total38 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count39);
$stmt_count->execute();
$total39 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count40);
$stmt_count->execute();
$total40 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count41);
$stmt_count->execute();
$total41 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count42);
$stmt_count->execute();
$total42 = $stmt_count->fetchColumn();

$stmt_count = $PDO->prepare($sql_count43);
$stmt_count->execute();
$total43 = $stmt_count->fetchColumn();





// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de relatorios</title>
        <link rel="stylesheet" type="text/css" href="dani.css">
    </head>
    <body>
         
	<h1>Relatório Bairros  - Urbanas</h1>
		 <p>Total de questionários processados: <?php echo $total ?></p>
		 <p>Total Zona Urbana:<?php echo $total2 ?> </p>
		<hr>
		<p>Total questionários do bairro  <b>BARROQUINHA</b> na Zona Urbana:<b> <?php echo $total3 ?></b> </p>
		<p>Total questionários do bairro <b>CENTRO</b> na Zona Urbana:<b> <?php echo $total4 ?></b> </p>
		<p>Total questionários do bairro <b>LOTEAMENTO FLÁVIA</b> na Zona Urbana:<b> <?php echo $total5 ?></b> </p>
		<p>Total questionários do bairro <b>OUTRO LADO</b> na Zona Urbana:<b> <?php echo $total6 ?></b> </p>
		<hr>
	<h1>Relatório Comunidades  - Rurais</h1>
		 <p>Total de questionários processados: <?php echo $total7 ?></p>
		 <p>Total Zona Rural:<?php echo $total8 ?> </p>
		<hr>
		<p>Total questionários da comunidade  <b>ALAGADIÇO DE CAMPO ALEGRE</b> na Zona Rural:<b> <?php echo $total9 ?></b> </p>
		<p>Total questionários da comunidade  <b>ALAGADIÇO DE POCINHO</b> na Zona Rural:<b> <?php echo $total10 ?></b> </p>
		<p>Total questionários da comunidade  <b>ALTO DA BOA VISTA</b> na Zona Rural:<b> <?php echo $total11 ?></b> </p>
		<p>Total questionários da comunidade  <b>ANGICO</b> na Zona Rural:<b> <?php echo $total12 ?></b> </p>
		<p>Total questionários da comunidade  <b>ARCÊNIO</b> na Zona Rural:<b> <?php echo $total13 ?></b> </p>
		<p>Total questionários da comunidade  <b>AS LAGOAS</b> na Zona Rural:<b> <?php echo $total14 ?></b> </p>
		<p>Total questionários da comunidade  <b>BAIXA DA BANANA</b> na Zona Rural:<b> <?php echo $total15 ?></b> </p>
		<p>Total questionários da comunidade  <b>BAIXA DE ZÉ PEDRO</b> na Zona Rural:<b> <?php echo $total16 ?></b> </p>
		<p>Total questionários da comunidade  <b>BARAÚNA 1</b> na Zona Rural:<b> <?php echo $total17 ?></b> </p>
		<p>Total questionários da comunidade  <b>BARAÚNA 2</b> na Zona Rural:<b> <?php echo $total18 ?></b> </p>
		<p>Total questionários da comunidade  <b>BARRIGUDA</b> na Zona Rural:<b> <?php echo $total19 ?></b> </p>
		<p>Total questionários da comunidade  <b>BOA SORTE</b> na Zona Rural:<b> <?php echo $total20 ?></b> </p>
		<p>Total questionários da comunidade  <b>BOA VISTA</b> na Zona Rural:<b> <?php echo $total21 ?></b> </p>
		<p>Total questionários da comunidade  <b>CABANO</b> na Zona Rural:<b> <?php echo $total22 ?></b> </p>
		<p>Total questionários da comunidade  <b>CABACEIRA 1</b> na Zona Rural:<b> <?php echo $total23 ?></b> </p>
		<p>Total questionários da comunidade  <b>CABACEIRA 2</b> na Zona Rural:<b> <?php echo $total24 ?></b> </p>
		<p>Total questionários da comunidade  <b>CAJAZEIRAS</b> na Zona Rural:<b> <?php echo $total25 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CAMPO ALEGRE</b> na Zona Rural:<b> <?php echo $total26 ?></b> </p> 	
		<p>Total questionários da comunidade  <b>CAMPO DE FORA</b> na Zona Rural:<b> <?php echo $total27 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CAMPO FORMOSO</b> na Zona Rural:<b> <?php echo $total28 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CAMPO NOVO</b> na Zona Rural:<b> <?php echo $total29 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CATINGUINHA</b> na Zona Rural:<b> <?php echo $total30 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CHAPADA BONITA</b> na Zona Rural:<b> <?php echo $total31 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CHAPADA DE PAULO</b> na Zona Rural:<b> <?php echo $total32 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CERCADO</b> na Zona Rural:<b> <?php echo $total33 ?></b> </p> 
		<p>Total questionários da comunidade  <b>CISTERNA</b> na Zona Rural:<b> <?php echo $total34 ?></b> </p> 
		<p>Total questionários da comunidade  <b>EMÍLIA</b> na Zona Rural:<b> <?php echo $total35 ?></b> </p> 
		<p>Total questionários da comunidade  <b>FAZENDA NOVA</b> na Zona Rural:<b> <?php echo $total36 ?></b> </p> 
		<p>Total questionários da comunidade  <b>JACARANDÁ</b> na Zona Rural:<b> <?php echo $total37 ?></b> </p> 
		<p>Total questionários da comunidade  <b>LAGOA FUNDA</b> na Zona Rural:<b> <?php echo $total38 ?></b> </p> 
		<p>Total questionários da comunidade  <b>LAGOA QUEIMADA</b> na Zona Rural:<b> <?php echo $total39 ?></b> </p> 
		<p>Total questionários da comunidade  <b>LAGOA NOVA</b> na Zona Rural:<b> <?php echo $total40 ?></b> </p> 
		<p>Total questionários da comunidade  <b>LAJEDINHO</b> na Zona Rural:<b> <?php echo $total41 ?></b> </p> 
		<p>Total questionários da comunidade  <b>MALHADA</b> na Zona Rural:<b> <?php echo $total42 ?></b> </p> 
		<p>Total questionários da comunidade  <b>MANOEL JOAQUIM</b> na Zona Rural:<b> <?php echo $total43 ?></b> </p> 

		<hr>

            </body>
    <center>
<form method=get action="home.php">
<input type=submit value="Voltar">
</form>
</center>
    
</html>
