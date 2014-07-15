<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Godofredo</title>
	
	<!-- Stylesheets -->
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans:400,700' rel='stylesheet'>
	<link rel="stylesheet" href="pages/css/style.css">

	<!-- Optimize for mobile devices -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>  
</head>
<body>
	<!-- HEADER -->
	<div id="header">
		
		<div class="page-full-width cf">

			<a href="#" id="company-branding" class="fr"><img src="pages/images/godofredo.png" alt="Bar Godofredo" /></a>
			
		</div> <!-- end full-width -->	

	</div> <!-- end header -->

	<!-- MAIN CONTENT -->
	<div id="content">
	
		<form action="#" method="POST" id="login-form">
		
			<fieldset>

				<p>
					<label for="login-username">Usuário</label>
					<input type="text" name="login-username" class="round full-width-input" autofocus />
				</p>

				<p>
					<label for="login-password">Senha</label>
                                        <input type="password" name="login-password" class="round full-width-input" autofocus/>
				</p>
                        
                                <button type="submit" class="button round blue image-right ic-right-arrow">ENTRAR</button>
                              
			</fieldset>

		</form>
		
	</div> 

</body>
</html>

<?php
       
require('/app/controller/LoginController.php');
require ('app/model/Administrador.php');
require ('app/dao/AdministradorDAO.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    
    //Resgatando os dados do formulário e armazenando numa variável
    $p = $_POST;
    
    $attAdm = array(0 => $p['login-username'], 1 => $p['login-password']);

    if (empty($attAdm[0])) {
        print '<script type="text/javascript">';
        print 'alert("id do usuário deve ser preenchido")';
        print '</script>';
    } else if (empty($attAdm[1])) {
        print '<script type="text/javascript">';
        print 'alert("senha deve ser preenchida")';
        print '</script>';
    } else {
   
           $session = new LoginController();
           $session->validarLogin($attAdm[0],$attAdm[1]);
    }

}

?>
