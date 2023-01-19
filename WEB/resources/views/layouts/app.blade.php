<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'kaulOV') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/main.js'])
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>



        <!-- style sheets -->
        @vite(['resources/css/main.css'])
        <script>
            function tokentoCp(source, elementId) {

                const element = $('#'+elementId);
                element.select();
                navigator.clipboard.writeText(element.val());
                source.innerHTML = 'Copied!';
            }

            function setUserCredit() {
                const element =  document.getElementById('creditDisplay');
                const rawCredit = element.dataset.credit.toString();
                let wholes = rawCredit.substring(0, rawCredit.length - 2);
                const decimals = ('0' + rawCredit.slice(-2)).slice(-2);
                console.log('wholes:' + wholes + "decimals: "+ decimals + "raw: " + rawCredit);
                if(wholes == 0) {wholes = wholes + '0'};
                let parsedCredit = '&euro; '+ wholes + ',' + decimals;

                console.log(parsedCredit);
                element.innerHTML = parsedCredit;
            };

            $(document).ready(function() {
                setUserCredit();
            });
        </script>
    </head>
        <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
