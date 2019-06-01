<?php
	session_start();
	if($_SESSION['status'] != 1){
		header('Location: ../index.html');
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
	<header>
		<nav class="super">
			<ul id="sup-left" class="super">
				<li>Home</li>
			</ul>
			<ul id="sup-right" class="super">
				<?php
						echo $_SESSION['nome'];
				?>
			</ul>
		</nav>			
		<h1>Arena Academy</h1>
	</header>
	<main>
		<div id="meio_content">
			<div id="options">
				
			</div>
			<div id="content">
				
			</div>
		</div>
		<footer>
			
		</footer>
	</main>
</body>
</html>
