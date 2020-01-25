<?php 
include('classes/DB.class.php');
include('classes/Relatorio.class.php');
$titulo = $_POST['tituloRelatorio'];
if(!empty($titulo)){
$campo = $_POST['campo'];
$AND = '';
$c = '';
foreach(Relatorio::getColunasQuest2() as $coluna){
    if($_POST[$coluna['Field']] != '0'){
       
        $AND .= "AND ".$coluna['Field']." = '".$_POST[$coluna['Field']]."'"; 
        $c .= $coluna['Field'].',';
    }
      $c1 = substr($c, 0, -1);
}

$id_relatorio = Relatorio::setRelatorioPorcentagem($campo,$AND,$titulo,$c1);
header('Location: ./startbootstrap/tables.php?id='.$id_relatorio);

}else{
    echo '<h3> Por Favor Informe o Titulo do Seu Relatório!';
}    

?>