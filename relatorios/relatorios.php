<?php 

include('classes/DB.class.php');

$sql = "DESC quest2;"; 

$select = DB::getConn()->prepare($sql); 
$select->execute();

$resgistros = $select->fetchAll();
$idade = 17; 
foreach($resgistros as $res){
    $coluna =  $res['Field'];
    $sql = "SELECT $coluna FROM quest2 GROUP BY $coluna;";        
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $options = $select->fetchAll();
        echo '<pre>';
      //  print_r($options);
        echo '</pre>';
        echo '<br/>';

        $isSex = $res['Field'][0].$res['Field'][1].$res['Field'][2];
       echo $isSex; 
        echo '<br/>';
       
        echo $idade > 18 ? "maior idade" : "menor idade";
        $idade++; 
        echo '<br/>'; 
}



?>