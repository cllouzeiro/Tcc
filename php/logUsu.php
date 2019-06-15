<?php
    session_start();

    include_once 'connectBd.php';

    class Login{

        private $login;
        private $senha;

        function confLogin($login, $senha){

            $this->login = $login;
            $this->senha = md5($senha);

            $query = $conn->prepare("SELECT nome_usu, login_usu, email_usu, tipo_usu FROM usuario WHERE login_usu = :login AND senha = :senha;)";
            $query->bindParam(':login', $this->login);
            $query->bindParam(':senha', $this->senha);

            $query->execute();

            $rows = $query->rowCount();

            if ($rows != 1){
                echo 'Login ou senha incorreto';
                $_SESSION['status'] = 0;
            }else{

                //recebe retorno do banco e guarda em variaveis de sessão
                $list = $query->fecth(PDO::FETCH_OBJ);
                
                $_SESSION['nome'] = $list->nome_usu;
                $_SESSION['login'] = $list->login_usu;
                $_SESSION['email'] = $list->email_usu;
                $_SESSION['tipó'] = $list->tipo_usu;
                $_SESSION['status'] = 1;

                mysqli_close($status);
                header('Location:../paginas/principal.php');
            }
        }
    }
?>
