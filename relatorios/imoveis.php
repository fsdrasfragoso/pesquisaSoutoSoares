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
$sql_count3 = "SELECT COUNT(tipoImovel) AS total3 FROM aluno WHERE zona = 'Urbana' AND tipoImovel = 'casa' ORDER BY id_aluno ASC";
$sql_count4 = "SELECT COUNT(tipoImovel) AS total4 FROM aluno WHERE zona = 'Urbana' AND tipoImovel = 'Comodo, Quitinete, Barraco' ORDER BY id_aluno ASC";
$sql_count5 = "SELECT COUNT(tipoImovel) AS total5 FROM aluno WHERE zona = 'Urbana' AND tipoImovel = 'Outro' ORDER BY id_aluno ASC";
$sql_count6 = "SELECT COUNT(tipoImovel) AS total6 FROM aluno WHERE zona = 'Urbana' AND tipoImovel = 'Sem resposta' ORDER BY id_aluno ASC";
$sql_count7 = "SELECT COUNT(regOcupImovel) AS total7 FROM aluno WHERE zona = 'Urbana' AND regOcupImovel = 'Propria' ORDER BY id_aluno ASC";
$sql_count8 = "SELECT COUNT(regOcupImovel) AS total8 FROM aluno WHERE zona = 'Urbana' AND regOcupImovel = 'Alugada' ORDER BY id_aluno ASC";
$sql_count9 = "SELECT COUNT(regOcupImovel) AS total9 FROM aluno WHERE zona = 'Urbana' AND regOcupImovel = 'Cedido' ORDER BY id_aluno ASC";
$sql_count10 = "SELECT COUNT(regOcupImovel) AS total10 FROM aluno WHERE zona = 'Urbana' AND regOcupImovel = 'Outro' ORDER BY id_aluno ASC";
$sql_count11 = "SELECT COUNT(regOcupImovel) AS total11 FROM aluno WHERE zona = 'Urbana' AND regOcupImovel = 'Sem Resposta' ORDER BY id_aluno ASC";
$sql_count12 = "SELECT COUNT(tipoConstr) AS total12 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Alvenaria / Tijolo' ORDER BY id_aluno ASC";
$sql_count13 = "SELECT COUNT(tipoConstr) AS total13 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Madeira / Taco' ORDER BY id_aluno ASC";
$sql_count14 = "SELECT COUNT(tipoConstr) AS total14 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Taipa' ORDER BY id_aluno ASC";
$sql_count15 = "SELECT COUNT(tipoConstr) AS total15 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Casa de enchimento' ORDER BY id_aluno ASC";
$sql_count16 = "SELECT COUNT(tipoConstr) AS total16 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Aproveitado' ORDER BY id_aluno ASC";
$sql_count17 = "SELECT COUNT(tipoConstr) AS total17 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Adobe' ORDER BY id_aluno ASC";
$sql_count18 = "SELECT COUNT(tipoConstr) AS total18 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Outro' ORDER BY id_aluno ASC";
$sql_count19 = "SELECT COUNT(tipoConstr) AS total19 FROM aluno WHERE zona = 'Urbana' AND tipoConstr = 'Sem Resposta' ORDER BY id_aluno ASC";

