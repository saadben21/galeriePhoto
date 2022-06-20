<?php
class Utilisateur
{
    private $pseudo;
    private $email;
    private $password;
    function __construct($pPseudo, $pEmail, $pPassword)
    {
        $this->pseudo = $pPseudo;
        $this->email = $pEmail;
        $this->password = $pPassword;
    }
}
?>