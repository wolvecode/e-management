<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Load compiled CSS in production, Vite for local development --}}
        @if (config('app.env') == 'production')
            <link rel="stylesheet" href="{{ asset('build/assets/app-f52c6b1a.css') }}">
        @else
            @vite('resources/css/app.css')
        @endif

        @stack('meta')

        <title>{{ config('app.name') }} &mdash; @yield('title')</title>

        {{-- Fonts (Google) --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,700&display=swap"
            rel="stylesheet">

        @stack('css')
    </head>

    <body class="min-h-screen antialiased bg-gray-50 font-sans">
        {{-- Page wrapper to keep content contained and responsive --}}
        <div id="app" class="min-h-screen">
            @yield('content')
        </div>

        @stack('scripts')
        <script src="//unpkg.com/alpinejs" defer></script>
        <x-flash-message />
    </body>

</html>
