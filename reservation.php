<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réservez votre table dans notre restaurant gastronomique. Choisissez votre date, heure et nombre de convives pour une expérience inoubliable.">
    <meta name="keywords" content="réservation restaurant, table gastronomique, réserver en ligne, booking">
    <title>Réservation | Restaurant Élégance</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.svg" type="image/svg+xml">
    
    <!-- Bootstrap 5 CSS + icônes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #ff6b6b;
            --primary-light: #ff8e8e;
            --dark: #292f36;
            --light: #f7fff7;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 600;
        }
        
        .hero-reservation {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/reservation-bg.jpg') center/cover;
            color: white;
            padding: 150px 0 100px;
        }
        
        .reservation-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }
        
        .form-control {
            padding: 12px 15px;
            border-radius: 8px;
            border: 1px solid rgba(0, 0, 0, 0.1);
        }
        
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.25rem rgba(255, 107, 107, 0.25);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 1rem;
        }
        
        .time-slots {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(80px, 1fr));
            gap: 10px;
            margin-top: 10px;
        }
        
        .time-slot {
            border: 1px solid #dee2e6;
            border-radius: 5px;
            padding: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.2s ease;
        }
        
        .time-slot:hover, .time-slot.selected {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        @media (max-width: 768px) {
            .hero-reservation {
                padding: 100px 0 60px;
            }
            
            .time-slots {
                grid-template-columns: repeat(auto-fill, minmax(70px, 1fr));
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.svg" alt="Logo Restaurant" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="reservation.php">Réservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contact.php">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Fil d'Ariane -->
    <nav aria-label="breadcrumb" class="pt-5 mt-3">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Accueil</a></li>
                <li class="breadcrumb-item active" aria-current="page">Réservation</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-reservation text-center">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Réservez votre table</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Garantissez votre expérience gastronomique</p>
        </div>
    </section>

    <!-- Reservation Form -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8" data-aos="fade-up">
                    <div class="reservation-card p-4">
                        <h2 class="text-center mb-4">Formulaire de réservation</h2>
                        <form id="reservationForm" novalidate>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label for="name" class="form-label">Nom complet</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                    <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                    <div class="invalid-feedback">Veuillez entrer un email valide.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                    <div class="invalid-feedback">Veuillez entrer un numéro de téléphone.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="guests" class="form-label">Nombre de convives</label>
                                    <select class="form-select" id="guests" name="guests" required>
                                        <option value="" selected disabled>Choisir...</option>
                                        <option value="1">1 personne</option>
                                        <option value="2">2 personnes</option>
                                        <option value="3">3 personnes</option>
                                        <option value="4">4 personnes</option>
                                        <option value="5">5 personnes</option>
                                        <option value="6">6 personnes</option>
                                        <option value="7">7 personnes</option>
                                        <option value="8">8 personnes</option>
                                        <option value="9">9 personnes</option>
                                        <option value="10">10 personnes</option>
                                    </select>
                                    <div class="invalid-feedback">Veuillez sélectionner un nombre.</div>
                                </div>
                                <div class="col-md-6">
                                    <label for="date" class="form-label">Date</label>
                                    <input type="date" class="form-control" id="date" name="date" required min="<?php echo date('Y-m-d'); ?>">
                                    <div class="invalid-feedback">Veuillez sélectionner une date.</div>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Heure</label>
                                    <div class="time-slots">
                                        <div class="time-slot" data-time="12:00">12:00</div>
                                        <div class="time-slot" data-time="12:30">12:30</div>
                                        <div class="time-slot" data-time="13:00">13:00</div>
                                        <div class="time-slot" data-time="13:30">13:30</div>
                                        <div class="time-slot" data-time="19:00">19:00</div>
                                        <div class="time-slot" data-time="19:30">19:30</div>
                                        <div class="time-slot" data-time="20:00">20:00</div>
                                        <div class="time-slot" data-time="20:30">20:30</div>
                                    </div>
                                    <input type="hidden" id="time" name="time" required>
                                    <div class="invalid-feedback">Veuillez sélectionner une heure.</div>
                                </div>
                                <div class="col-12">
                                    <label for="notes" class="form-label">Demandes spéciales (optionnel)</label>
                                    <textarea class="form-control" id="notes" name="notes" rows="3"></textarea>
                                </div>
                                <div class="col-12 mt-4">
                                    <button type="submit" class="btn btn-primary w-100 py-3">
                                        <span class="submit-text">Confirmer la réservation</span>
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div id="formMessage" class="mt-3 alert d-none"></div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5">
                <a href="index.php" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="bi bi-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white">
        <div class="container text-center py-4" data-aos="fade-up">
            <h2 class="mb-4">Besoin d'aide pour votre réservation ?</h2>
            <div class="d-flex justify-content-center gap-3">
                <a href="contact.php" class="btn btn-light btn-lg rounded-pill px-4">Nous contacter</a>
                <a href="tel:+33123456789" class="btn btn-outline-light btn-lg rounded-pill px-4">Appeler</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Restaurant Élégance</h5>
                    <p>Une expérience gastronomique inoubliable.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Accueil</a></li>
                        <li><a href="menu.php" class="text-white">Menu</a></li>
                        <li><a href="reservation.php" class="text-white">Réservation</a></li>
                        <li><a href="contact.php" class="text-white">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>12 Rue Gastronomique<br>75000 Paris<br>+33 1 23 45 67 89</p>
                </div>
            </div>
            <hr class="my-4 bg-light">
            <div class="text-center">
                <p class="mb-0">&copy; 2023 Restaurant Élégance. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary rounded-circle p-3 position-fixed bottom-0 end-0 m-4" id="backToTop" style="display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            backToTop.style.display = window.scrollY > 300 ? 'block' : 'none';
        });
        
        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({top: 0, behavior: 'smooth'});
        });
        
        // Time slot selection
        document.querySelectorAll('.time-slot').forEach(slot => {
            slot.addEventListener('click', function() {
                document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
                document.getElementById('time').value = this.getAttribute('data-time');
            });
        });
        
        // Form validation
        document.getElementById('reservationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!this.checkValidity()) {
                e.stopPropagation();
                this.classList.add('was-validated');
                return;
            }
            
            const btn = this.querySelector('button[type="submit"]');
            const spinner = btn.querySelector('.spinner-border');
            const text = btn.querySelector('.submit-text');
            
            // Show loading state
            text.textContent = 'Envoi en cours...';
            spinner.classList.remove('d-none');
            btn.disabled = true;
            
            // Simulate form submission (replace with actual AJAX call)
            setTimeout(() => {
                // Hide loading state
                text.textContent = 'Réservation confirmée !';
                spinner.classList.add('d-none');
                
                // Show success message
                const msg = document.getElementById('formMessage');
                msg.textContent = 'Merci ! Votre réservation a bien été enregistrée. Un email de confirmation vous a été envoyé.';
                msg.classList.remove('d-none', 'alert-danger');
                msg.classList.add('alert-success');
                
                // Reset form
                setTimeout(() => {
                    this.reset();
                    this.classList.remove('was-validated');
                    text.textContent = 'Confirmer la réservation';
                    btn.disabled = false;
                    document.querySelectorAll('.time-slot').forEach(s => s.classList.remove('selected'));
                }, 3000);
            }, 2000);
        });
    </script>
</body>
</html>