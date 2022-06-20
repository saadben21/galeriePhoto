<?php
require_once 'c:/wamp64/www/uploadfichier/controllers/controllers.php';
if((!isset($_REQUEST['command']))
||
($_REQUEST['command']=='homepage'))
{
 afficherHomePage();
    
}
?>