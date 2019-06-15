<!DOCTYPE html>
<html>
<head>
	<title>Cadastro deMateria</title>
</head>
<body>
	<form action="../php/cadMateria.php" method="POST">
		<label for="materia">Materia</label>
		<input type="text" name="materia" id="materia"><br><br>
		<label for="area">Área de conhecimento</label>
		<select name="area" id="area">
			<option value="exatas">Exatas</option>
			<option value="humanas">Humanas</option>
			<option value="biologicas">Biológicas</option>
			<option value="engenharias">Engenharias</option>
			<option value="saude">Saúde</option>
			<option value="agrarias">Agrárias</option>
			<option value="sociAplica">Sociais Aplicadas</option>
		</select>
		<input type="submit" value="Gravar"><br><br>
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