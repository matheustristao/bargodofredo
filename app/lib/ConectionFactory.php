<?php

class ConectionFactory {

    static protected $mysqli;

    private function conectaBanco() {
        $MySQL = array(
            'servidor' => 'localhost',
            'usuario' => 'root',
            'senha' => '',
            'banco' => 'bargodofredo'
        );

        $mysqli = new mysqli($MySQL['servidor'], $MySQL['usuario'], $MySQL['senha'], $MySQL['banco']);

        if (mysqli_connect_errno()) {
            trigger_error(mysqli_connect_error(), E_USER_ERROR);
        } else {
            return $mysqli;
        }
    }

    public function executaQuery($query) {
        $instanciaMySqli = self::conectaBanco();

        $instanciaMySqli->query($query);
    }

    public function listData($query) {
        $instanciaMySqli = self::conectaBanco();

        return $result = $instanciaMySqli->query($query);
    }

}

?>
