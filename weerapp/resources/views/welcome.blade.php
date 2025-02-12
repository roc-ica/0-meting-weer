<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Weer in Eindhoven Jongeh</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
        }
        .weather-container {
            background-color: #f2f2f2;
            padding: 20px;
            border-radius: 10px;
            display: inline-block;
            margin-top: 20px;
        }
    </style>
</head>
<body>
<h1>Weer in Eindhoven Jongeh</h1>

@if(isset($weather))
    <div class="weather-container">
        <h2>Weer in {{ $weather['name'] }}</h2>
        <p>Hier zie je hoe warm het is jongeh: {{ $weather['main']['temp'] }}°C</p>
        <p>Weer jongeh: {{ ucfirst($weather['weather'][0]['description']) }}</p>
        <p>Vochtigheid jongeh: {{ $weather['main']['humidity'] }}%</p>
        <p>Wind snelheid jongeh: {{ $weather['wind']['speed'] }} m/s</p>
    </div>
@else
    <p>Weather data is not available. Please try again later.</p>
@endif
</body>
</html>
