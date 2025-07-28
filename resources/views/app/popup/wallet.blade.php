<div id="wallet-popup" class="fixed inset-0 bg-black bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-xl max-w-md w-full mx-4">
        <!-- Header -->
        <div class="flex justify-between items-center p-6 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900">Редактировать кошелек</h3>
            <button type="button" class="text-gray-400 hover:text-gray-600" onclick="closeWalletPopup()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12">
                    </path>
                </svg>
            </button>
        </div>

        <!-- Form -->
        <form id="wallet-form" class="p-6">
            <div class="mb-4">
                <label for="wallet-name" class="block text-sm font-medium text-gray-700 mb-2">
                    Название кошелька
                </label>
                <input type="text" id="wallet-name" name="name"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="Введите название кошелька" required>
            </div>

            <div class="mb-4">
                <label for="wallet-balance" class="block text-sm font-medium text-gray-700 mb-2">
                    Баланс
                </label>
                <input type="number" id="wallet-balance" name="balance" step="0.01" min="0"
                    class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                    placeholder="0.00" required>
            </div>

            <!-- Hidden wallet ID field -->
            <input type="hidden" id="wallet-id" name="id">

            <!-- Buttons -->
            <div class="flex justify-between items-center pt-4">
                <button type="button" onclick="deleteWallet()"
                    class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 transition-colors">
                    Удалить
                </button>
                <div class="flex space-x-3">
                    <button type="button" onclick="closeWalletPopup()"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition-colors">
                        Отмена
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-colors">
                        OK
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
