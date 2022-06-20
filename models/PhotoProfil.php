<?php
class PhotoProfile
{
    private $active;
    private $url;
    private $date;
    private $numUtilisateur;
    function __construct($pActive, $pUrl, $pDate, $pNumUtilisateur)
    {
        $this->active = $pActive;
        $this->url = $pUrl;
        $this->date = $pDate;
        $this->numUtilisateur = $pNumUtilisateur;
    }

}
?>