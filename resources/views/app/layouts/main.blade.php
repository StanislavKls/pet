<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Домашние финансы')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100">

    <!-- Верхняя навигация -->
    <nav class="bg-white shadow-md p-4 flex justify-between items-center">
        <ul class="flex space-x-4">
            <li><a href="#" class="text-blue-600 hover:underline">📄 Операции</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">💰 Счета</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">📊 Отчёты</a></li>
            <li><a href="#" class="text-blue-600 hover:underline">⚙ Настройки</a></li>
        </ul>
        <h1 class="text-xl text-yellow-400 font-semibold">Домашние финансы</h1>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
