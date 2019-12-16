<?php

include_once("api.php");


function firstDay(&$dayWeather, &$city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol, &$hour, &$hourTemp){

$temperatura = null;

for($i = 0; $i <= 23; $i++){
   if($hour[$i] >= $localinfo[0] && $hour[$i-1] < $localinfo[0]){
     $temperatura = $hourTemp[$i-1];
  }
}


  echo   '<p class="c-white f-size30 upcase">'.$city[0].'</p>      
          <img src="img/weather/white/'.$dayWeather[0].'.svg" alt="img temp">
          <p class="c-white f-size105">'.$temperatura.'°</p>
          <p class="c-white f-size30">'.$dayWeatherDesc[0].'</p>
          <img src="img/wind/'.$dayWindSymbol[0].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size25">'.$dayWind[0].' km/h</p>
          <br>
          <p class="c-white f-size15 upcase text-center">Última actualización : '.$localinfo[0].'</p>

          ';
}

function dayHistory(&$day, &$dayWeather, &$city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol){
  for($i = 0; $i < 5; $i++){
    if($i == 0){
    echo '<div class="col-md-2 text-center bg-darkblue ptopup">
          <p class="c-white f-size25 upcase ">HOY</p>
          <img src="img/weather/white/'.$dayWeather[0].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size20">'.$dayTempmin[0].'° min / '.$dayTempmax[0].'° max</p>
          <img src="img/wind/'.$dayWindSymbol[0].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size20">'.$dayWind[$i].' km/h</p>
          </div>';
    }else{

    echo '<div class="col-md-2 text-center ptopupother">
          <p class="c-white f-size25 upcase ">'.$day[$i].'</p>
          <img src="img/weather/white/'.$dayWeather[$i].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size20">'.$dayTempmin[$i].'° min / '.$dayTempmax[$i].'° max</p>
          <img src="img/wind/'.$dayWindSymbol[$i].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size20">'.$dayWind[$i].' km/h</p>
          </div>';
    }
  }
}

function hourHistory(&$hour, &$hourTemp, &$hourSymnbol, &$hourWind, &$hourWindSymbol, &$hourSymnbolDesc, &$city){
  date_default_timezone_set('Europe/Madrid');
  $fecha = date("d/m/Y");
  echo '<p class="c-black f-size30 text-center-xs">El Tiempo en '.$city[0].' hoy día '.$fecha.'.</p>';

  for($i = 0; $i < 24; $i++){
    echo ' <hr class="hr-gray">
            <div class="row">
              <div class="col-md-2 text-center-xs">
                <p class="f-size20">'.$hour[$i].'</p>
              </div>
              <div class="col-md-2 text-center-xs">
                <img src="img/weather/color/'.$hourSymnbol[$i].'.svg" alt="img temp" width="33" height="33" style="margin-top: -7px;">
              </div>
              <div class="col-md-5 text-center-xs">
                <p class="f-size20 f-bold f-left">'.$hourTemp[$i].'°</p>
                <p class="f-size20 f-left p-left">'.$hourSymnbolDesc[$i].'</p>
              </div>
              <div class="col-md-3 text-center-xs">
                <img src="img/wind/'.$hourWindSymbol[$i].'.png" alt="img temp" class="f-left">
                <p class="f-size20 f-left">'.$hourWind[$i].' km/h</p>
              </div>
             </div>';
  }
}



?>