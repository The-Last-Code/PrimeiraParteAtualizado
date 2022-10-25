<?php

     include ('../Conection/Conn.php');

    class ClientModel extends Conn
    {
        private $table;

        function __construct()
        {
            parent::__construct();
            $this->table = 'projeto';
        }

        function getAll()
        {
            $limite = 5;
            $pg = (isset($_GET['pg'])) ? (int)$_GET['pg'] : 1;
            $inicio = ($pg * $limite) - $limite;
            $anterior=$pg-1;
            $proximo=$pg+1;
            $sql = "SELECT * FROM  $this->table ORDER BY id_projeto DESC LIMIT ".$inicio. ", ". $limite;
            $query = $this->pdo->prepare($sql);
            $query->execute();
            return $query;
            // $sqlSelect = $this->pdo->query("SELECT * FROM $this->table");
            // $resultQuery = $sqlSelect->fetchAll();
        }
    }
?>