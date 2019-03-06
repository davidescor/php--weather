<?php

include_once("api.php");

function firstDay(&$dayWeather, &$city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol){

  echo   '<p class="c-white f-size11 upcase">Inicio &rarr; '.$city[0].'</p>
          <p class="c-white f-size45 upcase">'.$city[0].'</p>          <img src="img/weather/white/'.$dayWeather[0].'.svg" alt="img temp">
          <p class="c-white f-size20">'.$dayWeatherDesc[0].'</p>

          <p class="c-white f-size20">'.$dayTempmin[0].'° min / '.$dayTempmax[0].'° max</p>
          <img src="img/wind/'.$dayWindSymbol[0].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size15">'.$dayWind[0].' km/h</p>
          <p class="c-white f-size11 upcase text-right m-left5">Última actualización : '.$localinfo[0].'</p>

          ';
}

function dayHistory(&$day, &$dayWeather, &$city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol){
  for($i = 0; $i < 5; $i++){
    if($i == 0){
    echo '<div class="col-md-2 text-center bg-darkblue ptopup">
          <p class="c-white f-size20 upcase ">HOY</p>
          <img src="img/weather/white/'.$dayWeather[0].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size15">'.$dayTempmin[0].'° min / '.$dayTempmax[0].'° max</p>
          <img src="img/wind/'.$dayWindSymbol[0].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size15">13 km/h</p>
          </div>';
    }else{

    echo '<div class="col-md-2 text-center ptopup">
          <p class="c-white f-size20 upcase ">'.$day[$i].'</p>
          <img src="img/weather/white/'.$dayWeather[$i].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size15">'.$dayTempmin[$i].'° min / '.$dayTempmax[$i].'° max</p>
          <img src="img/wind/'.$dayWindSymbol[$i].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size15">13 km/h</p>
          </div>';
    }
  }
}




function hourHistory(&$hour, &$hourTemp, &$hourSymnbol, &$hourWind, &$hourWindSymbol, &$hourSymnbolDesc){

  for($i = 0; $i < 24; $i++){
    echo ' <hr class="hr-gray">
            <div class="row">
              <div class="col-md-3">
                <p class="f-size15">'.$hour[$i].'</p>
              </div>
              <div class="col-md-2">
                <img src="img/weather/color/'.$hourSymnbol[$i].'.svg" alt="img temp" width="33" height="33" style="margin-top: -7px;">
              </div>
              <div class="col-md-4">
                <p class="f-size15 f-bold f-left">'.$hourTemp[$i].'°</p>
                <p class="f-size15 f-left p-left">'.$hourSymnbolDesc[$i].'</p>
              </div>
              <div class="col-md-3">
                <img src="img/wind/'.$hourWindSymbol[$i].'.png" alt="img temp" class="f-left">
                <p class="f-size15 f-left">'.$hourWind[$i].' km/h</p>
              </div>
             </div>';
  }
}

?>