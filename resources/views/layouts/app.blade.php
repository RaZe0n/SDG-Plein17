<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <link href='https://fonts.googleapis.com/css?family=Outfit' rel='stylesheet'>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased" style="font-family: Outfit;">
    @include('components.navigation')

    @yield('content')

    <nav class="bg-lazurite block top-0 left-0 w-full z-40">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex h-16">
                <div class="flex justify-between w-full">

                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                        </a>
                    </div>
                    <div class="hidden md:flex flex-col items-center md:flex-row md:justify-center md:items-center md:space-x-16 md:mx-auto">
                        <a href="{{ route('about') }}" class="text-white transition duration-150 ease-in-out my-3">Over ons</a>
                        <a href="{{ route('predicaat') }}" class="text-white transition duration-150 ease-in-out my-3">Predicaten</a>
                    </div>
                    <div class="flex items-center">
                        @auth
                        <a href="{{ route('dashboard') }}" class="text-white transition duration-150 ease-in-out my-3">Mijn Plein 17</a>
                        @endauth
                        @guest
                        <a href="{{ route('login') }}" class="text-white transition duration-150 ease-in-out my-3">Login</a>
                        @endguest
                    </div>
                </div>
            </div>
        </div>
    </nav>
</body>
<x-footer />

</html>