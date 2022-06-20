<?php
require_once 'ImageData.php';
require_once 'PhotoData.php';
require_once 'UtilisateurData.php';

function pdo_connect()
{
    $db_name = "web_image";
    $db_user = "root";
    $db_pass = "";
    $db_host = "localhost";
    try{
        return PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    }catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
    }
?>