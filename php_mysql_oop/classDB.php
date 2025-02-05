<?php
    //error_reporting(E_ALL ^ E_WARNING); // sopprime errori di warning
    class DB {
	    private $host;
	    private $user;
	    private $password;
        private $dbname;

        function __construct() {
            $this->host = "localhost";
            $this->user = "root";
            $this->password = "";
            $this->dbname = "chitarre";
        }

        protected function connect() {
            $connect = new mysqli($this->host, $this->user, $this->password);

            if ($connect->connect_errno) {
                exit("Impossibile connettersi all'host: {$connect->connect_error}");
            }
            // per compatibilità con php 8 ci vuole try catch per testare se presente DB
            try {
                $connect->select_db($this->dbname);
            }
            catch (Exception){
                $this->createDB($connect);
                $this->popolaDB($connect);
                $connect->select_db($this->dbname);
            }
            return $connect;
        }

        protected function createDB($connect) {
            $comandoCreazioneDB = "CREATE DATABASE $this->dbname DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci";

            if($connect->query($comandoCreazioneDB) === false) {
                echo "errore nella creazione del database";
                exit;
            }

            $connect->select_db($this->dbname);

            $comandoCreazioneTabellaMarche = "CREATE TABLE marche (cod int NOT NULL, marca varchar(20), paese varchar(20), PRIMARY KEY(cod));";

            if($connect->query($comandoCreazioneTabellaMarche) === false) {
                echo "errore creazione tabella marche";
                exit;
            }

            $comandoCreazioneTabellaModelli = "CREATE TABLE modelli "
            . "(cod int NOT NULL, modello varchar(20), codMarca int not null, "
            . "PRIMARY KEY (cod), "
            . "FOREIGN KEY fk_modelli_marche( codMarca ) "
            . "REFERENCES marche(cod));";

            if($connect->query($comandoCreazioneTabellaModelli) === false) {
                echo "errore creazione tabella modelli";
                exit;
            }
        }

        protected function popolaDB($connect) {
            $connect->query("insert into marche values(1, 'Yamaha', 'japan');"); 
            $connect->query("insert into marche values(2, 'Gibson', 'usa');");
            $connect->query("insert into marche values(3, 'Fender', 'usa');");
            $connect->query("insert into marche values(4, 'Ibanez', 'japan');");
            $connect->query("insert into modelli values(1, 'FG830', 1);");
            $connect->query("insert into modelli values(2, 'Les Paul', 2);");
            $connect->query("insert into modelli values(3, 'ES-175', 2);");
            $connect->query("insert into modelli values(4, 'ES-335', 2);");
            $connect->query("insert into modelli values(5, 'Stratocaster', 3);");
            $connect->query("insert into modelli values(6, 'Telecaster', 3);");
            $connect->query("insert into modelli values(7, 'Artstar Series AM153QA', 4);");
        }
    }
?>