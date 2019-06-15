<?php
        /*
        private $ht = 'localhost';
        
        //USUARIO DE CONEXAO LOCAL
        private $us = 'phpmyadmin';

        //USUARIO DE CONEXAO ONLINE
        //private $us = 'id9584311_root';
        
        private $pd = '30093020';
        private $bc = 'id9584311_arena';

        function conectar(){
            return mysqli_connect($this->ht, $this->us, $this->pd, $this->bc);
        }
        */

        $conn = new PDO ('mysql:host=localhost;dbname=id9584311_arena', 'phpmyadmin', '30093020');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