// INICIO DO CODIGO DA ZONA RURAL
$sql_count20 = "SELECT COUNT(*) AS total20 FROM aluno ORDER BY id_aluno ASC";
$sql_count21 = "SELECT COUNT(zona) AS total21 FROM aluno WHERE zona = 'Rural' ORDER BY id_aluno ASC";
$sql_count22= "SELECT COUNT(tipoImovel) AS total22 FROM aluno WHERE zona = 'Rural' AND tipoImovel = 'casa' ORDER BY id_aluno ASC";
$sql_count23 = "SELECT COUNT(tipoImovel) AS total23 FROM aluno WHERE zona = 'Rural' AND tipoImovel = 'Comodo, Quitinete, Barraco' ORDER BY id_aluno ASC";
$sql_count24 = "SELECT COUNT(tipoImovel) AS total24 FROM aluno WHERE zona = 'Rural' AND tipoImovel = 'Outro' ORDER BY id_aluno ASC";
$sql_count25 = "SELECT COUNT(tipoImovel) AS total25 FROM aluno WHERE zona = 'Rural' AND tipoImovel = 'Sem resposta' ORDER BY id_aluno ASC";
$sql_count26 = "SELECT COUNT(regOcupImovel) AS total26 FROM aluno WHERE zona = 'Rural' AND regOcupImovel = 'Propria' ORDER BY id_aluno ASC";
$sql_count27 = "SELECT COUNT(regOcupImovel) AS total27 FROM aluno WHERE zona = 'Rural' AND regOcupImovel = 'Alugada' ORDER BY id_aluno ASC";
$sql_count28 = "SELECT COUNT(regOcupImovel) AS total28 FROM aluno WHERE zona = 'Rural' AND regOcupImovel = 'Cedido' ORDER BY id_aluno ASC";
$sql_count29 = "SELECT COUNT(regOcupImovel) AS total29 FROM aluno WHERE zona = 'Rural' AND regOcupImovel = 'Outro' ORDER BY id_aluno ASC";
$sql_count30 = "SELECT COUNT(regOcupImovel) AS total30 FROM aluno WHERE zona = 'Rural' AND regOcupImovel = 'Sem Resposta' ORDER BY id_aluno ASC";
$sql_count31 = "SELECT COUNT(tipoConstr) AS total31 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Alvenaria / Tijolo' ORDER BY id_aluno ASC";
$sql_count32 = "SELECT COUNT(tipoConstr) AS total32 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Madeira / Taco' ORDER BY id_aluno ASC";
$sql_count33 = "SELECT COUNT(tipoConstr) AS total33 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Taipa' ORDER BY id_aluno ASC";
$sql_count34 = "SELECT COUNT(tipoConstr) AS total34 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Casa de enchimento' ORDER BY id_aluno ASC";
$sql_count35 = "SELECT COUNT(tipoConstr) AS total35 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Aproveitado' ORDER BY id_aluno ASC";
$sql_count36 = "SELECT COUNT(tipoConstr) AS total36 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Adobe' ORDER BY id_aluno ASC";
$sql_count37 = "SELECT COUNT(tipoConstr) AS total37 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Outro' ORDER BY id_aluno ASC";
$sql_count38 = "SELECT COUNT(tipoConstr) AS total38 FROM aluno WHERE zona = 'Rural' AND tipoConstr = 'Sem Resposta' ORDER BY id_aluno ASC";
//FIM DO CODIGO DA ZONA RURAL


// SQL para selecionar os registros
$sql = "SELECT id_aluno, data, zona, bairro, tipoImovel, regOcupImovel, tipoConstr FROM aluno WHERE zona = 'Urbana' ORDER BY id_aluno ASC";
 
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

