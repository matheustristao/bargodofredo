<?php

class FuncionarioDao {

    static private $conection;

    private static function instanciaConection() {

        if (!isset(self::$conection)) {
            self::$conection = new ConectionFactory();
        }

        return self::$conection;
    }
    
    
    public function listFuncionario() {
        
        $instanciaConection = self::instanciaConection();

        $query = "select 
            P.NOME,
            P.SEXO,
            P.ANO_NASCIMENTO,
            P.CPF,
            F.SALARIO,
            F.CARTEIRA_TRABALHO
                from  pessoa P,funcionario f 
                where p.COD_PESSOA = F.COD_PESSOA 
                and F.SE_ATIVO LIKE 'S'";

        return $lista = $instanciaConection->listData($query);

    }
    
    public function cadastrarFuncionario($nome,$cpf,$sexo,$ano_nascimento,$salario,$carteira_trabalho){
         
        $instanciaConection = self::instanciaConection();
        
         $query = "select 
            P.NOME,
            P.SEXO,
            P.ANO_NASCIMENTO,
            P.CPF,
            F.SALARIO,
            F.CARTEIRA_TRABALHO
                from  pessoa P,funcionario f 
                where p.COD_PESSOA = F.COD_PESSOA 
                and F.SE_ATIVO LIKE 'S'";

        
        $instanciaConection->executaQuery($query);
    }

}
