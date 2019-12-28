<?php

/**
 * @author Ricardo Dantas
 * @copyright 2018
 */
 

class Conexao
{

    private $host = 'localhost';
    private $usuario = 'admin';
    private $senha = '556459';
    private $banco = 'dbpesquisa';
    public  $dbcon;
    
    
    // Método construtor 
    function __construct()
    {
        $this->Open();
    }
    
    
    // Método que conecta ao banco de dados
    function Open()
    {
        $dbcon = mysqli_connect($this->host, $this->usuario, $this->senha, $this->banco);
        
        if (!$dbcon)
        {
            echo '<pre>Conexão mal sucedida.<br></pre>';
            die;
        }
        
        return $dbcon;
    }
    
    
    // Método que encerra a conexão
    function Close()
    {   
        $this->mysqli_close();
    }
    
}

?>
