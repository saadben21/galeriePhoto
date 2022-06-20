<?php
class Utilisateur
{
    private $pseudo;
    private $email;
    private $password;
     public function __construct($pPseudo, $pEmail, $pPassword)
    {
        $this->pseudo = $pPseudo;
        $this->email = $pEmail;
        $this->password = $pPassword;
    }
    public function getPseudo()
    {
        return $this->pseudo;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function setPseudo($pPseudo)
    {
        $this->pseudo = $pPseudo;
    }
    public function setEmail($pEmail)
    {
        $this->email = $pEmail;
    }
    public function setPassword($pPassword)
    {
        $this->password = $pPassword;
    }
    

}
?>