<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Commandez en ligne dans notre restaurant gastronomique. Découvrez notre menu varié et profitez d'une expérience culinaire unique.">
    <meta name="keywords" content="restaurant, gastronomie, commande en ligne, menu premium, livraison rapide">
    <title>Restaurant Élégance | Expérience Culinaire Unique</title>
    
    <!-- Favicon animé -->
    <link rel="icon" href="assets/img/logo-animated.svg" type="image/svg+xml">
    
    <!-- Bootstrap 5 CSS + icônes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts (Montserrat + Playfair Display) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary: #ff6b6b;
            --primary-light: #ff8e8e;
            --secondary: #4ecdc4;
            --dark: #292f36;
            --light: #f7fff7;
            --accent: #ffe66d;
        }
        
        body {
            font-family: 'Montserrat', sans-serif;
            overflow-x: hidden;
            background-color: var(--light);
            color: var(--dark);
        }
        
        h1, h2, h3, h4, h5 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
        }
        
        /* Navbar stylée */
        .navbar {
            transition: all 0.3s ease;
        }
        
        .navbar.scrolled {
            background-color: rgba(255, 255, 255, 0.95) !important;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(10px);
        }
        
        .nav-link {
            position: relative;
            margin: 0 10px;
            font-weight: 500;
        }
        
        .nav-link:after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: 0;
            left: 0;
            background-color: var(--primary);
            transition: width 0.3s ease;
        }
        
        .nav-link:hover:after,
        .nav-link.active:after {
            width: 100%;
        }
        
        /* Hero section avec dégradé animé */
        .hero {
            background: linear-gradient(-45deg, #ff9a9e, #fad0c4, #fbc2eb, #a6c1ee);
            background-size: 400% 400%;
            animation: gradientBG 15s ease infinite;
            position: relative;
            overflow: hidden;
            padding: 100px 0;
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .hero:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('assets/img/pattern.png') repeat;
            opacity: 0.05;
            pointer-events: none;
        }
        
        .hero h1 {
            font-size: 4rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
        }
        
        .hero p {
            font-size: 1.5rem;
            max-width: 700px;
            margin: 0 auto 2rem;
        }
        
        /* Boutons stylés */
        .btn-primary {
            background-color: var(--primary);
            border: none;
            padding: 12px 30px;
            font-weight: 600;
            letter-spacing: 1px;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(255, 107, 107, 0.4);
        }
        
        .btn-primary:hover {
            background-color: var(--primary-light);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(255, 107, 107, 0.6);
        }
        
        .btn-outline-light {
            border: 2px solid white;
            color: white;
            background: transparent;
            transition: all 0.3s ease;
        }
        
        .btn-outline-light:hover {
            background: white;
            color: var(--primary);
        }
        
        /* Cards de features */
        .feature-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
            border: 1px solid rgba(0, 0, 0, 0.03);
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
        }
        
        .feature-icon {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--primary), var(--primary-light));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
        }
        
        /* Section CTA */
        .cta-section {
            background: linear-gradient(135deg, var(--dark), #3a4750);
            position: relative;
            overflow: hidden;
            padding: 80px 0;
        }
        
        .cta-section:before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('assets/img/dots.png') repeat;
            opacity: 0.05;
            animation: rotate 60s linear infinite;
        }
        
        @keyframes rotate {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* Footer */
        footer {
            background: var(--dark);
            position: relative;
            padding: 60px 0 30px;
        }
        
        .social-icon {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin: 0 8px;
            transition: all 0.3s ease;
        }
        
        .social-icon:hover {
            background: var(--primary);
            transform: translateY(-5px);
        }
        
        /* Animation du logo */
        .logo {
            transition: all 0.5s ease;
            animation: pulse 2s infinite alternate;
        }
        
        @keyframes pulse {
            from { transform: scale(1); }
            to { transform: scale(1.05); }
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .hero h1 {
                font-size: 2.5rem;
            }
            
            .hero p {
                font-size: 1.2rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header avec Navigation -->
    <header>
        <nav class="navbar navbar-expand-lg fixed-top py-3" id="mainNav">
            <div class="container">
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo-animated.svg" alt="Logo Restaurant Élégance" width="60" height="60" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list" style="font-size: 1.8rem; color: var(--primary);"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link active" href="index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="menu.php">Menu</a></li>
                        <li class="nav-item"><a class="nav-link" href="gallery.php">Galerie</a></li>
                        <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                        <li class="nav-item ms-lg-3 my-2 my-lg-0">
                            <a href="reservation.php" class="btn btn-primary rounded-pill px-4">Réserver</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero d-flex align-items-center text-center">
        <div class="container" data-aos="fade-up" data-aos-duration="1000">
            <h1 class="text-white">Une Expérience Culinaire Mémorable</h1>
            <p class="text-white mb-4">Découvrez des saveurs exquises préparées avec passion par nos chefs étoilés</p>
            <div class="d-flex justify-content-center gap-3">
                <a href="menu.php" class="btn btn-light btn-lg rounded-pill px-4">Notre Menu</a>
                <a href="reservation.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Réserver</a>
            </div>
        </div>
        
        <!-- Floating food items -->
        <img src="assets/img/food1.png" alt="" class="position-absolute floating" style="top: 20%; left: 5%; width: 80px; animation: float 6s ease-in-out infinite;">
        <img src="assets/img/food2.png" alt="" class="position-absolute floating" style="top: 70%; left: 10%; width: 100px; animation: float 8s ease-in-out infinite 2s;">
        <img src="assets/img/food3.png" alt="" class="position-absolute floating" style="top: 30%; right: 8%; width: 90px; animation: float 7s ease-in-out infinite 1s;">
    </section>

    <!-- Features Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-3">Pourquoi Nous Choisir ?</h2>
                <p class="lead text-muted">Une expérience gastronomique inoubliable</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-egg-fried"></i>
                        </div>
                        <h3 class="h4 text-center mb-3">Ingrédients Frais</h3>
                        <p class="text-center text-muted">Nous sélectionnons rigoureusement des produits locaux et de saison pour des plats toujours frais et savoureux.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-star"></i>
                        </div>
                        <h3 class="h4 text-center mb-3">Chefs Étoilés</h3>
                        <p class="text-center text-muted">Notre équipe de chefs primés crée des plats innovants qui éveilleront tous vos sens.</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="feature-icon">
                            <i class="bi bi-heart"></i>
                        </div>
                        <h3 class="h4 text-center mb-3">Ambiance Unique</h3>
                        <p class="text-center text-muted">Un cadre élégant et chaleureux pour transformer chaque repas en moment exceptionnel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Menu Preview Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-3">Nos Spécialités</h2>
                <p class="lead text-muted">Découvrez quelques-unes de nos créations signature</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="assets/img/dish1.jpg" class="card-img-top" alt="Plat signature" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Risotto aux Truffes</h5>
                            <p class="card-text text-muted">Risotto crémeux avec truffes noires fraîches et parmesan vieilli</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">28€</span>
                                <button class="btn btn-sm btn-outline-primary">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="assets/img/dish2.jpg" class="card-img-top" alt="Plat signature" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Filet de Boeuf Wagyu</h5>
                            <p class="card-text text-muted">Filet de boeuf Wagyu A5, sauce au vin rouge et légumes de saison</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">42€</span>
                                <button class="btn btn-sm btn-outline-primary">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="assets/img/dish3.jpg" class="card-img-top" alt="Plat signature" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Saumon Mi-Cuit</h5>
                            <p class="card-text text-muted">Saumon norvégien mi-cuit, écrasé de pommes de terre et émulsion citronnée</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">32€</span>
                                <button class="btn btn-sm btn-outline-primary">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 rounded-4 overflow-hidden shadow-sm h-100">
                        <img src="assets/img/dish4.jpg" class="card-img-top" alt="Plat signature" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title">Délice Chocolat</h5>
                            <p class="card-text text-muted">Fondant au chocolat noir, glace à la vanille de Madagascar et tuile croustillante</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="text-primary fw-bold">16€</span>
                                <button class="btn btn-sm btn-outline-primary">Commander</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="text-center mt-5" data-aos="fade-up">
                <a href="menu.php" class="btn btn-primary btn-lg rounded-pill px-4">Voir Tout le Menu</a>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold mb-3">Ce Que Disent Nos Clients</h2>
                <p class="lead text-muted">Des expériences culinaires mémorables</p>
            </div>
            
            <div class="row g-4">
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/img/client1.jpg" class="rounded-circle me-3" width="60" height="60" alt="Client">
                            <div>
                                <h5 class="mb-0">Sophie Martin</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">"Une expérience gastronomique exceptionnelle ! Le risotto aux truffes est tout simplement divin. Service impeccable et cadre raffiné."</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/img/client2.jpg" class="rounded-circle me-3" width="60" height="60" alt="Client">
                            <div>
                                <h5 class="mb-0">Thomas Leroy</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-half"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">"Le filet de boeuf Wagyu était à tomber par terre. La cuisson parfaite et les accompagnements sublimaient ce plat déjà exceptionnel."</p>
                    </div>
                </div>
                
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="p-4 bg-white rounded-4 shadow-sm h-100">
                        <div class="d-flex align-items-center mb-3">
                            <img src="assets/img/client3.jpg" class="rounded-circle me-3" width="60" height="60" alt="Client">
                            <div>
                                <h5 class="mb-0">Camille Dubois</h5>
                                <div class="text-warning">
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                    <i class="bi bi-star-fill"></i>
                                </div>
                            </div>
                        </div>
                        <p class="text-muted">"Un anniversaire inoubliable grâce à l'équipe de ce restaurant. Attentionné, professionnel et des plats d'une qualité rare. À refaire sans hésiter !"</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta-section py-5 text-white">
        <div class="container text-center position-relative">
            <h2 class="display-5 fw-bold mb-4" data-aos="fade-up">Prêt pour une Expérience Culinaire Unique ?</h2>
            <p class="lead mb-5" data-aos="fade-up" data-aos-delay="100">Réservez votre table dès maintenant et préparez-vous à un voyage gustatif exceptionnel</p>
            <div data-aos="fade-up" data-aos-delay="200">
            <a href="connexion.php" class="btn btn-outline-light btn-lg rounded-pill px-4">connexion</a>
                <a href="reservation.php" class="btn btn-light btn-lg rounded-pill px-4 me-3">Réserver</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Nous Contacter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4" data-aos="fade-up">
                    <img src="assets/img/logo-white.svg" alt="Logo Restaurant Élégance" width="80" class="mb-3">
                    <p>Restaurant Élégance - Une expérience gastronomique inoubliable avec des produits frais et des chefs talentueux.</p>
                    <div class="mt-4">
                        <a href="#" class="social-icon me-2"><i class="bi bi-facebook"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-twitter"></i></a>
                        <a href="#" class="social-icon me-2"><i class="bi bi-tiktok"></i></a>
                        <a href="#" class="social-icon"><i class="bi bi-pinterest"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <h5 class="text-white mb-4">Navigation</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="index.php" class="text-white-50 text-decoration-none">Accueil</a></li>
                        <li class="mb-2"><a href="menu.php" class="text-white-50 text-decoration-none">Menu</a></li>
                        <li class="mb-2"><a href="gallery.php" class="text-white-50 text-decoration-none">Galerie</a></li>
                        <li class="mb-2"><a href="about.php" class="text-white-50 text-decoration-none">À Propos</a></li>
                        <li class="mb-2"><a href="contact.php" class="text-white-50 text-decoration-none">Contact</a></li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <h5 class="text-white mb-4">Horaires</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2">Lundi - Vendredi: 11h30 - 14h30 / 19h - 23h</li>
                        <li class="mb-2">Samedi: 12h - 15h / 19h - 23h30</li>
                        <li class="mb-2">Dimanche: 12h - 15h</li>
                    </ul>
                </div>
                
                <div class="col-lg-3 col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <h5 class="text-white mb-4">Contact</h5>
                    <ul class="list-unstyled text-white-50">
                        <li class="mb-2"><i class="bi bi-geo-alt-fill me-2 text-primary"></i> 12 Rue Gastronomique, 75000 Paris</li>
                        <li class="mb-2"><i class="bi bi-telephone-fill me-2 text-primary"></i> +33 1 23 45 67 89</li>
                        <li class="mb-2"><i class="bi bi-envelope-fill me-2 text-primary"></i> contact@restaurant-elegance.com</li>
                    </ul>
                </div>
            </div>
            
            <hr class="my-4 bg-white-10">
            
            <div class="text-center pt-3">
                <p class="text-white-50 mb-0">&copy; 2023 Restaurant Élégance. Tous droits réservés.</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top Button -->
    <a href="#" class="btn btn-primary rounded-circle p-3 position-fixed bottom-0 end-0 m-4" id="backToTop" style="display: none;">
        <i class="bi bi-arrow-up"></i>
    </a>

    <!-- Scripts -->
    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- GSAP for advanced animations -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 100) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Back to top button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (window.scrollY > 300) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });
        
        document.getElementById('backToTop').addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Floating animation for food items
        gsap.to(".floating", {
            y: 20,
            duration: 3,
            repeat: -1,
            yoyo: true,
            ease: "sine.inOut"
        });
    </script>
</body>
</html>