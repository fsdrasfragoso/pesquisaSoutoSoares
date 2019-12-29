<?php 

include('classes/DB.class.php');

$sql = "SELECT * FROM relatorios;"; 

$select = DB::getConn()->prepare($sql); 
$select->execute();

$resgistros = $select->fetchAll();

foreach($resgistros as $res){
      echo '<h3>'.$res['nome_relatorio'].'</h3> <br/>';
      $tes = DB::getConn()->prepare($res['query_relatorio']);
      $tes->execute(); 
      $relatorios = $tes->fetchAll();
      echo '<pre>';
      print_r($relatorios);
      echo '</pre>';
}


?>