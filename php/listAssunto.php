<?php
	include_once 'connectBd.php';
	try{
		$sqlSelect = 'SELECT id_mate, nome_mate FROM materias';
		$exibe = $conn->prepare($sqlSelect);
		$exibe->execute();
		
		while ($row = $exibe->fetch(PDO::FETCH_ASSOC)) {
			echo "<option value=\"{$row['id_mate']}\">{$row['nome_mate']}</option>";
		}
	}catch(PDOException $e){
		echo 'error: '.$e->getMessage();
	}
?>