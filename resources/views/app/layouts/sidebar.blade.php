<nav class="w-64 bg-white shadow-md p-4 flex flex-col">
    <div class="flex justify-between items-center">
        <h5 class="mt-6 text-lg font-semibold">Кошельки</h5>
        <button id="openModalBtn" class="bg-blue-500 text-white px-3 py-1 rounded text-sm">Добавить</button>
    </div>
    <ul id="wallets-list" class="mt-2 space-y-2">
        <!-- Список кошельков будет загружаться динамически -->
    </ul>
</nav>

<!-- Модальное окно -->
<div id="walletModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center hidden">
    <div class="bg-white p-6 rounded shadow-lg w-96">
        <h2 class="text-lg font-semibold mb-4">Добавить кошелек</h2>
        <form id="walletForm">
            <label class="block text-sm font-medium text-gray-700">Название кошелька</label>
            <input type="text" id="walletName" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>

            <label class="block text-sm font-medium text-gray-700 mt-4">Начальный баланс</label>
            <input type="number" id="walletBalance" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2" required>

            <div class="mt-6 flex justify-end space-x-2">
                <button type="button" id="closeModalBtn" class="bg-gray-400 text-white px-4 py-2 rounded">Отмена</button>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Добавить</button>
            </div>
        </form>
    </div>
</div>
