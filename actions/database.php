<?php
try{
    // session_start();
    $bdd = new PDO('mysql:host=localhost;dbname=projetfinal;charset=utf8;', 'root', 'Nayef2021@');
}catch(Exception $e){
    die('Une erreur a été trouvée : ' . $e->getMessage());
}