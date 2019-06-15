<?php
	include_once 'connectBd.php';

	$pergt = $_POST['enunciado'];
	$resp1 = $_POST['resp1'];
	$resp2 = $_POST['resp2'];
	$resp3 = $_POST['resp3'];
	$resp4 = $_POST['resp4'];
	$resp5 = $_POST['resp5'];

	$conBd = new BDcon;
	$status = $conBd->conectar() or die (header('Location:../paginas/paginas_alertas/alertaBD.html'));
	echo "";
	$queryInsert = 'INSERT INTO perg_multi (titulo, pergunta, resp1, resp2, resp3, resp4, resp5);';

	if(mysqli_query($status, $queryInsert)){
		mysqli_close();
		header('Location:../paginas/paginas_alertas/confrmInsert.html');
	}else{
		echo "Erro de Inserção: ".mysql_error($status);
		mysqli_close();
	}
 ?>