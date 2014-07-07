<!DOCTYPE html> 
<html lang="en"> 
<head> 
<meta charset="utf-8"> 
<title>Lista de funcionario</title> 
<script src="js/jquery.min.js"></script>
<link href="css/bootstrap-combined.min.css" rel="stylesheet"> 
<script src="css/bootstrapCadastro.min.js"></script>
</head>
<body>
<div class="container">
<h4>Funcionários cadastrados</h4>
	<!-- twitter content -->
	<div id="form-content" class="modal hide fade in" style="display: none; ">
	        <div class="modal-header">
	              <a class="close" data-dismiss="modal">×</a>
	              <h3>Cadastrar</h3>
	        </div>
		<div>
			<form class="contact">
			<fieldset>
		         <div class="modal-body">
		        	 <ul class="nav nav-list">
				<li class="nav-header">Nome</li>
				<li><input class="input-xlarge" value=" " type="text" name="name"></li>
				<li class="nav-header">CPF</li>
				<li><input class="input-xlarge" value=" " type="text" name="cpf"></li>
				<li class="nav-header">Sexo</li>
				<li><input class="input-xlarge" value=" " type="text" name="sexo"></li>
				<li class="nav-header">Nascimento</li>
				<li><input class="input-xlarge" value=" " type="text" name="nascimento"></li>
				<li class="nav-header">Salário</li>
				<li><input class="input-xlarge" value=" " type="text" name="salario"></li>
				<li class="nav-header">Carteira de trabalho</li>
				<li><input class="input-xlarge" value=" " type="text" name="carteira"></li>
                                 </ul> 
		        </div>
			</fieldset>
			</form>
		</div>
	     <div class="modal-footer">
	         <button class="btn btn-success" data-dismiss="modal" id="submit">OK</button>
	         <a href="#" class="btn" >FECHAR</a>
  		</div>
	</div>

<div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary">Novo funcionário</a></p></div>
 </div>
<script>
 $(function() {
	$("button#submit").click(function(){
		   	$.ajax({
    		   	type: "POST",
			//url: "process.php",
			data: $('form.contact').serialize(),
        		success: function(msg){
 	          		$("#thanks").html(msg),
 		        	$("#form-content").modal('hide');	
 		        },
			error: function(){
				alert("failure");
				}
      			});
	});
});
</script>
</body>
</html>

<?php

require('../app/controller/FuncionarioController.php');
require('../app/lib/ConectionFactory.php');
require('../app/dao/FuncionarioDao.php');

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
 
