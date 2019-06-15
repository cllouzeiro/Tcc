<?php
	if(!session_start()){
		session_start();
	}

	require_once 'connectBd.php';

	$conect = new BDcon;
	$conn = $conect->conectar();

	$materia = $_POST['materia'];
	$area = $_POST['area'];

	$sqlInsert = "INSERT INTO materias VALUES (NULL, '$materia', '$area')";

	$selectRows = mysqli_query($conn, $sqlInsert) or die ("falha na consulta: ". mysqli_error($conn));

	if ($selectRows){
        mysqli_close($conn);
        $_SESSION['MENSAGEM'] = 'Cadastro Realizado com sucesso!';
        header('Location:../paginas/cadastroMateria.php');
    }
?>