import { openWalletPopup } from './wallet-popup.js';

document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/wallets")
        .then(response => response.json())
        .then(data => {
            console.log(data);
            const walletsList = document.getElementById("wallets-list");
            walletsList.innerHTML = "";
            data.forEach(wallet => {
                const li = document.createElement("li");
                li.className = "flex justify-between p-2 bg-gray-100 rounded cursor-pointer hover:bg-gray-200 transition-colors";
                li.innerHTML = `${wallet.name} <span class="text-blue-600 font-semibold">${wallet.balance ?? 0} ₽</span>`;
                console.log(123);
                // Add click event to open popup for editing
                li.addEventListener("click", () => {
                    openWalletPopup({
                        id: wallet.id,
                        name: wallet.name,
                        balance: wallet.balance
                    });
                });

                walletsList.appendChild(li);
            });
        })
        .catch(error => console.error("Ошибка загрузки кошельков:", error));


    walletForm.addEventListener("submit", function (e) {
        e.preventDefault();

        const name = document.getElementById("walletName").value;
        const balance = document.getElementById("walletBalance").value;

        fetch("/api/wallets/create", {
            method: "POST",
            headers: {
                "Content-Type": "application/json",
                "X-CSRF-TOKEN": "{{ csrf_token() }}"
            },
            body: JSON.stringify({ name, balance })
        })
            .then(response => response.json())
            .then(data => {
                console.log("Кошелек добавлен:", data);
                modal.classList.add("hidden");
                location.reload(); // Обновляем список
            })
            .catch(error => console.error("Ошибка добавления кошелька:", error));
    });
});
