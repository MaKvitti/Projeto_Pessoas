<?php
       // Página destinada especificamente para a conexão ao banco de dados.

        class db {
            private $host = 'localhost';
            private $username = 'root';
            private $password = '';
            private $database = 'dadospessoas';


            public function mysqlConnect()
            {
                //Variável receberá o identifidor de conexão ao banco de dados.
                $con =  mysqli_connect($this->host,$this->username,$this->password,$this->database);

                //Define o conjunto de caracteres.
                mysqli_set_charset($con, 'utf8');

                //Teste para verificar se a conexão ao banco de dados foi executada de forma correta.
                if(mysqli_connect_errno())
                {
                    echo 'Erro ao tentar se conectar ao Banco de Dado MySQL: '.mysqli_connect_error();
                }

                return $con;
            }


        }


?>