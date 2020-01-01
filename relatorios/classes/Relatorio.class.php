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
     

    static function getRendaFamiliar(){
        $sql = "SELECT rendaFamilia FROM aluno GROUP BY rendaFamilia;";
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $renda = $select->fetchAll();
        return $renda; 
    } 

    static function getContribuiRendaFamiliar(){
        $sql = "SELECT contribRendaFamiliar FROM aluno GROUP BY contribRendaFamiliar";
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $renda = $select->fetchAll();
        return $renda; 
    }
    
    static function getContrituicaoFamiliar(){
        $sql = "SELECT constFamiliar FROM aluno GROUP BY constFamiliar;";
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $constFamiliar = $select->fetchAll();
        return $constFamiliar; 
    }
    static function getNumeroPessoasCasa(){
        $sql = "SELECT
        CASE 
         WHEN numeroPessoas = 1 THEN '01'
         WHEN numeroPessoas = 2 THEN '02'
         WHEN numeroPessoas = 3 THEN '03'
         WHEN numeroPessoas = 4 THEN '04'
         WHEN numeroPessoas = 5 THEN '05'
         WHEN numeroPessoas = 6 THEN '06'
         WHEN numeroPessoas = 7 THEN '07'
         WHEN numeroPessoas = 8 THEN '08'
         WHEN numeroPessoas = 9 THEN '09'
      ELSE numeroPessoas END as numero_Pessoas 
    FROM
        aluno 
    GROUP BY
        numeroPessoas 
    ORDER BY
        1 ASC;";
    
    $select = DB::getConn()->prepare($sql); 
    $select->execute(); 
    $numeroPessoas = $select->fetchAll();
    return $numeroPessoas; 

    }

    static function setRelatorio($colunas,$where, $titulo){
        $relatorio = "SELECT $colunas FROM aluno $where";
        
        $sql = 'INSERT INTO `relatorios`(
            `nome_relatorio`, 
            `query_relatorio`) 
            VALUES (
                 "'.$titulo.'", 
                 "'.$relatorio.'");
        ';
         
        $insert = DB::getConn()->prepare($sql);
        $insert->execute();

        $sql = "SELECT id_relatorio FROM relatorios ORDER BY id_relatorio DESC LIMIT 1"; 

        $id_relatorio = DB::getConn()->prepare($sql);
        $id_relatorio->execute();
        
        return $id_relatorio->fetchAll()[0]['id_relatorio']; 
    }
}