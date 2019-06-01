<?php
    session_start();

    include_once 'connectBd.php';

    class Login{

        private $login;
        private $senha;

        function confLogin($login, $senha){

            $conBd = new BDcon;
            $status = $conBd->conectar() or die (header('Location:../paginas/paginas_alertas/alertaBD.html'));

            $this->login = $login;
            $this->senha = md5($senha);

            $query = "SELECT nome_usu, login_usu, email_usu FROM usuario WHERE login_usu = '$this->login' AND senha = '$this->senha';";
            echo $query;
            $dados = mysqli_query($status, $query);
            $rows = mysqli_num_rows($dados);

            if ($rows != 1){
                mysqli_close($status);
                echo 'Login ou senha incorreto';
                header('Location:../index.html');
            }else{

                //recebe retorno do banco e guarda em variaveis de sessão
                list($nome, $login, $email) = mysqli_fetch_array($dados);
                
                $_SESSION['nome'] = $nome;
                $_SESSION['login'] = $login;
                $_SESSION['email'] = $email;
                $_SESSION['status'] = 1;

                mysqli_close($status);
                header('Location:../paginas/principal.php');
            }
        }
    }
?>
