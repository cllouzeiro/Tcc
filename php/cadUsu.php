<?php
    include_once 'connectBd.php';

    final class DadosUsu{

        //recebimento de valores do formulário
        private $nome;
        private $login;
        private $email;
        private $senha;
        private $data_masc;
        private $tipo;

        //Função de teste para login
        function testLogin($login){

            $this->login = $login;

            //teste de comparação com login
            $querySelect = $conn->prepare("SELECT login_usu FROM usuario WHERE login_usu = :login_usu;");

            $querySelect->bindParam(':login_usu', $this->login);

            $querySelect->execute();

            $selectRows = $querySelect->rowCount();

            if ($selectRows != 0){
                return FALSE;
            }

            return TRUE;
        }//fim de função testLogin

        //função para inserir dados no banco
        function inseriDados($nome, $login, $data_nasc, $email, $senha, $tipo){

            $this->nome = $nome;
            $this->login = $login;
            $this->data_nasc = $data_nasc;
            $this->email = $email;
            $this->senha = md5($senha);
            $this->tipo = $tipo;

            //Comando para inserção de dados
            $queryInsert = $conn->prepare("INSERT INTO usuario (id_usu, nome_usu, login_usu, nasc_usu, email_usu, senha, tipo_usu) VALUES (NULL, :nome, :login, :data_nasc, :email, :senha, :tipo);");
            $queryInsert->bindParam(':nome', $this->nome);
            $queryInsert->bindParam(':login', $this->login);
            $queryInsert->bindParam(':data_nasc', $this->dara_nasc);
            $queryInsert->bindParam(':email', $this->email);
            $queryInsert->bindParam(':senha', $this->senha);
            $queryInsert->bindParam(':tipo', $this->tipo);

            //Direciona a pagina de confirmação
            if ($queryInsert-> execute()) {
                header('Location:../paginas/paginas_alertas/confBD.html');
            }   
        }//fim de função inserirDados
    }//fim de classe
?>
