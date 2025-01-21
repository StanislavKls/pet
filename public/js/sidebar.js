document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/wallets")
        .then(response => response.json())
        .then(data => {

            const walletsList = document.getElementById("wallets-list");
            walletsList.innerHTML = "";
            data.forEach(wallet => {
                console.log(wallet)
                const li = document.createElement("li");
                li.className = "flex justify-between p-2 bg-gray-100 rounded";
                li.innerHTML = `${wallet.name} <span class="text-blue-600 font-semibold">100 ₽</span>`;
                walletsList.appendChild(li);
            });
        })
        .catch(error => console.error("Ошибка загрузки кошельков:", error));
});
