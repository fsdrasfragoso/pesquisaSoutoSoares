<?php
  
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
  
    return $PDO;
}
  

function mask($val, $mask)
{
$maskared = '';
$k = 0;
for($i = 0; $i<=strlen($mask)-1; $i++)
{
if($mask[$i] == '#')
{
if(isset($val[$k]))
$maskared .= $val[$k++];
}
else
{
if(isset($mask[$i]))
$maskared .= $mask[$i];
}
}
return $maskared;
}
 
/**
 * Converte datas entre os padrões ISO e brasileiro
 * Fonte: http://rberaldo.com.br/php-conversao-de-datas-formato-brasileiro-e-formato-iso/
 */

 
/**
 * Calcula a idade a partir da data de nascimento
 *
 * Sobre a classe DateTime: http://rberaldo.com.br/php-usando-a-classe-nativa-datetime/
 */

?>
