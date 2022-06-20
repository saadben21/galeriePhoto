<?php
require_once 'C:/wamp64/www/uploadfichier/models/Utilisateur.php';
class UtilisateurData {
    public static function create($pdo,$utilisateur)
    {
        $sql ="INSERT INTO Utilisateur (`pseudo`,`email`,`password` ) VALUES ('$utilisateur->pseudo','$utilisateur->email','$utilisateur->password')";
        echo "<br>UtilisateurData::create - sql =$sql<br>";
        try{
            $pdo->exec($sql);
            return true;
        }catch(PDOException $e){
           return false;
        }
    }
    public static function checkPassword($pdo,$email,$password):bool {
        return true;
    }
}
?>