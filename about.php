<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez l'histoire, l'équipe et les valeurs de notre restaurant. Une expérience culinaire unique depuis 2010.">
    <meta name="keywords" content="restaurant, histoire, équipe, valeurs, cuisine">
    <title>À Propos | Restaurant Élégance</title>
    
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
        
        .hero-about {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/about-bg.jpg') center/cover;
            color: white;
            padding: 150px 0 100px;
        }
        
        .value-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .value-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .team-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border: 5px solid white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
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
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 1rem;
        }
        
        @media (max-width: 768px) {
            .hero-about {
                padding: 100px 0 60px;
            }
            
            .team-img {
                width: 150px;
                height: 150px;
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
                            <a class="nav-link active" href="about.php">À Propos</a>
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
                <li class="breadcrumb-item active" aria-current="page">À Propos</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-about text-center">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Notre Histoire</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Découvrez ce qui fait de nous un restaurant unique</p>
        </div>
    </section>

    <!-- Notre Histoire Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row align-items-center g-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <img src="assets/img/restaurant-history.jpg" alt="Histoire du Restaurant" class="img-fluid rounded shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <h2 class="mb-4">Une Passion depuis 2010</h2>
                    <p class="lead">Fondé en 2010, notre restaurant est né d'une passion pour la cuisine authentique et généreuse.</p>
                    <p>Depuis, nous nous engageons à offrir des plats préparés avec des ingrédients frais et locaux, dans une ambiance chaleureuse et conviviale. Notre mission est de faire vivre à nos clients une expérience culinaire inoubliable, où chaque plat raconte une histoire.</p>
                    <a href="menu.php" class="btn btn-outline-primary mt-3">Découvrir notre menu</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Notre Équipe Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2>Notre Équipe</h2>
                <p class="lead">Des professionnels passionnés à votre service</p>
            </div>
            
            <div class="row g-4 justify-content-center">
                <!-- Membre 1 -->
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
                    <img src="assets/img/chef1.jpg" alt="Chef 1" class="team-img rounded-circle mb-3">
                    <h3 class="h4">Jean Dupont</h3>
                    <p class="text-muted">Chef Exécutif</p>
                    <p class="small">15 ans d'expérience dans les plus grandes maisons</p>
                </div>
                <!-- Membre 2 -->
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/chef2.jpg" alt="Chef 2" class="team-img rounded-circle mb-3">
                    <h3 class="h4">Marie Martin</h3>
                    <p class="text-muted">Pâtissière</p>
                    <p class="small">Spécialiste des desserts innovants</p>
                </div>
                <!-- Membre 3 -->
                <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                    <img src="assets/img/manager.jpg" alt="Manager" class="team-img rounded-circle mb-3">
                    <h3 class="h4">Pierre Leroy</h3>
                    <p class="text-muted">Gérant</p>
                    <p class="small">Garant de votre expérience inoubliable</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Nos Valeurs Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2>Nos Valeurs</h2>
                <p class="lead">Les principes qui guident notre travail quotidien</p>
            </div>
            
            <div class="row g-4">
                <!-- Valeur 1 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-card text-center">
                        <i class="bi bi-tree-fill text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h5">Produits Locaux</h3>
                        <p>Nous privilégions les ingrédients locaux et de saison pour garantir la fraîcheur et la qualité de nos plats.</p>
                    </div>
                </div>
                <!-- Valeur 2 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-card text-center">
                        <i class="bi bi-heart-fill text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h5">Passion</h3>
                        <p>Chaque plat est préparé avec passion et attention aux détails pour vous offrir une expérience unique.</p>
                    </div>
                </div>
                <!-- Valeur 3 -->
                <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-card text-center">
                        <i class="bi bi-people-fill text-primary mb-3" style="font-size: 2.5rem;"></i>
                        <h3 class="h5">Convivialité</h3>
                        <p>Nous croyons en la puissance des repas partagés pour créer des moments mémorables.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white">
        <div class="container text-center py-4" data-aos="fade-up">
            <h2 class="mb-4">Prêt à vivre l'expérience ?</h2>
            <div class="d-flex justify-content-center gap-3">
                <a href="reservation.php" class="btn btn-light btn-lg rounded-pill px-4">Réserver une table</a>
                <a href="contact.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Nous contacter</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Restaurant Élégance</h5>
                    <p>Une expérience gastronomique inoubliable depuis 2010.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Accueil</a></li>
                        <li><a href="menu.php" class="text-white">Menu</a></li>
                        <li><a href="about.php" class="text-white">À Propos</a></li>
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
    </script>
</body>
</html>