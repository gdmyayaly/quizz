<?php
    $donner=$_GET['donner'];
    $server="localhost";
    $login="root";
    $pass="welcome";
    $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $req="SELECT * FROM `alluser`";
        $select=$connexion->query($req);
        $result=$select->fetchAll();
        $visiteur=$result[0]['visiteur'];
        $total=$result[0]['total'];
        $inscrit=$result[0]['inscrit'];
        $michemin=$result[0]['michemin'];
        $tab=['visiteur'=>$visiteur,'inscrit'=>$inscrit,'michemin'=>$michemin,'total'=>$total];
        echo json_encode($tab);
    }   catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
?>