<?php

require_once '../Conection/Conn.php';

    class CadastraPerfil{

        public function setCadastroPerfil($nom_titulacao, $nom_area_atuacao, $end_rede_social, $dti_formacao,
        $dtt_formacao, $ddd_telefone, $num_telefone)
        {
            $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASENAME,USER,PASSWORD);

                $sql = $pdo->prepare("INSERT INTO area_atuacao (nom_area_atuacao) 
                VALUES (:a)");

                $sql1 = $pdo->prepare("INSERT INTO formacao (dti_formacao, dtt_formacao) 
                VALUES (:b, :c)");

                $sql2 = $pdo->prepare("INSERT INTO rede_sociais (end_rede_social) 
                VALUES (:d)");

                $sql3 = $pdo->prepare("INSERT INTO telefone (ddd_telefone, num_telefone) 
                VALUES (:e, :f)");

                $sql4 = $pdo->prepare("INSERT INTO titulacao (nom_titulacao) 
                VALUES (:g)");

                $sql->bindValue(":a", $nom_area_atuacao);
                $sql1->bindValue(":b", $dti_formacao);
                $sql1->bindValue(":c", $dtt_formacao);
                $sql2->bindValue(":d", $end_rede_social);
                $sql3->bindValue(":e", $ddd_telefone);
                $sql3->bindValue(":f", $num_telefone);
                $sql4->bindValue(":g", $nom_titulacao);
                $sql->execute();
                $sql1->execute();
                $sql2->execute();
                $sql3->execute();
                $sql4->execute();
              
                return true;
            }
}
    
?>