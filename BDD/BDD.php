<?php
$db_name = "web_image";
$db_user = "root";
$db_pass = "";
$db_host = "localhost";
try{
    $pdo = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
}
?>