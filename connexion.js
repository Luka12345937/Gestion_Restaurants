document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const formMessage = document.getElementById('formMessage');

    fetch('../src/controllers/authenticate.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            window.location.href = 'dashboard.php'; // Redirige vers le tableau de bord
        } else {
            formMessage.innerHTML = '<div class="alert alert-danger">Email ou mot de passe incorrect.</div>';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
    });
});
