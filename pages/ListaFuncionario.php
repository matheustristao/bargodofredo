<html>
    
    <?php

    require('../app/controller/FuncionarioController.php');
    require('../app/lib/ConectionFactory.php');
    require('../app/dao/FuncionarioDao.php');
    require('../app/model/Funcionario.php');

    $funcionarioController;

    if (!isset($funcionarioController)) {
        $funcionarioController = new FuncionarioController();
    }

    ?>
    
    <h1> Lista de Funcionários em atividade </h1>

    
    <table border = 0>
        <tr> 
            <th width = 300 align ="left">
                 <h2> Nome </h2>
            </th>
            <th width = 200 align ="left">
                 <h2> CPF </h2>
            </th>
            <th width = 200 align ="left">
                 <h2> Salario </h2>
            </th>
        </tr>
        
        <tr>
            <td>
                <?php
                    
                    $lista = $funcionarioController->listarFuncionarios();
                    
                    while ($row = mysqli_fetch_array($lista)) {
                    echo $row['NOME'];
                    echo "<br>";
                    }
                    ?>
            </td>
            
            <td>
                 <?php
                 
                    $lista = $funcionarioController->listarFuncionarios();
                 
                    while ($row = mysqli_fetch_array($lista)) {
                    echo $row['CPF'];
                    echo "<br>";
                    }
                    ?>
            </td>
            
            <td>
                   <?php
                   
                    $lista = $funcionarioController->listarFuncionarios();
                   
                    while ($row = mysqli_fetch_array($lista)) {
                    echo $row['SALARIO'];
                    echo "<br>";
                    }
                    ?>
            </td>
            
        </tr>
    
    </table>
   
    <form classe ="form">
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="stylesheet" href="css/formulario.css" type="text/css" media="all" />  
    
        <p class="submit">
            <input type="button" onclick="window.location = 'CadastraFuncionario.php'" value="Cadastrar novo funcionario" />
            <input type="button" onclick="window.location = 'Principal.php'" value="Voltar" />
        </p>
        
        </form>
</html>        
        