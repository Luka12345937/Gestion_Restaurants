document.getElementById('reservationForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);
    const formMessage = document.getElementById('formMessage');

    fetch('../src/controllers/submitReservation.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            formMessage.innerHTML = '<div class="alert alert-success">Votre réservation a été enregistrée avec succès !</div>';
            document.getElementById('reservationForm').reset();
        } else {
            formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
        }
    })
    .catch(error => {
        console.error('Error:', error);
        formMessage.innerHTML = '<div class="alert alert-danger">Une erreur est survenue. Veuillez réessayer.</div>';
    });
});
