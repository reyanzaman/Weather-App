<?php

$url = "http://api.openweathermap.org/data/2.5/weather?id=1337179&lang=en&units=metric&APPID=ad38118db9a9d38f959d222513d35bd9";

$contents = file_get_contents($url);
$clima = json_decode($contents);

$temp = $clima->main->temp;
$temp = round($temp);
$weather = $clima->weather[0]->main;

date_default_timezone_set("Asia/Dhaka");
$time = date('h:i A'); // get current time in 12-hour format
$hour = $time; // store the time in the $hour variable
list($hour, $ampm) = explode(' ', $hour); // separate the hour and AM/PM
$date = date('l, d F Y');

echo "<script>document.getElementById('weather').innerHTML = '$weather';</script>";
echo "<script>document.getElementById('temperature').innerHTML = '$temp&#176C';</script>";

if ($weather == "Rain" || $weather == "Drizzle" || $weather == "Snow") {
    echo "<style>.card {background-image: url('images/rainy.webp');}</style>";
} else if ($weather == "Mist" || $weather == "Smoke" || $weather == "Haze" || $weather == "Dust" || $weather == "Fog" || $weather == "Clouds" || $weather == "Ash") {
    echo "<style>.card {background-image: url('images/cloudy.jpg');}</style>";
} else if ($weather == "Tornado" || $weather == "Thunderstorm" || $weather == "Squall") {
    echo "<style>.card {background-image: url('images/storm.jpg');}</style>";
} else {
    echo "<style>.card {background-image: url('images/sunny.webp');}</style>";
}


?>