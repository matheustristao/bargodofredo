<?php


class ListaFuncionario {
   
    static private $funcionarioController;

    private function instanciaFuncionarioController() {

        if (!isset(self::$funcionarioController)) {
            self::$funcionarioController = new FuncionarioController();
        }
        return self::$funcionarioController;
    }

    
    public function listarFuncionarios() {
        
        require('/app/controller/LoginController.php');
        
        $funcionarioController = self::instanciaFuncionarioController();

        $funcionarioController-> listarFuncionarios();
    }

   
    
    }
  