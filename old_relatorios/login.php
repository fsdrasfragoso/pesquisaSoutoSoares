<!DOCTYPE html>

<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Formulário de Login - relatorios</title>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

 <div id="cadastro">
     <form action="validacao.php" method="post">
         <table id="cad_table">
             <tr>
                 <td>Usu&aacuterio:</td>
                 <td><input type = "text" name="usuario" id="txtUsuario" class="txt" maxlength="25"></td>
             </tr>
             <tr>
                 <td>Senha:</td>
                 <td><input type = "password" name="senha" id="txtSenha" class="txt"></td>
             </tr>
             <tr>
                 <td colspan="2"><input type="submit" value="Entrar" id="btnEntrar"></td>
             </tr>
         </table>
     </form>
 </div>
<img src = '../logoSoutoSoares.png'><br>
</body>

</html>
