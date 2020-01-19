<?php 

if(!empty($_POST['id_relatorio'])){
    include('../classes/DB.class.php');
    include('../classes/Relatorio.class.php');
    $variavel = Relatorio::excluirRelatorio($_POST['id_relatorio']);
    echo json_encode($variavel);
}else{
    echo json_decode('não deletado');
}


?>