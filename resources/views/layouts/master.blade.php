<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    @stack('meta')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name')}} &mdash; @yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,700&display=swap" rel="stylesheet">
    <style>
        @font-face {
            font-family: 'Poppins', sans-serif;
        }
    </style>
    @stack('css')
</head>
<body class="p-0 m-0 font-[Poppins]">
    @yield('content')
    
    @stack('scripts')
    <script src="//unpkg.com/alpinejs" defer></script>
    <x-flash-message />
</body>
</html>
