<?php
require_once 'init.php';
 
// abre a conexão
$PDO = db_connect();
 
// SQL para contar o total de registros
// A biblioteca PDO possui o método rowCount(), mas ele pode ser impreciso.
// É recomendável usar a função COUNT da SQL
// Veja o Exemplo 2 deste link: http://php.net/manual/pt_BR/pdostatement.rowcount.php
$sql_count = "SELECT COUNT(*) AS total FROM aluno ORDER BY id_aluno ASC";
 
// SQL para selecionar os registros
$sql = "SELECT id_aluno, data, responsavel, zona, comunidade FROM aluno ORDER BY id_aluno ASC";
 
// conta o toal de registros
$stmt_count = $PDO->prepare($sql_count);
$stmt_count->execute();
$total = $stmt_count->fetchColumn();
 
// seleciona os registros
$stmt = $PDO->prepare($sql);
$stmt->execute();
?>
<!doctype html>
<?php include ('cabecalho.php')?>
<html>
    <head>
        <meta charset="utf-8">
 
        <title>Sistema de relatorios</title>
        <link rel="stylesheet" type="text/css" href="dani.css">
    </head>
 <?php
   
  // A sessão precisa ser iniciada em cada página diferente
  if (!isset($_SESSION)) session_start();
   
  // Verifica se não há a variável da sessão que identifica o usuário
  if (!isset($_SESSION['UsuarioID'])) {
      // Destrói a sessão por segurança
      session_destroy();
      // Redireciona o visitante de volta pro login
      header("Location: ../login.php"); exit;
  }
   
  ?>
    <body>
         
        <h1>Super Sorteios</h1>
         <p>Ol&aacute, <?php echo $_SESSION['UsuarioNome']; ?>!</p>
        <p><a href="form-add.php">Adicionar Novo Palpite</a></p>
 
        <h2>Lista de Palpites para o concurso <b>1820 da Lotomania, Data provável do Sorteio em 05/12/2017.</b></h2>
        <p>Esse é um sistema de bolão, ou promoção, por nome Super Sorteios da Ibitiara FM, que tem o único objetivo de promover ações para estimular o comércio local, na cidade de Ibitiara-BA e adjacências.<br>
        No caso desse sorteio, específico, é fazer com que os participantes tentem adivinhar qual o primeiro número a sair nos concursos da Lotomania que forem combinados previamente. Sempre mediante palpite único, devendo acertar exatamente o número da primeira bola a sair no sorteio.<br>
        As apostas se encerrarão sempre às <b>17 horas (5 da tarde)</b> da <b>Data do Sorteio</b>. Será o vencedor quem acertar o número da 1ª (primeira) dezena a sair no sorteio específico.<br>No caso de ninguém acertar o número exato, o prêmio ficará acumulado para um próximo sorteio, ficando à critério da organização a nova data e concurso. Em caso de empate de vencedores, a premiação será dividida igualitariamente.</p>
        <p>Total de Palpites: <?php echo $total ?></p>
 
        <?php if ($total > 0): ?>
 
        <table width="50%" border="1">
            <thead>
                <tr>
                    <th>Data e Hora</th>
                    <th>Apostador</th>
                    <th>Telefone</th>
                    <th>Numero</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php while ($user = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
                <tr>
                    <td><?php echo $user['data_hora'] ?></td>
                    <td><?php echo $user['apostador'] ?></td>
                    <td><?php echo $user['telefone'] ?></td>
                    <td><?php echo $user['numero'] ?></td>
                    
                    
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
 
        <?php else: ?>
 
        <p>Nenhum Palpite registrado</p>
 
        <?php endif; ?>
    </body>
    <center>
<form method=get action="../../index.htm">
<input type=submit value="Voltar">
</form>
</center>
    <?php include ('rodape.php')?>
</html>
