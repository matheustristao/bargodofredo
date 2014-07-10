<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
 
<head profile="http://gmpg.org/xfn/11"> 
	<title>Cadastrar Funcionário</title> 
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> 
        <link rel="stylesheet" href="css/formulario.css" type="text/css" media="all" />  
</head> 
<body>

<h1> CADASTRO DE FUNCIONARIO </h1>
    
<form class="form">

	<p class="name">
		<input type="text" name="name" id="name" />
		<label for="name">Nome</label>
	</p>

	<p class="cpf">
		<input type="text" name="cpf" id="cpf" />
		<label for="cpf">CPF</label>
	</p>

	<p class="sexo">
		<input type="text" name="sexo" id="sexo" />
		<label for="sexo">Sexo</label>
	</p>

        <p class="ano_nascimento">
		<input type="text" name="ano_nascimento" id="ano_nascimento" />
		<label for="sexo">Ano de nascimento</label>
	</p>
        
          <p class="salario">
		<input type="text" name="salario" id="salario" />
		<label for="sexo"> Salario </label>
	</p>
    
          <p class="carteira_trabalho">
		<input type="text" name="carteira_trabalho" id="carteira_trabalho" />
		<label for="sexo">Carteira de trabalho</label>
	</p>
    
    
	<p class="comentario">
		<textarea name="text"></textarea>
                <label for="comentario"> Comentario</label>
	</p>

	<p class="submit">
		<input type="submit" value="SALVAR" />
                <input type="button" onclick="window.location = 'ListaFuncionario.php'" value="Voltar" />
        </p>
</form>


</body>
</html>

<?php


