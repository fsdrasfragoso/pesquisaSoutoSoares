<?php 
class Relatorio{
    
    static function getRelatorios(){
        $sql = "SELECT * FROM relatorios;";
        $select = DB::getConn()->prepare($sql);
        $select->execute();
        $relatorios =  $select->fetchAll();
        return $relatorios; 
    }
    
    static function getTituloRelatorio($id){
        $sql = "SELECT nome_relatorio FROM relatorios WHERE id_relatorio = $id";
        $select = DB::getConn()->prepare($sql);
        $select->execute();
        $nome_relatorio = $select->fetchAll();

        return $nome_relatorio[0]['nome_relatorio'];

    }
    
    static function getRelatorioById($id){
         $sql = "SELECT query_relatorio FROM relatorios WHERE id_relatorio = $id"; 
         $select = DB::getConn()->prepare($sql);
         $select->execute();
         $query = $select->fetchAll();
         
         $select_relatorio = DB::getConn()->prepare($query[0]['query_relatorio']);
         $select_relatorio->execute(); 
         $relatorio = $select_relatorio->fetchAll();
         return $relatorio;                   
    }

    static function getColunasById($id){
        $sql = "SELECT query_relatorio FROM relatorios WHERE id_relatorio = $id"; 
        $select = DB::getConn()->prepare($sql);
        $select->execute();
        $query = $select->fetchAll();
        $colunas = [];
        $select_relatorio = DB::getConn()->prepare($query[0]['query_relatorio']);      
        if($select_relatorio->execute()){
            $i = 0; 
            while($row = $select_relatorio->fetch(PDO::FETCH_ASSOC)){
                foreach($row as $field => $value){
                     if($i==0){
                        array_push($colunas,$field);
                     }
                      
                }
                $i++; 
            }

        } 
      return $colunas;   
    }

}