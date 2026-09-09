<?php

use Implmbp197\PhpWeatherApp\WeatherService;

require_once __DIR__ . '/vendor/autoload.php';

if ($argc < 2) {
    echo "Correct Usage: php weather.php city\n";
    exit(1);
}

$weatherService = new WeatherService();
$city = $argv['1'];
echo "Getting weather for $city...\n";
$weather = $weatherService->getWeather($city);

echo "\n";
echo "City: " . $weather['city'] . "\n";
echo "Temprature: " . $weather['temprature'] . "°C\n";
echo "Description: " . $weather['description'] . "\n";
echo "Humidity: " . $weather['humidity'] . "%\n";
