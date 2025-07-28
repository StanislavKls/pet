export function openWalletPopup(walletData = null) {
  const popup = document.getElementById('wallet-popup');
  const form = document.getElementById('wallet-form');
  const nameInput = document.getElementById('wallet-name');
  const balanceInput = document.getElementById('wallet-balance');
  const idInput = document.getElementById('wallet-id');

  if (walletData) {
    // Edit existing wallet
    nameInput.value = walletData.name || '';
    balanceInput.value = walletData.balance || '';
    idInput.value = walletData.id || '';
  } else {
    // Create new wallet
    nameInput.value = '';
    balanceInput.value = '';
    idInput.value = '';
  }

  popup.classList.remove('hidden');
}

export function closeWalletPopup() {
  const popup = document.getElementById('wallet-popup');
  popup.classList.add('hidden');
}

export function deleteWallet() {
  const idInput = document.getElementById('wallet-id');
  const walletId = idInput.value;

  if (!walletId) {
    alert('Не удалось определить ID кошелька');
    return;
  }

  if (confirm('Вы уверены, что хотите удалить этот кошелек?')) {


    fetch('/api/wallets/destroy', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json',
        "X-CSRF-TOKEN": "{{ csrf_token() }}"
      },
      body: JSON.stringify({ id: walletId })
    })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'OK') {
          closeWalletPopup();
          // Optionally refresh the page or update the UI
          location.reload();
        } else {
          alert('Ошибка при удалении кошелька');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        alert('Ошибка при удалении кошелька');
      });
  }
}

// Form submission handler
document.addEventListener('DOMContentLoaded', function () {
  const form = document.getElementById('wallet-form');
  if (form) {
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      const formData = new FormData(this);
      const walletId = formData.get('id');

      const url = walletId ? '/api/wallets/update' : '/api/wallets/create';
      const method = 'POST';

      fetch(url, {
        method: method,
        headers: {
          'Content-Type': 'application/json',
          "X-CSRF-TOKEN": "{{ csrf_token() }}"
        },
        body: JSON.stringify({
          id: walletId,
          name: formData.get('name'),
          balance: formData.get('balance')
        })
      })
        .then(response => response.json())
        .then(data => {
          if (data.status === 'OK') {
            closeWalletPopup();
            // Optionally refresh the page or update the UI
            location.reload();
          } else {
            alert('Ошибка при сохранении кошелька');
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Ошибка при сохранении кошелька');
        });
    });

    // Make functions globally available for HTML onclick attributes
    window.openWalletPopup = openWalletPopup;
    window.closeWalletPopup = closeWalletPopup;
    window.deleteWallet = deleteWallet;
  }
}); 
