document.getElementById('registrationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const formMessage = document.getElementById('formMessage');

    // Vérification des mots de passe
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (password !== confirmPassword) {
        formMessage.innerHTML = '<div class="alert alert-danger">Les mots de passe ne correspondent pas.</div>';
        return;
    }

    fetch('../src/controllers/registerUser.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            formMessage.innerHTML = '<div class="alert alert-success">Inscription réussie ! Redirection vers la connexion...</div>';
            setTimeout(() => {
                window.location.href = 'connexion.php';
            }, 2000);
        } else {
            formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
    });
});
