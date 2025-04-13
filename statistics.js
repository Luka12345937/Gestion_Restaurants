document.addEventListener('DOMContentLoaded', function() {
    // Données de démonstration pour les commandes mensuelles
    const monthlyOrdersData = {
        labels: ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil'],
        datasets: [{
            label: 'Commandes',
            data: [120, 190, 300, 500, 200, 300, 400],
            backgroundColor: 'rgba(54, 162, 235, 0.2)',
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    };

    // Configuration du graphique des commandes mensuelles
    const monthlyOrdersCtx = document.getElementById('monthlyOrdersChart').getContext('2d');
    new Chart(monthlyOrdersCtx, {
        type: 'line',
        data: monthlyOrdersData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // Données de démonstration pour les plats les plus commandés
    const topDishesData = {
        labels: ['Steak Frites', 'Pizza Margherita', 'Tiramisu', 'Salade César'],
        datasets: [{
            label: 'Nombre de Commandes',
            data: [200, 150, 120, 100],
            backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0'],
            hoverBackgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0']
        }]
    };

    // Configuration du graphique des plats les plus commandés
    const topDishesCtx = document.getElementById('topDishesChart').getContext('2d');
    new Chart(topDishesCtx, {
        type: 'doughnut',
        data: topDishesData
    });

    // Données de démonstration pour les réservations récentes
    const recentReservations = [
        { name: 'Jean Dupont', date: '2023-10-01', time: '19:00', guests: 4 },
        { name: 'Marie Martin', date: '2023-09-30', time: '20:30', guests: 2 },
        { name: 'Pierre Leroy', date: '2023-09-29', time: '18:45', guests: 3 }
    ];

    // Affichage des réservations récentes
    const recentReservationsTable = document.getElementById('recentReservations').getElementsByTagName('tbody')[0];
    recentReservations.forEach(reservation => {
        const row = recentReservationsTable.insertRow();
        row.innerHTML = `
            <td>${reservation.name}</td>
            <td>${reservation.date}</td>
            <td>${reservation.time}</td>
            <td>${reservation.guests}</td>
        `;
    });

    // Mise à jour des statistiques rapides (à remplacer par des données réelles)
    document.getElementById('totalOrders').textContent = '1,200';
    document.getElementById('totalReservations').textContent = '450';
    document.getElementById('totalRevenue').textContent = '€25,000';
});
