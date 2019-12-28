<?php
 // Verifica se houve POST e se o usuсrio ou a senha щ(sуo) vazio(s)
  if (!empty($_POST) AND (empty($_POST['usuario']) OR empty($_POST['senha']))) {
      header("Location: login.php"); exit;
  }
  // Tenta se conectar ao servidor MySQL
  mysql_connect('localhost', 'admin', 'q1w2e3r4') or trigger_error(mysql_error());
  // Tenta se conectar a um banco de dados MySQL
  mysql_select_db('dbpesquisa') or trigger_error(mysql_error());
   
  $usuario = mysql_real_escape_string($_POST['usuario']);
  $senha = mysql_real_escape_string($_POST['senha']); 
  // Validaчуo do usuсrio/senha digitados
  $sql = "SELECT `id`, `nome`, `nivel` FROM `userPerms` WHERE (`usuario` = '".$usuario ."') AND (`senha` = '". sha1($senha) ."') AND (`ativo` = 1) LIMIT 1";
  $query = mysql_query($sql);
  if (mysql_num_rows($query) != 1) {
      // Mensagem de erro quando os dados sуo invсlidos e/ou o usuсrio nуo foi encontrado
      echo "Login invсlido!"; exit;
  } else {
      // Salva os dados encontados na variсvel $resultado
      $resultado = mysql_fetch_assoc($query);
  }
  
   
      // Se a sessуo nуo existir, inicia uma
      if (!isset($_SESSION)) session_start();
   
      // Salva os dados encontrados na sessуo
      $_SESSION['UsuarioID'] = $resultado['id'];
      $_SESSION['UsuarioNome'] = $resultado['nome'];
      $_SESSION['UsuarioNivel'] = $resultado['nivel'];
   
      // Redireciona o visitante
      header("Location: /apostas/index.php"); exit;
  

?>
