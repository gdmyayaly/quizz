<?php
    $donner=$_GET['donner'];
    $server="localhost";
    $login="root";
    $pass="1lovem@ty";
    $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    try {
        $req="SELECT * FROM `alluser`";
        $select=$connexion->query($req);
        $result=$select->fetchAll();
        $visiteur=$result[0]['visiteur'];
        $online=$result[0]['online'];
        $total=$result[0]['total'];
        $inscrit=$result[0]['inscrit'];
        $michemin=$result[0]['michemin'];
        
        if ($donner=="visiteur") {
            //ici on incrémente les visiteur et le online
            $visiteur=$visiteur+1;
            $online=$online+1;
            $requette="UPDATE `alluser` SET `visiteur` = $visiteur,`online` = $online WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="michemin") {
            //ici on incrémente mi chemin
            $michemin=$michemin+1;
            $requette="UPDATE `alluser` SET `michemin` = $michemin WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="inscrit") {
            //ici on decrement mi chemin et on incrémente
            $michemin=$michemin-1;
            $inscrit=$inscrit+1;
            $requette="UPDATE `alluser` SET `michemin` = $michemin,`inscrit` = $inscrit WHERE `alluser`.`id` = 1;";
        }
        elseif ($donner=="total") {
            $total=$total+1;
            $michemin=$michemin-1;
            $requette="UPDATE `alluser` SET `total` = $total,`michemin` = $michemin WHERE `alluser`.`id` = 1;";
        }
            $insertion-=$connexion->query($requette);
            $a=$insertion->execute();
    }   catch (PDOException $e) {
        echo"Erreur".$e->getMessage();
    }
?>