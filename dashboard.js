document.addEventListener('DOMContentLoaded', function() {
    // Données de démonstration pour les commandes mensuelles
    const monthlyOrdersData = {
        labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
        datasets: [{
            label: 'Commandes',
            data: [12, 19, 3, 5, 2, 3, 10],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Configuration du graphique
    const ctx = document.getElementById('monthlyOrdersChart').getContext('2d');
    new Chart(ctx, {
        type: 'bar',
        data: monthlyOrdersData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Données de démonstration pour les dernières commandes
    const recentOrders = [
        { id: 1, customer: 'Jean Dupont', total: '€45', date: '2023-10-01' },
        { id: 2, customer: 'Marie Martin', total: '€30', date: '2023-09-30' },
        { id: 3, customer: 'Pierre Leroy', total: '€60', date: '2023-09-29' }
    ];

    // Affichage des dernières commandes
    const recentOrdersList = document.getElementById('recentOrders');
    recentOrders.forEach(order => {
        const li = document.createElement('li');
        li.className = 'list-group-item';
        li.innerHTML = `
            <strong>Commande #${order.id}</strong><br>
            Client: ${order.customer}<br>
            Total: ${order.total}<br>
            Date: ${order.date}
        `;
        recentOrdersList.appendChild(li);
    });

    // Mise à jour des statistiques rapides (à remplacer par des données réelles)
    document.getElementById('totalOrders').textContent = '120';
    document.getElementById('totalReservations').textContent = '45';
    document.getElementById('totalRevenue').textContent = '€2,500';
});
