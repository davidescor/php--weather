<?php

//INDICAMOS LA RUTA DEL FICHERO XML QUE HEMOS OBTENIDO CON LA API//
//Para que esto funcione con sus ciudades, debe cambiar el valor del file e indicar la ruta URL
// de la localidad obtenida a traves de la API de tiempo
$file='http://api.tiempo.com/index.php?api_lang=es&localidad=3776&affiliate_id=zh7hawv169fw';

if($xml = simplexml_load_file($file)){ //ABRIMOS EL FICHERO CON LA LIBRERIA SIPLEXML_LOAD_FILE
    //LEEMOS LOS DATOS QUE NECESITAMOS//
    $i=0;
    $url= $xml->location->interesting->url;
    $array=explode('-', $url);  
    $lugar = $xml->location->attributes();
    $city = explode('[', $lugar);
  
    // En este ejemplo, para obtener los iconos del tiempo y del viento usaremos el atributo id del nodo forecast correspondiente
    // y obtenemos de esta forma el valor númerico que corresponde a cada icono
    foreach ($xml->location->var as $var) {
      switch ($i) {
        case 0: 
          //LEEMOS LA TEMPERATURA MINIMA//
          $TempMin = htmlentities($xml->location->var[0]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
        break;
        case 1:
          //LEEMOS LA TEMPERATURA MAXIMA//
          $TempMax = htmlentities($xml->location->var[1]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
        break;
        case 2:
          //LEEMOS EL ICONO DEL VIENTO//
          // En este ejemplo, usaremos los valores númericos de los iconos          
          $Viento = htmlentities($xml->location->var[2]->data->forecast[0]->attributes()->id,ENT_COMPAT,'UTF-8');
          $Viento_desc= htmlentities($xml->location->var[2]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
        break;
        case 3:
          //LEEMOS EL ICONO DEL TIEMPO//
          // En este ejemplo, usaremos los valores númericos de los iconos        
          $Simbolo = htmlentities($xml->location->var[3]->data->forecast[0]->attributes()->id,ENT_COMPAT,'UTF-8');
          $Simbolo_desc= htmlentities($xml->location->var[2]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
        break;
        case 4: 
          //LEEMOS EL DIA DE LA SEMANA//
          $Dia = htmlentities($xml->location->var[4]->data->forecast[0]->attributes()->value,ENT_COMPAT,'UTF-8');
        break;
      }
      $i++;
    }
} //TERMINAMOS LA LECTURA DEL FICHERO, TENEMOS LOS DATOS ACUMULADOS EN LOS ARRAYS TEMPERATURAMINIMA, TEMPERATURAMAXIMA, DIASEMANA
else{

  echo "No se pudo leer el fichero";
  exit;
}