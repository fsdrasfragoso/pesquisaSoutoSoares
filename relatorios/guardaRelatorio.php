<?php 
include('classes/DB.class.php');
include('classes/Relatorio.class.php');
$titulo = $_POST['tituloRelatorio'];
if(!empty($titulo)){
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

if($_POST['zona'] != '0'){
     $filtro = "zona = '".$_POST['zona']."'";
    array_push($filtros,$filtro);
}

if($_POST['bairro'] != '0'){
    $filtro = "bairro = '".$_POST['bairro']."'";
    array_push($filtros,$filtro);
}

if($_POST['comunidade'] != '0'){
    $filtro = "comunidade = '".$_POST['comunidade']."'";
    array_push($filtros,$filtro);
}

if($_POST['rendaFamilia'] != '0'){
    $filtro = "rendaFamilia = '".$_POST['rendaFamilia']."'";
    array_push($filtros,$filtro);
}

if($_POST['contribRendaFamiliar'] != '0'){
    $filtro = "contribRendaFamiliar = '".$_POST['contribRendaFamiliar']."'";
    array_push($filtros,$filtro);
}

if($_POST['constFamiliar'] != '0'){
    $filtro = "constFamiliar = '".$_POST['constFamiliar']."'";
    array_push($filtros,$filtro);
}

if($_POST['numero_Pessoas'] != '0'){
    $filtro = "numeroPessoas = ".$_POST['numero_Pessoas']."";
    array_push($filtros,$filtro);
}

for($i=0;$i<count($filtros);$i++){
    if($i == 0){
       $where .= "WHERE ".$filtros[$i]." "; 
    }else{
        $where .= " AND ".$filtros[$i]." "; 
    }
}
 $id_relatorio = Relatorio::setRelatorio($colunas,$where, $titulo); 
 header('Location: ./startbootstrap/tables.php?id='.$id_relatorio);

}else{
    echo '<h3> Por Favor Informe o Titulo do Seu Relatório!';
}    

?>