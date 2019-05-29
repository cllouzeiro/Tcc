<?php
	session_start();
    include_once 'logUsu.php';

    $login = $_POST['login'];
    $senha = $_POST['senha'];

    $logUsu = new Login;
    $logUsu->confLogin($login, $senha);
?>