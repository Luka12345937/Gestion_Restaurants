document.getElementById('passwordResetForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const formMessage = document.getElementById('formMessage');

    fetch('../src/controllers/sendResetLink.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            formMessage.innerHTML = '<div class="alert alert-success">Un lien de réinitialisation a été envoyé à votre email.</div>';
            document.getElementById('passwordResetForm').reset();
        } else {
            formMessage.innerHTML = '<div class="alert alert-danger">Email non trouvé. Veuillez réessayer.</div>';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
    });
});
