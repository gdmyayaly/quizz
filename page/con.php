<?php
    $server="localhost";
    $login="root";
    $pass="1lovem@ty";
    $connexion = new PDO("mysql:host=$server;dbname=grow",$login,$pass);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
