document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('button[data-filter]');
    const menuItems = document.querySelectorAll('.menu-item');

    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Supprimer la classe 'active' de tous les boutons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Ajouter la classe 'active' au bouton cliqué
            this.classList.add('active');

            const filter = this.getAttribute('data-filter');

            menuItems.forEach(item => {
                if (filter === 'all' || item.classList.contains(filter)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
