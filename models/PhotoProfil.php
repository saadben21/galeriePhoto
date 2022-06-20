<?php
class PhotoProfile
{
    private $active;
    private $url;
    private $date;
    private $numUtilisateur;
     public function __construct($pActive, $pUrl, $pDate, $pNumUtilisateur)
    {
        $this->active = $pActive;
        $this->url = $pUrl;
        $this->date = $pDate;
        $this->numUtilisateur = $pNumUtilisateur;
    }
    public function getActive()
    {
        return $this->active;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getNumUtilisateur()
    {
        return $this->numUtilisateur;
    }
    public function setActive($pActive)
    {
        $this->active = $pActive;
    }
    public function setUrl($pUrl)
    {
        $this->url = $pUrl;
    }

    public function setDate($pDate)
    {
        $this->date = $pDate;
    }
    public function setNumUtilisateur($pNumUtilisateur)
    {
        $this->numUtilisateur = $pNumUtilisateur;
    }
    

}
?>