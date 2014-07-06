<?php

class FuncionarioController {

    private static $funcionarioDao;

    private function instanciaFuncionarioDao() {

        if (!isset(self::$funcionarioDao)) {
            self::$funcionarioDao = new FuncionarioDao();
        }
        return self::$funcionarioDao;
    }

    public function listarFuncionarios() {

        $funcionarioDao = self::instanciaFuncionarioDao();

        $lista = $funcionarioDao->listFuncionario();
        
        while ($row = mysqli_fetch_array($lista)) {
            echo $row['NOME'] . " " . $row['CPF'];
            echo "<br>";
        }
    }

}
