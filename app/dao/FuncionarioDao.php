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
            F.CARTEIRA_TRABALHO,
            F.SE_ATIVO
                from  pessoa P,funcionario f 
                where p.COD_PESSOA = F.COD_PESSOA 
                order by P.NOME";

        return $lista = $instanciaConection->listData($query);
    }

    public function salvarFuncionario($nome, $cpf, $sexo, $ano_nascimento, $salario, $carteira_trabalho) {

        $instanciaConection = self::instanciaConection();

        $query1 = "insert into pessoa (
                     NOME
                    ,SEXO
                    ,ANO_NASCIMENTO
                    ,CPF
                    ) VALUES ( 
                     '$nome' -- NOME - IN varchar(40)
                    ,'$sexo' -- SEXO - IN char(1)
                    ,'$ano_nascimento' -- ANO_NASCIMENTO - IN date
                    ,'$cpf' -- CPF - IN varchar(11)
                    ) ";

        $query2 = "
                insert into funcionario (
                 COD_PESSOA,
                 SALARIO, 
                 CARTEIRA_TRABALHO, 
                 SE_ATIVO
                ) VALUES (
                (select MAX(pessoa.COD_PESSOA) FROM pessoa)
                ,$salario
                ,'$carteira_trabalho'
                ,'S'
                )";

        $instanciaConection->executaQuery($query1);
        $instanciaConection->executaQuery($query2);
            
    }

}
