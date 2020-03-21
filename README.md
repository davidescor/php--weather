
![eltiempo](http://davidespier.com/img/appweb/eltiempo-day.png)
![eltiempo](http://davidespier.com/img/appweb/eltiempo-night.png)


# El tiempo

Website in PHP with functionality to collect the current weather of different cities, use a third-party API.

## Requirements


- Register to [tiempo.com/api/](https://www.tiempo.com/api/).
- Php 5.6+.


## Installation

1. Register on the page of [https://www.tiempo.com/api/](https://www.tiempo.com/api) to obtain the apikey.

2. Edit config in 'core/config.php and paste apikey.

          $timeSet = 'Europe/Madrid';

          $city = 313; 
          $apikey = '*****'; 

          $background_navbar_day_color = '#2c568c';
          $background_navbar_night_color = '#000000';

          $background_day_color = '#457fca';
          $background_night_color = '#212121';

          $time_day_control_min = '07:00';
          $time_day_control_max = '21:00';

          2.1 - Explanation:

                    $timeSet -> Set the default time zone.

                    $city -> Default city on the main page.
                    $apikey -> Add your private api key https://www.tiempo.com/api

                    $background_navbar_day_color -> Default background nav bar color day.
                    $background_navbar_night_color -> Default background nav bar color night.

                    $background_day_color -> Default background div color day.
                    $background_night_color -> Default background div color night.

                    $time_day_control_min -> Start time of the day to change background.
                    $time_day_control_max -> End of day time day to change background.
                     

3. Run.

## Website project

[http://davidespier.com/pages/eltiempo/](http://davidespier.com/pages/eltiempo/)


## Authors

 *Developed and designed by*  **David Espier**


[Personal website](https://davidespier.com)

[Alexa skills](https://www.amazon.es/s?k=davidespier&i=alexa-skills)
        
[Other projects](https://github.com/davidespier?tab=repositories)



## License


[MIT License](https://choosealicense.com/licenses/mit/) © davidespier.com
