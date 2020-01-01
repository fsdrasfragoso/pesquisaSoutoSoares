<?php 
class Comunidade{

    static function comunidades(){
        $sql = "SELECT comunidade FROM aluno WHERE zona = 'Rural' AND comunidade NOT IN  ('Escolha uma Opção...', '') GROUP BY comunidade;";
        $select = DB::getConn()->prepare($sql); 
        $select->execute(); 
        $comunidades = $select->fetchAll();
        return $comunidades; 
    }
    

}
