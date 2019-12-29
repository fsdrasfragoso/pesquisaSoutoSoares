<?php 
class Bairro{

    static function bairros(){
        $sql = "SELECT bairro FROM aluno WHERE zona = 'Urbana' AND bairro NOT IN ('Escolha uma Opção...', '') GROUP BY bairro;";
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $bairros = $resgistros = $select->fetchAll();
        return $bairros; 
    }

}
