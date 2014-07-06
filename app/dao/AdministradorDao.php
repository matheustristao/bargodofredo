<?php

require ('app/lib/ConectionFactory.php');

class AdministradorDao {

    static private $conection;

    private static function instanciaConection() {

        if (!isset(self::$conection)) {
            self::$conection = new ConectionFactory();
        }

        return self::$conection;
    }

    public function consultaLogin($id, $password) {

        $instanciaConection = self::instanciaConection();

        $query = "select * from administrador where ID like '$id' and PASSWORD like '$password' ";

        $result = $instanciaConection->listData($query);

        $contagem = $result->num_rows;

        if ($contagem > 0) {
            return 1;
        } else {
            return 0;
        }
    }

    
}