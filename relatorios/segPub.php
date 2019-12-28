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
$sql_count3 = "SELECT COUNT(segPublica) AS total3 FROM aluno WHERE zona = 'Urbana' AND segPublica = 'Otima' ORDER BY id_aluno ASC";
$sql_count4 = "SELECT COUNT(segPublica) AS total4 FROM aluno WHERE zona = 'Urbana' AND segPublica = 'Boa' ORDER BY id_aluno ASC";
$sql_count5 = "SELECT COUNT(segPublica) AS total5 FROM aluno WHERE zona = 'Urbana' AND segPublica = 'Regular' ORDER BY id_aluno ASC";
$sql_count6 = "SELECT COUNT(segPublica) AS total6 FROM aluno WHERE zona = 'Urbana' AND segPublica = 'Ruim' ORDER BY id_aluno ASC";
$sql_count7 = "SELECT COUNT(segPublica) AS total7 FROM aluno WHERE zona = 'Urbana' AND segPublica = 'Sem Resposta' ORDER BY id_aluno ASC";

// INICIO DO CODIGO DA ZONA RURAL
$sql_count8 = "SELECT COUNT(*) AS total8 FROM aluno ORDER BY id_aluno ASC";
$sql_count9 = "SELECT COUNT(zona) AS total9 FROM aluno WHERE zona = 'Rural' ORDER BY id_aluno ASC";
$sql_count10= "SELECT COUNT(segPublica) AS total10 FROM aluno WHERE zona = 'Rural' AND segPublica = 'Otima' ORDER BY id_aluno ASC";
$sql_count11 = "SELECT COUNT(segPublica) AS total11 FROM aluno WHERE zona = 'Rural' AND segPublica = 'Boa' ORDER BY id_aluno ASC";
$sql_count12 = "SELECT COUNT(segPublica) AS total12 FROM aluno WHERE zona = 'Rural' AND segPublica = 'Regular' ORDER BY id_aluno ASC";
$sql_count13 = "SELECT COUNT(segPublica) AS total13 FROM aluno WHERE zona = 'Rural' AND segPublica = 'Ruim' ORDER BY id_aluno ASC";
$sql_count14 = "SELECT COUNT(segPublica) AS total14 FROM aluno WHERE zona = 'Rural' AND segPublica = 'Sem Resposta' ORDER BY id_aluno ASC";
//FIM DO CODIGO DA ZONA RURAL


// SQL para selecionar os registros
$sql = "SELECT id_aluno, data, zona, bairro, segPublica FROM aluno WHERE zona = 'Urbana' ORDER BY id_aluno ASC";
 
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
         
	<h1>Relatório Segurança Pública, questão 8 - Urbanas</h1>
		 <p>Total de questionários processados: <?php echo $total ?></p>
		 <p>Total Zona Urbana:<?php echo $total2 ?> </p>
		<hr>
		<p>Total de respostas  <b>ÓTIMA</b> para segurança pública na Zona Urbana:<b> <?php echo $total3 ?></b> </p>
		<p>Total de respostas  <b>BOA</b> para segurança pública na Zona Urbana:<b> <?php echo $total4 ?></b> </p>
		<p>Total de respostas <b>REGULAR</b> para segurança pública na Zona Urbana:<b> <?php echo $total5 ?></b> </p>
		<p>Total de respostas  <b>RUIM</b> para segurança pública na Zona Urbana:<b> <?php echo $total6 ?></b> </p>
		<p>Total de respostas <b>SEM RESPOSTA</b> para segurança pública na Zona Urbana:<b> <?php echo $total7 ?></b> </p>
		<hr>
	<h1>Relatório Segurança Pública, questão 8 - Rurais</h1>
		 <p>Total de questionários processados: <?php echo $total8 ?></p>
		 <p>Total Zona Rural:<?php echo $total9 ?> </p>
		<hr>
		<p>Total de respostas  <b>ÓTIMA</b> para segurança pública na Zona Rurali:<b> <?php echo $total10 ?></b> </p>
		<p>Total de respostas  <b>BOA</b> para segurança pública na Zona Urbana:<b> <?php echo $total11 ?></b> </p>
		<p>Total de respostas <b>REGULAR</b> para segurança pública na Zona Urbana:<b> <?php echo $total12 ?></b> </p>
		<p>Total de respostas  <b>RUIM</b> para segurança pública na Zona Urbana:<b> <?php echo $total13 ?></b> </p>
		<p>Total de respostas <b>SEM RESPOSTA</b> para segurança pública na Zona Urbana:<b> <?php echo $total14 ?></b> </p>


		<hr>

            </body>
    <center>
<form method=get action="home.php">
<input type=submit value="Voltar">
</form>
</center>
    
</html>
