<?php


$city_name = $_GET["city"];
$api_key = '4eb6c3e1856a825a8036b3dd389fc625';

$api_url = 'http://api.openweathermap.org/data/2.5/weather?q='.$city_name.'&appid='.$api_key;

$weather_data = json_decode( file_get_contents($api_url), true);

$temperature = $weather_data['main']['temp'];
$speed = $weather_data['wind']['speed'];
$feels_like = $weather_data['main']['feels_like'];
$humidity = $weather_data['main']['humidity'];
$rain = $weather_data['rain']['rain'];
$min = $weather_data['main']['temp_min'];
$max = $weather_data['main']['temp_max'];

$temperature_in_celcius = $temperature - 273.15;
$min_in_celcius = $min - 273.15;
$max_in_celcius = $max - 273.15;

$temperature_current_weather = $weather_data['weather'][0]['main'];

echo "The Current conditions in: " .  $city_name;
echo "<br><br>";
echo "The current temperature: " . $temperature_in_celcius;
echo "<br>";
echo "The minimum temperature: " . $min_in_celcius;
echo "<br>";
echo "The maximum temperature: " . $max_in_celcius;
echo "<br>";
echo "Feels Like: " . $feels_like;
echo "<br>";
echo "Wind speed: " . $speed . " miles per hour";
echo "<br>";
echo "Humidity " . $humidity ;
echo "<br>";
echo "Rain " . $rain . " for the last hour";

?>
