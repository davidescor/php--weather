<?php
include("core/config.php");
include("core/control/control.php");
include("core/api/api.php");

function controlDayNight($localinfo,$background_day_color,$background_night_color,$time_day_control_min,$time_day_control_max,$background_navbar_day_color,$background_navbar_night_color,$timeSet){

  $localTime = date("H:i:s");  

  if($localTime >= $time_day_control_min && $localTime <= $time_day_control_max){
    echo"<script type='text/javascript'>
            document.getElementById('bg-time-navbar').style.background = '".$background_navbar_day_color."';
            document.getElementById('bg-time').style.background = '".$background_day_color."';
         </script>";
  }else{
    echo"<script type='text/javascript'>
          document.getElementById('bg-time-navbar').style.background = '".$background_navbar_night_color."';
          document.getElementById('bg-time').style.background = '".$background_night_color."';
        </script>";
  }

}

function controlDayNightSearch($localinfo,$background_day_color,$background_night_color,$time_day_control_min,$time_day_control_max,$background_navbar_day_color,$background_navbar_night_color){
  $localTime = date("H:i:s"); 

  if($localTime >= $time_day_control_min && $localTime <= $time_day_control_max){
    echo"<script type='text/javascript'>
            document.getElementById('bg-time-navbar').style.background = '".$background_navbar_day_color."';
         </script>";
  }else{
    echo"<script type='text/javascript'>
          document.getElementById('bg-time-navbar').style.background = '".$background_navbar_night_color."';
        </script>";
  }
}

function getTitle(&$get_api_city){

  echo '<title>EL TIEMPO - '.strtoupper($get_api_city[0]).'</title>';

}

function firstDay(&$dayWeather, &$get_api_city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol, &$hour, &$hourTemp,&$level2,&$level3){
 
    $localTime = date("H:i:s"); 

    $show_temperature = getTemperature($localTime, $hourTemp);

    echo   '
          <p class="c-white f-size50 upcase">'.$get_api_city[0].'</p>      
          <p class="c-white f-size15 upcase text-center">'.$level2[0].' - '.$level3[0].'</p>
          <img src="core/design/img/weather/color/'.$dayWeather[0].'.svg" alt="img temp">
          <p class="c-white f-size95">'.$show_temperature.'°</p>
          <p class="c-white f-size25">'.$dayWeatherDesc[0].'</p>
          <p class="c-white f-size15 upcase text-center">Última actualización : '.$localinfo[0].'</p>

          ';
}

function getTemperature($localTime, $hourTemp){
  
  if($localTime >= '00:00' && $localTime <= '00:59'  ){
     return $hourTemp[23];
    }else if($localTime >= '01:00' && $localTime <= '01:59'  ){
     return $hourTemp[0];
    }else if($localTime >= '02:00' && $localTime <= '02:59'  ){
     return $hourTemp[1];
    }else if($localTime >= '03:00' && $localTime <= '03:59'  ){
     return $temperatura = $hourTemp[2];
    }else if($localTime >= '04:00' && $localTime <= '04:59'  ){
     return $temperatura = $hourTemp[3];
    }else if($localTime >= '05:00' && $localTime <= '05:59'  ){
     return $temperatura = $hourTemp[4];
    }else if($localTime >= '06:00' && $localTime <= '06:59'  ){
     return $temperatura = $hourTemp[5];
    }else if($localTime >= '07:00' && $localTime <= '07:59'  ){
     return $temperatura = $hourTemp[6];
    }else if($localTime >= '08:00' && $localTime <= '08:59'  ){
     return $temperatura = $hourTemp[7];
    }else if($localTime >= '09:00' && $localTime <= '09:59'  ){
     return $temperatura = $hourTemp[8];
    }else if($localTime >= '10:00' && $localTime <= '10:59'  ){
     return $temperatura = $hourTemp[9];
    }else if($localTime >= '11:00' && $localTime <= '11:59'  ){
     return $temperatura = $hourTemp[10];
    }else if($localTime >= '12:00' && $localTime <= '12:59'  ){
     return $temperatura = $hourTemp[11];
    }else if($localTime >= '13:00' && $localTime <= '13:59'  ){
     return $temperatura = $hourTemp[12];
    }else if($localTime >= '14:00' && $localTime <= '14:59'  ){
     return $temperatura = $hourTemp[12];
    }else if($localTime >= '15:00' && $localTime <= '15:59'  ){
     return $temperatura = $hourTemp[13];
    }else if($localTime >= '16:00' && $localTime <= '16:59'  ){
     return $temperatura = $hourTemp[14];
    }else if($localTime >= '17:00' && $localTime <= '17:59'  ){
     return $temperatura = $hourTemp[15];
    }else if($localTime >= '18:00' && $localTime <= '18:59'  ){
     return $temperatura = $hourTemp[16];
    }else if($localTime >= '19:00' && $localTime <= '19:59'  ){
     return $temperatura = $hourTemp[17];
    }else if($localTime >= '20:00' && $localTime <= '20:59'  ){
     return $temperatura = $hourTemp[18];
    }else if($localTime >= '21:00' && $localTime <= '21:59'  ){
     return $temperatura = $hourTemp[19];
    }else if($localTime >= '22:00' && $localTime <= '22:59'  ){
     return $temperatura = $hourTemp[20];
    }else if($localTime >= '23:00' && $localTime <= '23:59'  ){
     return $temperatura = $hourTemp[21];
    }else if($localTime >= '24:00' && $localTime <= '24:59'  ){
     return $temperatura = $hourTemp[22];
    }
}


