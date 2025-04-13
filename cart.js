document.addEventListener('DOMContentLoaded', function() {
    let cart = [];
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');

    // Fonction pour ajouter un élément au panier
    function addToCart(id, name, price) {
        const existingItem = cart.find(item => item.id === id);
        if (existingItem) {
            existingItem.quantity++;
        } else {
            cart.push({ id, name, price, quantity: 1 });
        }
        updateCart();
    }

    // Fonction pour supprimer un élément du panier
    function removeFromCart(id) {
        cart = cart.filter(item => item.id !== id);
        updateCart();
    }

    // Fonction pour mettre à jour l'affichage du panier
    function updateCart() {
        cartItems.innerHTML = '';
        let total = 0;

        cart.forEach(item => {
            const li = document.createElement('li');
            li.className = 'list-group-item d-flex justify-content-between align-items-center';
            li.innerHTML = `
                ${item.name} x ${item.quantity} - €${(item.price * item.quantity).toFixed(2)}
                <button class="btn btn-sm btn-danger removeFromCart" data-id="${item.id}">×</button>
            `;
            cartItems.appendChild(li);
            total += item.price * item.quantity;
        });

        cartTotal.textContent = `Total: €${total.toFixed(2)}`;
    }

    // Écouteurs d'événements
    document.querySelectorAll('.addToCart').forEach(button => {
        button.addEventListener('click', function() {
            const id = parseInt(this.getAttribute('data-id'));
            const name = this.getAttribute('data-name');
            const price = parseFloat(this.getAttribute('data-price'));
            addToCart(id, name, price);
        });
    });

    document.querySelectorAll('.removeFromCart').forEach(button => {
        button.addEventListener('click', function() {
            const id = parseInt(this.getAttribute('data-id'));
            removeFromCart(id);
        });
    });

    // Gestion de la validation de la commande
    document.getElementById('checkoutBtn').addEventListener('click', function() {
        if (cart.length > 0) {
            alert('Commande validée !');
            cart = [];
            updateCart();
        } else {
            alert('Votre panier est vide.');
        }
    });
});
