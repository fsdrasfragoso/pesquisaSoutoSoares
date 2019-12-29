<?php 

include('classes/DB.class.php');

$sql = "DESC aluno;"; 

$select = DB::getConn()->prepare($sql); 
$select->execute();

$resgistros = $select->fetchAll();

$campos = []; 

foreach($resgistros as $res){
    array_push($campos,$res['Field']);
}
print_r($campos);

?>