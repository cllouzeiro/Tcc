<?php
	if($_SESSION["login"]==0){
		header('Location:../index.html');
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arena Academy</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../css/cssPrincipal.css">
</head>
<body>
	<main>
		<header>
			
			<nav class="super">
				<ul id="sup-left">
					<li>Home</li>
					<li>Voltar</li>
				</ul>
				<ul id="sup-right">
					<li></li>
					<li>FACEBOOK</li>
					<li>LINKEDIN</li>
				</ul>
			</nav>			
			<h1>Arena Academy</h1>
		</header>
		<nav id="menu-princ">
			
		</nav>
		<div id="content">
			<?php
				session_start();
				echo $_SESSION['nome'];?>
		</div>
		<div id="options">
			
		</div>
		<footer>
			
		</footer>
	</main>
</body>
</html>