function dayHistory(&$day, &$dayWeather, &$get_api_city, &$localinfo, &$dayWeatherDesc, &$dayTempmin, &$dayTempmax, &$dayWind, &$dayWindSymbol){
    echo "<div class='col-md-1'></div>";
  for($i = 0; $i < 5; $i++){
    if($i == 0){
    echo '<div class="col-md-2 text-center bg-darkblue ptopup">
          <p class="c-white f-size25 upcase ">HOY</p>
          <img src="core/design/img/weather/color/'.$dayWeather[0].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size20">'.$dayTempmin[0].'° min / '.$dayTempmax[0].'° max</p>
          <img src="core/design/img/wind/'.$dayWindSymbol[0].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size20">'.$dayWind[$i].' km/h</p>
          </div>';
    }else{

    echo '<div class="col-md-2 text-center ptopupother">
          <p class="c-white f-size25 upcase ">'.$day[$i].'</p>
          <img src="core/design/img/weather/color/'.$dayWeather[$i].'.svg" alt="img temp" width="64" height="64">
          <p class="c-white f-size20">'.$dayTempmin[$i].'° min / '.$dayTempmax[$i].'° max</p>
          <img src="core/design/img/wind/'.$dayWindSymbol[$i].'.png" alt="img temp" class="bg-white-radius">
          <p class="c-white f-size20">'.$dayWind[$i].' km/h</p>
          </div>';
    }
  }
}

function hourHistory(&$hour, &$hourTemp, &$hourSymnbol, &$hourWind, &$hourWindSymbol, &$hourSymnbolDesc, &$get_api_city){
  $fecha = date("d/m/Y");
  echo '<p class="c-black f-size30 text-center-xs margin-5">El Tiempo en '.$get_api_city[0].' hoy día '.$fecha.'.</p>';

  for($i = 0; $i < 24; $i++){
    echo ' <hr class="hr-gray">
            <div class="row">
              <div class="col-md-2 text-center-xs">
                <p class="f-size20">'.$hour[$i].'</p>
              </div>
              <div class="col-md-2 text-center-xs">
                <img src="core/design/img/weather/color/'.$hourSymnbol[$i].'.svg" alt="img temp" width="33" height="33" style="margin-top: -7px;">
              </div>
              <div class="col-md-5 text-center-xs">
                <p class="f-size20 f-bold f-left">'.$hourTemp[$i].'°</p>
                <p class="f-size20 f-left p-left">'.$hourSymnbolDesc[$i].'</p>
              </div>
              <div class="col-md-3 text-center-xs">
                <img src="core/design/img/wind/'.$hourWindSymbol[$i].'.png" alt="img temp" class="f-left">
                <p class="f-size20 f-left">'.$hourWind[$i].' km/h</p>
              </div>
             </div>';
  }
}



?>