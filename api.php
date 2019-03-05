<?php
$day = [];
$dayWeather = [];
$dayTempmin = [];
$dayTempax = [];
$dayWind = [];

$hour = [];
$hourTemp = [];
$hourSymnbol = [];
$hourWind = [];
$houHumidity = [];

$url = "http://api.tiempo.com/index.php?api_lang=es&localidad=3776&affiliate_id=zh7hawv169fw&v=2.0&h=1";

$xml=simplexml_load_file($url) or die("Error: Cannot create object");
//INFO 5 DAYS
for($i = 0; $i < 5; $i++){
  $day[$i] = htmlentities($xml->location->day[$i]->attributes()->name,ENT_COMPAT,'UTF-8');
  $dayWeather[$i] = htmlentities($xml->location->day[$i]->symbol->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayTempmin[$i] = htmlentities($xml->location->day[$i]->tempmin->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayTempax[$i] = htmlentities($xml->location->day[$i]->tempmax->attributes()->value,ENT_COMPAT,'UTF-8');
  $dayWind[$i] = htmlentities($xml->location->day[$i]->wind->attributes()->value,ENT_COMPAT,'UTF-8');
  
}

//INFO 24HOURS - SAME DAY
for($k = 0; $k < 24; $k++){
  $hour[$k] = htmlentities($xml->location->day->hour[$k]->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourTemp[$k] = htmlentities($xml->location->day->hour[$k]->temp->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourSymnbol[$k] = htmlentities($xml->location->day->hour[$k]->symbol->attributes()->value,ENT_COMPAT,'UTF-8');
  $hourWind[$k] = htmlentities($xml->location->day->hour[$k]->wind->attributes()->value,ENT_COMPAT,'UTF-8');
  $houHumidity[$k] = htmlentities($xml->location->day->hour[$k]->humidity->attributes()->value,ENT_COMPAT,'UTF-8');
}





?>