<?php
	include_once 'connectBd.php';
	try{
		$sqlSelect = 'SELECT id_assunto, nome_assunt FROM assuntos';
		$exibe = $conn->prepare($sqlSelect);
		$exibe->execute();
		
		while ($row = $exibe->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value=\"{$row['id_assunto']}\">{$row['nome_assunt']}</option>";
		}
	}catch(PDOException $e){
		echo 'error: '.$e->getMessage();
	}
?>