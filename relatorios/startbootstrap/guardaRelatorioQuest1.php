<?php 
      include('../classes/DB.class.php');
      include('../classes/Relatorio.class.php');
     
      if(!empty($_POST['tituloRelatorio'])){
        $titulo = $_POST['tituloRelatorio'];
        $campos = $_POST['campo'];
        $colunas = '';
        $filtros = [];
        $where = '';
        $ultimaColuna  = count($campos) - 1;
        if(in_array('*',$campos)){
         $colunas = '*';
        }else{ 
            for($i=0;$i<count($campos);$i++){
                if($i == $ultimaColuna){
                    $colunas .= $campos[$i]; 
                }else{
                    $colunas .= $campos[$i].', ';  
                }         
            }       
        } 
            foreach(Relatorio::getColunasQuest2() as $coluna){  
                if($_POST[$coluna['Field']] != '0'){
                    $filtro = $coluna['Field']." = '".$_POST[$coluna['Field']]."'";
                   array_push($filtros,$filtro);
               }
            }
            for($i=0;$i<count($filtros);$i++){
                if($i == 0){
                   $where .= "WHERE ".$filtros[$i]." "; 
                }else{
                    $where .= " AND ".$filtros[$i]." "; 
                }
            }
             $id_relatorio = Relatorio::setRelatorioQuest2($colunas,$where, $titulo); 
             header('Location: ./tables.php?id='.$id_relatorio);
                     
      }else{
        echo '<h3> Por Favor Informe o Titulo do Seu Relatório!';
      }

?>