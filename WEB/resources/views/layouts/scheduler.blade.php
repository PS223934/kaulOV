<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'kaulOV') }}</title>
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"/>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js', 'resources/js/mapInstance.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- style sheets -->
        @vite(['resources/css/main.css', 'resources/css/map.css', 'resources/css/scheduler.css'])
    </head>
    <body class="font-sans antialiased">
        <div id="addMarkerContainer">

        </div>

        <div id="map" class="map"></div>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDjbxodDENOjxVsNZvQiy7wfAK64gJ_RBA&callback=initMap&v=beta" defer></script>
    </body>
</html>
