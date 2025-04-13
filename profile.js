document.addEventListener('DOMContentLoaded', function() {
    const profileForm = document.getElementById('profileForm');
    const formMessage = document.getElementById('formMessage');

    // Gestion de la mise à jour du profil
    profileForm.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch('../src/controllers/updateProfile.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                formMessage.innerHTML = '<div class="alert alert-success">Profil mis à jour avec succès !</div>';
            } else {
                formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
        });
    });

    // Données de démonstration pour l'historique des commandes
    const orderHistory = [
        { id: 1, date: '2023-10-01', total: '€45', status: 'Livrée' },
        { id: 2, date: '2023-09-28', total: '€30', status: 'Livrée' },
        { id: 3, date: '2023-09-25', total: '€60', status: 'En cours' }
    ];

    // Affichage de l'historique des commandes
    const orderHistoryList = document.getElementById('orderHistory');
    orderHistory.forEach(order => {
        const li = document.createElement('li');
        li.className = 'list-group-item d-flex justify-content-between align-items-center';
        li.innerHTML = `
            Commande #${order.id} - ${order.date} - ${order.total}
            <span class="badge bg-${order.status === 'Livrée' ? 'success' : 'warning'}">${order.status}</span>
        `;
        orderHistoryList.appendChild(li);
    });
});
