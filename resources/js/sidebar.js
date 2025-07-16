document.addEventListener("DOMContentLoaded", function () {
    fetch("/api/wallets")
        .then(response => response.json())
        .then(data => {

            const walletsList = document.getElementById("wallets-list");
            walletsList.innerHTML = "";
            data.forEach(wallet => {
                const li = document.createElement("li");
                li.className = "flex justify-between p-2 bg-gray-100 rounded";
                li.innerHTML = `${wallet.name} <span class="text-blue-600 font-semibold">${wallet.balance ?? 0} ₽</span>`;
                walletsList.appendChild(li);
            });
        })
        .catch(error => console.error("Ошибка загрузки кошельков:", error));


    const modal = document.getElementById("walletModal");
    const openModalBtn = document.getElementById("openModalBtn");
    const closeModalBtn = document.getElementById("closeModalBtn");
    const walletForm = document.getElementById("walletForm");

    openModalBtn.addEventListener("click", () => {
        modal.classList.remove("hidden");
    });

    closeModalBtn.addEventListener("click", () => {
        modal.classList.add("hidden");
    });

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
