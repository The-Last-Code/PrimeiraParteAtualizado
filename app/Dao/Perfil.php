<?php

     include ('../Conection/Conn.php');

    class ClientModel extends Conn
    {
        private $table2;

        function __construct()
        {
            parent::__construct();
            $this->table2 = 'cientista';
        }
        
        function getAllPerfil()
        {
            $sqlSelect = $this->pdo->query("SELECT nom_cientista FROM $this->table2
            WHERE id_cientista = (SELECT MAX(id_cientista) FROM $this->table2)");
            $resultQuery = $sqlSelect->fetchAll();
            return $resultQuery;
        }
    }
?>