// INICIO CODIGO DA ZONA RURAL
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
         
	<h1>Relatório Imóveis, questões de 1 a 3 - Urbanas</h1>
		 <p>Total de questionários processados: <?php echo $total ?></p>
		 <p>Total Zona Urbana:<?php echo $total2 ?> </p>
		<hr>
		<p>Total imóveis do tipo <b>CASA</b> na Zona Urbana:<b> <?php echo $total3 ?></b> </p>
		<p>Total imóveis do tipo <b>CÔMODOS, QUITINETE, BARRACO</b> na Zona Urbana:<b> <?php echo $total4 ?></b> </p>
		<p>Total imóveis do tipo <b>OUTRO</b> na Zona Urbana:<b> <?php echo $total5 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> no tipo do imóvel, nos questionários da Zona Urbana:<b> <?php echo $total6 ?></b> </p>
		<hr>
		<p>Total imóveis em regime de ocupação <b>PRÓPRIA</b> na Zona Urbana:<b> <?php echo $total7 ?></b> </p>
		<p>Total imóveis em regime de ocupação <b>ALUGADA</b> na Zona Urbana:<b> <?php echo $total8 ?></b> </p>
 		<p>Total imóveis em regime de ocupação <b>CEDIDO</b> na Zona Urbana:<b> <?php echo $total9 ?></b> </p>
		<p>Total imóveis em regime de ocupação <b>OUTRO</b> na Zona Urbana:<b> <?php echo $total10 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> em regime de ocupação na Zona Urbana:<b> <?php echo $total11 ?></b> </p>
		<hr>
		<p>Total <b>ALVENARIA / TIJOLO</b> em tipo de construção na Zona Urbana:<b> <?php echo $total12 ?></b> </p>
		<p>Total <b>MADEIRA / TACO</b> em tipo de construção na Zona Urbana:<b> <?php echo $total13 ?></b> </p>
		<p>Total <b>TAIPA</b> em tipo de construção na Zona Urbana:<b> <?php echo $total14 ?></b> </p>
		<p>Total <b>CASA DE ENCHIMENTO</b> em tipo de construção na Zona Urbana:<b> <?php echo $total15 ?></b> </p>
		<p>Total <b>APROVEITADO</b> em tipo de construção na Zona Urbana:<b> <?php echo $total16 ?></b> </p>
		<p>Total <b>ADOBE</b> em tipo de construção na Zona Urbana:<b> <?php echo $total17 ?></b> </p>
		<p>Total <b>OUTRO</b> em tipo de construção na Zona Urbana:<b> <?php echo $total18 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> em tipo de construção na Zona Urbana:<b> <?php echo $total19 ?></b> </p>
		<hr>
	<h1>Relatório Imóveis, questões de 1 a 3 - Rurais</h1>
		 <p>Total de questionários processados: <?php echo $total20 ?></p>
		 <p>Total Zona Rural:<?php echo $total21 ?> </p>
		<hr>
		<p>Total imóveis do tipo <b>CASA</b> na Zona Rural:<b> <?php echo $total22 ?></b> </p>
		<p>Total imóveis do tipo <b>CÔMODOS, QUITINETE, BARRACO</b> na Zona Rural:<b> <?php echo $total23 ?></b> </p>
		<p>Total imóveis do tipo <b>OUTRO</b> na Zona Rural:<b> <?php echo $total24 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> no tipo do imóvel, nos questionários da Zona Rural:<b> <?php echo $total25 ?></b> </p>
		<hr>
		<p>Total imóveis em regime de ocupação <b>PRÓPRIA</b> na Zona Rural:<b> <?php echo $total26 ?></b> </p>
		<p>Total imóveis em regime de ocupação <b>ALUGADA</b> na Zona Rural:<b> <?php echo $total27 ?></b> </p>
 		<p>Total imóveis em regime de ocupação <b>CEDIDO</b> na Zona Rural:<b> <?php echo $total28 ?></b> </p>
		<p>Total imóveis em regime de ocupação <b>OUTRO</b> na Zona Rural:<b> <?php echo $total29 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> em regime de ocupação na Zona Rural:<b> <?php echo $total30 ?></b> </p>
		<hr>
		<p>Total <b>ALVENARIA / TIJOLO</b> em tipo de construção na Zona Rural:<b> <?php echo $total31 ?></b> </p>
		<p>Total <b>MADEIRA / TACO</b> em tipo de construção na Zona Rural:<b> <?php echo $total32 ?></b> </p>
		<p>Total <b>TAIPA</b> em tipo de construção na Zona Rural:<b> <?php echo $total33 ?></b> </p>
		<p>Total <b>CASA DE ENCHIMENTO</b> em tipo de construção na Zona Rural:<b> <?php echo $total34 ?></b> </p>
		<p>Total <b>APROVEITADO</b> em tipo de construção na Zona Rural:<b> <?php echo $total35 ?></b> </p>
		<p>Total <b>ADOBE</b> em tipo de construção na Zona Rural:<b> <?php echo $total36 ?></b> </p>
		<p>Total <b>OUTRO</b> em tipo de construção na Zona Rural:<b> <?php echo $total37 ?></b> </p>
		<p>Total <b>SEM RESPOSTA</b> em tipo de construção na Zona Rural:<b> <?php echo $total38 ?></b> </p>
		<hr>

            </body>
    <center>
<form method=get action="home.php">
<input type=submit value="Voltar">
</form>
</center>
    
</html>
