<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/css/welcome.css')
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
                overflow: hidden;
                background: radial-gradient(ellipse at top, #efe7dd, transparent),
                            radial-gradient(ellipse at bottom, #969696, transparent),
                            radial-gradient(transparent 15%, #505050 90%);
            }

            @keyframes bgfade-in {
                0% {opacity: 0%}
                100% {opacity: 100%}
            }

            @keyframes bgfade-blur {
                0% {
                    filter: blur(0px);
                    opacity: 100%;
                }
                100% {
                    filter: blur(6px);
                    opacity: 100%;
                }
            }

            .bgimgcontainer {
                background-position: center center;
                background-size: cover;
                position: absolute;
                width: 100%;
                height: 100%;
                display: none;
            }

            .bg-in {
                display: block;
                -webkit-animation: bgfade-in 1s; /* Chrome, Safari, Opera */
                animation: bgfade-in 1s;
            }

            .bg-blur {
                animation: bgfade-blur forwards 1s;
            }

            .welcome-content {
                opacity: 0%;
            }

            .animate-content {
                animation: bgfade-in forwards 800ms 800ms;
            }

            /* loading anim */

            .loadscreen {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                transition: opacity 1s;
            }

            .loadscreen > img {
                height: auto;
                width: 250px;
                margin-bottom: 40px;
                padding: 10px;
                filter: drop-shadow(0px 10px 5px rgb(187, 187, 187));
            }

            .loadscreen-hide {
                opacity: 0%;
            }

            .loadscreen-closed {
                display: none;
            }

            .spinner {
                -webkit-animation: rotate 2s linear infinite;
                animation: rotate 2s linear infinite;
                z-index: 2;
                margin: 20px 0 0 0;
                width: 50px;
                height: 50px;
                display: inline-block;
            }
            .spinner .path {
                stroke: #8d8d8d;
                stroke-linecap: round;
                -webkit-animation: dash 1.5s ease-in-out infinite;
                animation: dash 1.5s ease-in-out infinite;
            }

            @-webkit-keyframes rotate {
                100% {
                    transform: rotate(360deg);
                }
            }

            @keyframes rotate {
                100% {
                    transform: rotate(360deg);
                }
            }
            @-webkit-keyframes dash {
                0% {
                    stroke-dasharray: 1, 150;
                    stroke-dashoffset: 0;
                }
                50% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -35;
                }
                100% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -124;
                }
            }
            @keyframes dash {
                0% {
                    stroke-dasharray: 1, 150;
                    stroke-dashoffset: 0;
                }
                50% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -35;
                }
                100% {
                    stroke-dasharray: 90, 150;
                    stroke-dashoffset: -124;
                }
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
            function setbgimg() {
                const url = '{{asset('img/welcome')}}/' + Math.ceil(Math.random() * 38) + '.jpg';
                let bgImgPreload = $('<img src="'+url+'">').on('load', function() {
                    $('.bgimgcontainer').css('background-image', 'url(' + url + ')');
                    setInterval(function () {
                        $('.bgimgcontainer').addClass('bg-in');
                        $('.welcome-content').addClass('animate-content');
                        $('.loadscreen').addClass('loadscreen-hide')
                    },500)
                    setInterval(function () {
                        $('.loadscreen').addClass('loadscreen-closed')
                        $('.bgimgcontainer').addClass('bg-blur');
                    }, 1450)
                    bgImgPreload = null;
                });
            }

            function wSwitchTab(element) {
                $('.w-nav-active').removeClass('w-nav-active');
                $(element).addClass('w-nav-active');

                $('.active-component').removeClass('active-component');
                $('.'+element.dataset.jslb+'-component').addClass('active-component');
            }
        </script>
    </head>
    <body class="antialiased" onload="setbgimg()">
        <div class="bgimgcontainer"></div>
        <div class="welcome-content relative flex items-top justify-center min-h-screen sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="w-content w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="main-wrapper bg-white dark:bg-white w-1/2 overflow-hidden shadow sm:rounded-lg">
                    <div class="schedule-component active-component"><x-schedule-search/></div>
                    <div class="login-component"><x-login-form/></div>
                </div>
                <x-welcome-navigation/>
            </div>
        </div>
        <div class="loadscreen">
            <x-application-logo/>
            <svg class="spinner" viewBox="0 0 50 50">
                <circle class="path" cx="25" cy="25" r="20" fill="none" stroke-width="5"></circle>
            </svg>
        </div>
    </body>
</html>
