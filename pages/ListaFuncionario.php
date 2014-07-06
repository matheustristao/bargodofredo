<?php

require('../app/controller/FuncionarioController.php');
require('../app/lib/ConectionFactory.php');
require('../app/dao/FuncionarioDao.php');


$funcionarioController;

if (!isset($funcionarioController)) {
    $funcionarioController = new FuncionarioController();
}

$funcionarioController->listarFuncionarios();



