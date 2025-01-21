@extends('app.layouts.main')

@section('content')
<div class="flex h-screen">
    <!-- Основной контент -->
    <div class="flex-1 p-6 overflow-auto">
        <h2 class="text-2xl font-semibold mb-4">Таблица операций</h2>
        <div class="overflow-x-auto bg-white shadow-md rounded-lg p-4">
            <table class="w-full border-collapse border border-gray-300">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 p-2">Дата</th>
                        <th class="border border-gray-300 p-2">Время</th>
                        <th class="border border-gray-300 p-2">Описание операции</th>
                        <th class="border border-gray-300 p-2">Поступление</th>
                        <th class="border border-gray-300 p-2">Списание</th>
                        <th class="border border-gray-300 p-2">Комментарий</th>
                        <th class="border border-gray-300 p-2">Пользователь</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($transactions as $transaction)
                        <tr class="odd:bg-gray-100">
                            <td class="border border-gray-300 p-2">{{ $transaction['date'] }}</td>
                            <td class="border border-gray-300 p-2">{{ $transaction['time'] }}</td>
                            <td class="border border-gray-300 p-2">{{ $transaction['description'] }}</td>
                            <td class="border border-gray-300 p-2"></td>
                            <td class="border border-gray-300 p-2">{{ $transaction['expense'] ? number_format($transaction['expense'], 2, ',', ' ') . ' ₽' : '' }}</td>
                            <td class="border border-gray-300 p-2">{{ $transaction['comment'] }}</td>
                            <td class="border border-gray-300 p-2">{{ $transaction['user'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
