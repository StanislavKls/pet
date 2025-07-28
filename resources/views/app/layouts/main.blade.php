<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Домашние финансы')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    @include('app.layouts.nav') <!-- Верхнее меню -->

    <div class="flex h-screen">
        @include('app.layouts.sidebar') <!-- Боковое меню -->

        <div class="flex-1 p-6 overflow-auto">
            @yield('content') <!-- Динамический контент -->
        </div>
    </div>
</body>
</html>


