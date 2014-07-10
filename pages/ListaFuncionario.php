<?php

require('../app/controller/FuncionarioController.php');
require('../app/lib/ConectionFactory.php');
require('../app/dao/FuncionarioDao.php');
require('../app/model/Funcionario.php');

$funcionarioController;

if (!isset($funcionarioController)) {
    $funcionarioController = new FuncionarioController();
}

$funcionarioController->listarFuncionarios();

if (isset($_POST['name'])) {
$name = strip_tags($_POST['name']);
$cpf = strip_tags($_POST['cpf']);
echo "Nome		=".$name."</br>";	
echo "Cpf		=".$cpf."</br>";	
}
 ?>

<html>
        
    <form classe ="form">
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="stylesheet" href="css/formulario.css" type="text/css" media="all" />  
    
        <p class="submit">
            <input type="button" onclick="window.location = 'CadastraFuncionario.php'" value="Cadastrar novo funcionario" />
            <input type="button" onclick="window.location = 'Principal.php'" value="Voltar" />
        </p>
        
        </form>
</html>        
        