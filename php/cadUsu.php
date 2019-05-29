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

            $conBd = new BDcon;
            $status = $conBd->conectar() or die (header('Location:../paginas/paginas_alertas/alertaBD.html'));

            //teste de comparação com login
            $querySelect = "SELECT login_usu FROM usuario WHERE login_usu = '$this->login';";

            $selectRows = mysqli_query($status, $querySelect) or die ("falha na consulta: ". mysqli_error($status));

            if (mysqli_num_rows($selectRows) != 0){
                mysqli_close($status);
                return FALSE;
            }
            mysqli_close($status);
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

            $conBd = new BDcon;
            $status = $conBd->conectar() or die (header('Location:../paginas/paginas_alertas/alertaBD.html'));

            //Comando para inserção de dados
            $queryInsert = "INSERT INTO usuario (id_usu, nome_usu, login_usu, nasc_usu, email_usu, senha, tipo_usu) VALUES (NULL, '$this->nome', '$this->login', '$this->data_nasc', '$this->email','$this->senha', '$this->tipo');";

            $teste = mysqli_query($status, $queryInsert) or die ("falha ao inserir: ".mysqli_error($status));

            //Direciona a pagina de confirmação
            if ($teste) {
                header('Location:../paginas/paginas_alertas/confBD.html');
                mysqli_close($status);
            }   
        }//fim de função inserirDados
    }//fim de classe
?>