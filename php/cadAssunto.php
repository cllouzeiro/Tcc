<?php

	session_start();

	include_once 'connectBd.php';


	try{
		$id_mate = intval($_POST['materia']);
		$assunto = $_POST['assunto'];

		$sqlInsert = $conn->prepare('INSERT INTO assuntos (fk_id_mate, id_assunto, nome_assunt) VALUES (:id_mate, NULL, :assunto)');
		$sqlInsert->bindParam(':id_mate', $id_mate);
		$sqlInsert->bindParam(':assunto', $assunto);

		$sqlInsert->execute();
	}catch(PDOEXception $e){
		echo 'erro: '.$e->getMessage();
		echo '<br><br>'.$id_mate.': '.gettype(intval($id_mate));
	}

	$_SESSION['MENSAGEM'] = 'Dados inseridos com sucesso!';
	header('Location:../paginas/cadastroAssunto.php');
?>