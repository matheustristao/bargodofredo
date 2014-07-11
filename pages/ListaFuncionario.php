  <h1> Lista de Funcionários em atividade </h1>  

  <?php

    require('../app/controller/FuncionarioController.php');
    require('../app/lib/ConectionFactory.php');
    require('../app/dao/FuncionarioDao.php');
    require('../app/model/Funcionario.php');

    $funcionarioController;

    if (!isset($funcionarioController)) {
        $funcionarioController = new FuncionarioController();
    }
  
   echo  '<table border = 1>';
       echo '<tr>'; 
            echo '<th width = 300 align ="left">';
                 echo '<h2> Nome </h2>';
            echo '</th>';
            echo '<th width = 200 align ="left">'; 
                echo  '<h2> CPF </h2>';
            echo '</th>';
            echo '<th width = 200 align ="left">';
                echo '<h2> Salario </h2>';
           echo '</th>';
       echo '</tr>';
                        
                    $lista = $funcionarioController->listarFuncionarios();
                    $iteratorColor = 0;
                    
                    while ($row = mysqli_fetch_array($lista)) {
                    
                   $iteratorColor = $iteratorColor + 1;     
                    
                   if($iteratorColor%2 == 0){
                    echo '<tr>';
                   }
                   else{
                       echo '<tr bgcolor = "778899">';
                   }
                        echo '<td>';
                            echo $row['NOME'];
                        echo '</td>';
                        
                        echo '<td>';
                            echo $row['CPF'];
                        echo '</td>';    
                            
                      echo '<td>';
                            echo $row['SALARIO'];
                        echo '</td>';
                    }
          
   echo '</table>';
   
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