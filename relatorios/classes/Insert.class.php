<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */
 

class Insert
{

    // Método para inserir novo usuário no banco de dados
    function InsereUsuario($nome, $email, $senha)
    {
        $conexao = new Conexao();
        $conexao = $conexao->Open();
        
        // Verifica se o email já está cadastrado no sistema
        if (Select::VerificaUsuario($email))
        {
            header('Location:login.php?msg=2');
            exit;
        } else {
            // Caso não esteja, insere o novo usuário
            $sql = "INSERT 
                    INTO usuario (nome, email, senha)
                    VALUES ('{$nome}', '{$email}', SHA1('{$senha}'));";
            
            // Se o insert for feito com sucesso, continua
            if ($dados = mysqli_query($conexao, $sql))
            {
                return true;
            } else {
                return false;
            }
        }
        
        // Encerra a conexão
        $conexao->Close();
    }
    
}

?>
