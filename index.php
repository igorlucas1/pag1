<?php
session_start();
session_destroy();
?>

<!DOCTYPE html>
<html > 
	<head>
	  <meta charset="UTF-8">
	  <title>Formulário de Login</title>
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	  <link rel="stylesheet" href="css/estilo.css">
	</head>

	<body>
		<div class="login">
			<h1>Login de Acesso</h1>
			<form method="post" action="acesso.php">
		    	<input type="text" name="usuario" placeholder="Usuário" required="required" autocomplete="off" />
		        <input type="password" name="senha" placeholder="Senha" required="required" />
	        	<button type="submit" class="btn btn-primary btn-block btn-large">Entrar</button>
	    	</form>
	 	</div>
	</body>

</html>
