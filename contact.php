<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Contactez notre restaurant gastronomique pour réservations ou questions. Notre équipe vous répond avec plaisir.">
    <meta name="keywords" content="contact restaurant, réservation gastronomique, support client, questions restaurant">
    <title>Contact | Restaurant Élégance</title>
    
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
        
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('assets/img/contact-bg.jpg') center/cover;
            padding: 120px 0 80px;
            color: white;
        }
        
        .contact-form {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .btn-primary {
            background-color: var(--primary);
            border: none;
            transition: all 0.3s ease;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
        }
        
        .contact-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .map-container {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 1rem;
        }
        
        @media (max-width: 768px) {
            .contact-hero h1 {
                font-size: 2.5rem;
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
                            <a class="nav-link active" href="contact.php">Contact</a>
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
                <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="contact-hero text-center d-flex align-items-center">
        <div class="container">
            <h1 data-aos="fade-up">Contactez Notre Équipe</h1>
            <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Nous sommes à votre écoute pour toute question ou réservation</p>
            <div data-aos="fade-up" data-aos-delay="200">
                <a href="#contact-form" class="btn btn-primary btn-lg rounded-pill me-2">Écrire un message</a>
                <a href="tel:+33123456789" class="btn btn-outline-light btn-lg rounded-pill">Nous appeler</a>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <!-- Formulaire de Contact -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="contact-form" id="contact-form">
                        <h2 class="mb-4">Envoyez-nous un message</h2>
                        <form id="contactForm" novalidate>
                            <div class="mb-4">
                                <label for="name" class="form-label">Votre nom complet</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                                <div class="invalid-feedback">Veuillez entrer votre nom.</div>
                            </div>
                            <div class="mb-4">
                                <label for="email" class="form-label">Votre email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Veuillez entrer un email valide.</div>
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="form-label">Téléphone (optionnel)</label>
                                <input type="tel" class="form-control" id="phone" name="phone">
                            </div>
                            <div class="mb-4">
                                <label for="subject" class="form-label">Sujet</label>
                                <select class="form-select" id="subject" name="subject" required>
                                    <option value="" selected disabled>Choisir un sujet</option>
                                    <option value="reservation">Réservation</option>
                                    <option value="question">Question</option>
                                    <option value="feedback">Feedback</option>
                                    <option value="other">Autre</option>
                                </select>
                                <div class="invalid-feedback">Veuillez sélectionner un sujet.</div>
                            </div>
                            <div class="mb-4">
                                <label for="message" class="form-label">Votre message</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                <div class="invalid-feedback">Veuillez écrire votre message.</div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-3">
                                    <span class="submit-text">Envoyer le message</span>
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
                        <div id="formMessage" class="mt-3 alert d-none"></div>
                    </div>
                </div>
                
                <!-- Informations de Contact -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="contact-card">
                        <div class="text-center mb-4">
                            <i class="bi bi-chat-dots text-primary" style="font-size: 2.5rem;"></i>
                            <h3>Comment pouvons-nous vous aider ?</h3>
                        </div>
                        
                        <div class="row g-4">
                            <div class="col-md-6">
                                <div class="p-4 text-center">
                                    <i class="bi bi-geo-alt-fill text-primary mb-3" style="font-size: 2rem;"></i>
                                    <h4 class="h5">Adresse</h4>
                                    <p>12 Rue Gastronomique<br>75000 Paris</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 text-center">
                                    <i class="bi bi-telephone-fill text-primary mb-3" style="font-size: 2rem;"></i>
                                    <h4 class="h5">Téléphone</h4>
                                    <p>+33 1 23 45 67 89<br>Lun-Dim : 10h-22h</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 text-center">
                                    <i class="bi bi-envelope-fill text-primary mb-3" style="font-size: 2rem;"></i>
                                    <h4 class="h5">Email</h4>
                                    <p>contact@restaurant.com<br>Réponse sous 24h</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="p-4 text-center">
                                    <i class="bi bi-clock-fill text-primary mb-3" style="font-size: 2rem;"></i>
                                    <h4 class="h5">Horaires</h4>
                                    <p>Lun-Ven : 11h30-14h30<br>19h-23h</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-5 text-center">
                            <h4 class="h5 mb-3">Nous suivre</h4>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="text-dark"><i class="bi bi-facebook fs-4"></i></a>
                                <a href="#" class="text-dark"><i class="bi bi-instagram fs-4"></i></a>
                                <a href="#" class="text-dark"><i class="bi bi-twitter fs-4"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2>Retrouvez Notre Restaurant</h2>
                <p class="lead">Venez découvrir notre cadre exceptionnel en plein cœur de Paris</p>
            </div>
            
            <div class="map-container" data-aos="zoom-in">
                <iframe
                    width="100%"
                    height="450"
                    style="border:0;"
                    loading="lazy"
                    allowfullscreen
                    referrerpolicy="no-referrer-when-downgrade"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.991440608444!2d2.330955515663231!3d48.85837007928756!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e2964e34e2d%3A0x8ddca9ee684ef7e2!2sTour%20Eiffel!5e0!3m2!1sfr!2sfr!4v1633068883530!5m2!1sfr!2sfr">
                </iframe>
            </div>
            
            <div class="text-center mt-4">
                <a href="https://maps.google.com/?q=12+Rue+Gastronomique,75000+Paris" target="_blank" class="btn btn-outline-primary rounded-pill px-4">
                    <i class="bi bi-geo-alt-fill me-2"></i>Obtenir l'itinéraire
                </a>
                <a href="index.php" class="btn btn-primary rounded-pill px-4 ms-2">
                    <i class="bi bi-house-door me-2"></i>Retour à l'accueil
                </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Restaurant Élégance</h5>
                    <p>Une expérience gastronomique inoubliable avec des produits frais et des chefs talentueux.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Accueil</a></li>
                        <li><a href="menu.php" class="text-white">Menu</a></li>
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
        
        // Form validation
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            } else {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const spinner = btn.querySelector('.spinner-border');
                const text = btn.querySelector('.submit-text');
                
                text.textContent = 'Envoi en cours...';
                spinner.classList.remove('d-none');
                btn.disabled = true;
                
                setTimeout(() => {
                    text.textContent = 'Message envoyé !';
                    spinner.classList.add('d-none');
                    
                    const msg = document.getElementById('formMessage');
                    msg.textContent = 'Merci ! Votre message a bien été envoyé.';
                    msg.classList.remove('d-none', 'alert-danger');
                    msg.classList.add('alert-success');
                    
                    setTimeout(() => {
                        this.reset();
                        this.classList.remove('was-validated');
                        text.textContent = 'Envoyer le message';
                        btn.disabled = false;
                    }, 3000);
                }, 2000);
            }
            this.classList.add('was-validated');
        });
    </script>
</body>
</html>