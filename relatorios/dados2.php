<?php include_once 'verifica.php'; ?>
<?php
require_once 'init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM quest2 ORDER BY id_quest ASC";
 
// SQL para selecionar os registros
$sql = "SELECT id_quest, data, responsavel, zona, bairro, comunidade FROM quest2 ORDER BY id_quest ASC";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
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
         
	<h1>relatório parcial</h1>
                 <p>Total de questionários processados até agora: <?php echo $total ?></p>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
            <thead>
                <tr>
                    <th>ID Questionario</th>
                    <th>Data</th>
                    <th>Responsável</th>
                    <th>Zona</th>
		    <th>Comunidade</th>
		    <th>Bairro</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['id_quest'] ?></td>
                    <td><?php echo $user['data'] ?></td>
                    <td><?php echo utf8_decode($user['responsavel']); ?></td>
                    <td><?php echo $user['zona'] ?></td>
                     <td><?php echo utf8_decode($user['comunidade']); ?></td>
			<td><?php echo utf8_decode($user['bairro']); ?></td>
	
                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum quest registrado</p>
 
        <?php endif; ?>
    </body>
    <center>
<form method=get action="home.php">
<input type=submit value="Voltar">
</form>
</center>
    
</html>
