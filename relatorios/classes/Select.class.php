<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */
 

class Select
{

    // Método que verifica se email e senha estão corretos
    function VerificaUsuario($email, $senha='')
    {
        $conexao = new Conexao();
        $conexao = $conexao->Open();
        
        $sql = "SELECT
                    nome,
                    email
                FROM
                    usuario
                WHERE
                    email = '{$email}'";
        if (!empty($senha))
        {
            $sql .= "AND senha = SHA1('{$senha}');";
        }
        
        // Executa a query
        $dados = mysqli_query($conexao, $sql) or die(mysql_error());
        
        // Verifica se consulta retornou algum dado, e caso sim, percorre o resultado
        if (mysqli_num_rows($dados) == 0)
        {
            $_SESSION['nome'] = '';
            $_SESSION['email'] = '';
            return false;
        } else {
            while ($linha = mysqli_fetch_assoc($dados))
            {
                $_SESSION['nome'] = $linha['nome'];
                $_SESSION['email'] = $linha['email'];
                return true;
            }
        }
        
        // Encerra a conexão
        $conexao->Close();
    }
    
}

?>
