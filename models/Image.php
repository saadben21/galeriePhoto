<?php
class Image
{
    private $url;
    private $descriptions;
    private $date;
     public function __construct($pUrl, $pDescriptions, $pDate)
    {
        $this->url = $pUrl;
        $this->descriptions = $pDescriptions;
        $this->date = $pDate;
    }
    public function getUrl()
    {
        return $this->url;
    }
    public function getDescriptions()
    {
        return $this->descriptions;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function setUrl($pUrl)
    {
        $this->url = $pUrl;
    }
    public function setDescriptions($pDescriptions)
    {
        $this->descriptions = $pDescriptions;
    }
    public function setDate($pDate)
    {
        $this->date = $pDate;
    }
    
}

?>