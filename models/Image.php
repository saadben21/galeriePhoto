<?php
class Image
{
    private $url;
    private $descriptions;
    private $date;
    function __construct($pUrl, $pDescriptions, $pDate)
    {
        $this->url = $pUrl;
        $this->descriptions = $pDescriptions;
        $this->date = $pDate;
    }
}
?>