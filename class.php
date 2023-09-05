<?php
/*
	Feedkhan Script ver1.0
	created by www.persianscript.ir
	copyright 2014 by PersianScript TM
*/
class RSS{

    public $URL = null;
    public $Title = null;

    public function __construct($Title, $URL) {
        $this->Title = $Title;
        $this->URL = $URL;
    }
}

function page_title($url) {
    $fp = file_get_contents($url);
    if (!$fp) {
        return null;
}
    $res = preg_match("/<title>(.*)<\/title>/siU", $fp, $title_matches);
    if (!$res){
        return null; 
}
    $title = preg_replace('/\s+/', ' ', $title_matches[1]);
    $title = trim($title);
    return $title;
}

function object_2_array($result)
{
    $array = array();
    foreach ($result as $key=>$value)
    {
        if (is_object($value))
        {
            $array[$key]=object_2_array($value);
        }
        if (is_array($value))
        {
            $array[$key]=object_2_array($value);
        }
        else
        {
            $array[$key]=$value;
        }
    }
    return $array;
}  

function retrieve() {

	$persianscriptarz = "http://www.cbi.ir/ExRatesRss.aspx";
     
	$curlObject = curl_init();
    curl_setopt($curlObject,CURLOPT_URL,$persianscriptarz);
    curl_setopt($curlObject,CURLOPT_HEADER,false);
    curl_setopt($curlObject,CURLOPT_RETURNTRANSFER,true);
    $returnYahooWeather = curl_exec($curlObject);
    curl_close($curlObject);
    return $returnYahooWeather;
	
}
?>