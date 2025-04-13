<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Connectez-vous à votre compte pour gérer vos réservations et commandes. Accès sécurisé et personnalisé.">
    <meta name="keywords" content="connexion restaurant, compte client, accès sécurisé, gestion réservations">
    <title>Connexion | Restaurant Élégance</title>
    
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
        
        .hero-connexion {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/login-bg.jpg') center/cover;
            color: white;
            padding: 150px 0 100px;
        }
        
        .login-card {
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            padding: 30px;
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
        
        .social-login .btn {
            padding: 10px;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 5px;
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 1rem;
        }
        
        @media (max-width: 768px) {
            .hero-connexion {
                padding: 100px 0 60px;
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
                            <a class="nav-link active" href="connexion.php">Connexion</a>
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
                <li class="breadcrumb-item active" aria-current="page">Connexion</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-connexion text-center">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Connectez-vous</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Accédez à votre espace personnel</p>
        </div>
    </section>

    <!-- Login Form -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6" data-aos="fade-up">
                    <div class="login-card">
                        <h2 class="text-center mb-4">Identifiez-vous</h2>
                        <form id="loginForm" novalidate>
                            <div class="mb-4">
                                <label for="email" class="form-label">Adresse email</label>
                                <input type="email" class="form-control" id="email" name="email" required>
                                <div class="invalid-feedback">Veuillez entrer une adresse email valide.</div>
                            </div>
                            <div class="mb-4">
                                <label for="password" class="form-label">Mot de passe</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                                <div class="invalid-feedback">Veuillez entrer votre mot de passe.</div>
                            </div>
                            <div class="mb-4 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                                <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary py-3">
                                    <span class="submit-text">Se connecter</span>
                                    <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                </button>
                            </div>
                        </form>
                        
                        <div id="formMessage" class="mt-3 alert d-none"></div>
                        
                        <div class="text-center mt-4">
                            <a href="mot_de_passe_oublie.php" class="text-decoration-none">Mot de passe oublié ?</a>
                        </div>
                        
                        <div class="text-center mt-3">
                            <p>Pas encore de compte ? <a href="inscription.php" class="text-primary fw-bold">Créer un compte</a></p>
                        </div>
                        
                        <div class="position-relative my-4">
                            <hr>
                            <div class="position-absolute top-50 start-50 translate-middle bg-white px-3">Ou</div>
                        </div>
                        
                        <div class="text-center social-login">
                            <p class="mb-3">Se connecter avec :</p>
                            <a href="#" class="btn btn-outline-primary"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="btn btn-outline-danger"><i class="bi bi-google"></i></a>
                            <a href="#" class="btn btn-outline-dark"><i class="bi bi-apple"></i></a>
                        </div>
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
                        <li><a href="connexion.php" class="text-white">Connexion</a></li>
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
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            if (!this.checkValidity()) {
                e.preventDefault();
                e.stopPropagation();
            } else {
                e.preventDefault();
                const btn = this.querySelector('button[type="submit"]');
                const spinner = btn.querySelector('.spinner-border');
                const text = btn.querySelector('.submit-text');
                
                // Show loading state
                text.textContent = 'Connexion en cours...';
                spinner.classList.remove('d-none');
                btn.disabled = true;
                
                // Simulate form submission (replace with actual AJAX call)
                setTimeout(() => {
                    // Hide loading state
                    text.textContent = 'Connexion réussie !';
                    spinner.classList.add('d-none');
                    
                    // Show success message
                    const msg = document.getElementById('formMessage');
                    msg.textContent = 'Vous êtes maintenant connecté. Redirection en cours...';
                    msg.classList.remove('d-none', 'alert-danger');
                    msg.classList.add('alert-success');
                    
                    // Redirect after delay
                    setTimeout(() => {
                        window.location.href = 'mon-compte.php';
                    }, 2000);
                }, 2000);
            }
            this.classList.add('was-validated');
        });
    </script>
</body>
</html>