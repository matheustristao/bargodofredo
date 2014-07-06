<?php

class FuncionarioController{
 
    private static $funcionarioDao;
    
    private function instanciaFuncionarioDao(){
        
        if (!isset(self::$funcionarioDao)) {
            self::$funcionarioDao = new FuncionarioDao();
        }
        return self::$funcionarioDao;
    }
    
    public function listarFuncionarios(){
        require('/app/dao/FuncionarioDao');
        
        $funcionarioDao = self::instanciaFuncionarioDao();
        
        $funcionarioDao -> listFuncionario();
        
    }
    
}