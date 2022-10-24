<?php
require_once '../Conection/Conn.php';

    class Login{
        
        public $msgErro = "";   

        public function __construct(){
           
        }
                                              
        public function Login($cpf_cientista, $snh_cientista)
        {

            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);
            /* verifica se o email e senha ja estao encontrados */
           
            $sql = $pdo->prepare("SELECT *FROM cientista WHERE
            cpf_cientista = :b AND snh_cientista = :g");
            $sql->bindValue(":b", $cpf_cientista);
            $sql->bindValue(":g", $snh_cientista);
            $sql->execute();

            // $sql_id = $pdo->prepare(("SELECT id_cientista FROM cientista WHERE cpf_cientista = :b; "));
            // $sql_id->bindValue(":b", $cpf_cientista);
            // $sql_id->execute();

            // $id = $sql_id->fetch(PDO::FETCH_ASSOC);
            // //echo array_search("id_cientista", array_keys($id_cientista));exit;
            
            // ksort($id);
            // foreach ($id as $chave => $value)
            // {
            //    $id_cientista = $value;
            // }



            if($sql->rowCount() > 0)
            { 
                return true; 
            }
            else
            {
                return false; 
            }
        }
    }

?>