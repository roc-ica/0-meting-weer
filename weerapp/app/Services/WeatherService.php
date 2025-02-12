<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class WeatherService
{
    protected $apiKey;
    protected $city;
    protected $units;
    protected $lang;

    public function __construct()
    {
        $this->apiKey = config('services.openweather.key');
        $this->city = config('services.openweather.city', 'Eindhoven');
        $this->units = config('services.openweather.units', 'metric');
        $this->lang = config('services.openweather.lang', 'en');
    }

    public function getWeather()
    {
        $url = "https://api.openweathermap.org/data/2.5/weather?q={$this->city}&units={$this->units}&lang={$this->lang}&appid={$this->apiKey}";

        $response = Http::get($url);

        if ($response->successful()) {
            return $response->json();
        }

        return null;
    }
}
