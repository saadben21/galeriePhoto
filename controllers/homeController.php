<?php
 function afficherHomePage()
{
    // il va falloir détecter si l'utilisateur est connecté ou non
    $connecte = true;
    if($connecte){
        require_once 'C:/wamp64/www/uploadfichier/views/homePage/template_homepage_connected.php';
    }else{
        require_once 'C:/wamp64/www/uploadfichier/views/homePage/template_homepage_non_connected.php';
    }
    
}
?>