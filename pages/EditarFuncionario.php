<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
<head profile="http://gmpg.org/xfn/11"> 
	<title>Editar Funcionário</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="stylesheet" href="css/formulario.css" type="text/css" media="all" />  
</head> 
<body>

<h1> EDITAR FUNCIONÁRIO </h1>
    
<form class="form" method="POST">
    
         <p class="submit">
		<input type="submit"  value="DELETAR FUNCIONARIO" />
         </p>

	<p class="name">
		<input type="text" name="name" id="name" value = "nome" />
		<label for="name">Nome</label>
	</p>

	<p class="cpf">
		<input type="text" name="cpf" id="cpf" />
		<label for="cpf">CPF</label>
	</p>

    
        <p class="ano_nascimento">
		<input type="text" name="ano_nascimento" id="ano_nascimento" />
		<label for="ano_nascimento">Data de nascimento (Ex: 1990-04-17)</label>
	</p>
        
          <p class="salario">
		<input type="text" name="salario" id="salario" />
		<label for="sexo"> Salario </label>
	</p>
    
          <p class="carteira_trabalho">
		<input type="text" name="carteira_trabalho" id="carteira_trabalho" />
		<label for="sexo">Carteira de trabalho</label>
	</p>
    
        <p class="sexo">
               <select name = "sexo" id = "sexo">
                     <option value = "M">  --  </option>
                     <option value = "M"> Masculino </option>
                     <option value = "F"> Feminino </option>
		</select>
            <label for="sexo">Sexo</label>
	</p>

	<p class="submit">
		<input type="submit"  value="SALVAR" />
                <input type="button" onclick="window.location = 'ListaFuncionario.php'" value="Voltar" />
        </p>
</form>


</body>
</html>

<?php

require('../app/controller/FuncionarioController.php');
require('../app/lib/ConectionFactory.php');
require('../app/dao/FuncionarioDao.php');
require('../app/model/Funcionario.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Resgatando os dados do formulário e armazenando numa variável
    $p = $_POST;
    
    $attAdm = array(0 => $p['name'], 1 => $p['cpf'], 2 => $p['sexo'], 3 => $p['ano_nascimento'], 4=> $p['salario'],
        5 => $p['carteira_trabalho']);

    if (empty($attAdm[0])) {
        print '<script type="text/javascript">';
        print 'alert("nome do funcionário deve ser preenchido")';
        print '</script>';
    } else if (empty($attAdm[1])) {
        print '<script type="text/javascript">';
        print 'alert("cpf deve ser preenchida")';
        print '</script>';
    } else {
   
           $funcionario = new FuncionarioController();
           $funcionario->atualizarFuncionario($attAdm[0],$attAdm[1],$attAdm[2],$attAdm[3],$attAdm[4],$attAdm[5]);
    }

}
