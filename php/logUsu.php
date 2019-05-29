<?php
    

    include_once 'connectBd.php';

    class Login{

        private $login;
        private $senha;

        function confLogin($login, $senha){

            session_start();

            $conBd = new BDCon;
            $status = $conBd->conectar('arena') or die (header('Location:../paginas/paginas_alertas/alertaBD.html'));

            $this->login = $login;
            $this->senha = md5($senha);

            $query = "SELECT nome_usu, login_usu, email_usu FROM usuario WHERE nome_usu = '$login' AND senha = '$this->senha';";

            $dados = mysqli_query($status, $query) or die ("falha ao consultar: ".mysqli_error($status));

            if (mysqli_num_rows($dados) == 0){
                mysqli_close($status);
                echo 'Login ou senha incorreto';
                //header('Location:../index.html');
            };

            //recebe retorno do banco e guarda em variaveis de sessão
            list($nome, $login, $email) = mysqli_fetch_row($dados);
            $_SESSION['nome'] = $nome;
            $_SESSION['login'] = $login;
            $_SESSION['email'] = $email;

            mysqli_close($status);
            header('Location:../paginas/principal.php');
        }
    }
?>