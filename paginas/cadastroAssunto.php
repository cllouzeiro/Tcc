<!DOCTYPE html>
<html>
<head>
	<title>Cadastro Assunto</title>
</head>
<body>
	<form action="../php/cadAssunto.php" method="POST">

		<select name="materia">
			<?php

				include_once '../php/listAssunto.php';

			?>
		</select>
		<label for="assunto">Assunto</label>
		<input type="text" name="assunto" id="assunto"><br>
		<input type="submit" value="Gravar">
		<?php 
			session_start();

			if(isset($_SESSION['MENSAGEM'])){
				echo $_SESSION['MENSAGEM'];
				unset($_SESSION['MENSAGEM']);
			}
		?>

	</form>
</body>
</html>