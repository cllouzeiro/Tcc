<?php
    include_once 'cadUsu.php';

	$nome_usu = $_POST['nome'];
    $login_usu = $_POST['login'];
    $data_nasc = $_POST['data'];
    $email_usu = $_POST['email'];
    $senha_usu = $_POST['senha'];
    $tipo_usu = $_POST['tipo_usu'];

    $cadUsu = new DadosUsu;

    //teste de login
    $result = $cadUsu->testLogin($login_usu);   

    //teste para inserir dados
    if ($result == TRUE){
    	$cadUsu->inseriDados($nome_usu, $login_usu, $data_nasc, $email_usu, $senha_usu, $tipo_usu);
    }else{
    	header('Location:../paginas/paginas_alertas/alertaLogin.html');
    }
?>