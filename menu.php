<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre menu gastronomique. Des plats traditionnels aux créations originales, préparés avec des produits frais et locaux.">
    <meta name="keywords" content="menu restaurant, carte gastronomique, plats, entrées, desserts">
    <title>Menu | Restaurant Élégance</title>
    
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
        
        .hero-menu {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/menu-bg.jpg') center/cover;
            color: white;
            padding: 150px 0 100px;
        }
        
        .menu-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .menu-card img {
            height: 200px;
            object-fit: cover;
            transition: transform 0.3s ease;
        }
        
        .menu-card:hover img {
            transform: scale(1.05);
        }
        
        .price-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 600;
        }
        
        .filter-btn {
            margin: 5px;
            transition: all 0.3s ease;
        }
        
        .filter-btn.active {
            background-color: var(--primary);
            color: white;
            border-color: var(--primary);
        }
        
        .menu-section {
            margin-bottom: 50px;
        }
        
        .section-title {
            position: relative;
            margin-bottom: 30px;
            padding-bottom: 10px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .breadcrumb {
            background-color: transparent;
            padding: 0.75rem 1rem;
        }
        
        @media (max-width: 768px) {
            .hero-menu {
                padding: 100px 0 60px;
            }
            
            .menu-card img {
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
                            <a class="nav-link active" href="menu.php">Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gallery.php">Galerie</a>
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
                <li class="breadcrumb-item active" aria-current="page">Menu</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-menu text-center">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Notre Menu</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Découvrez nos plats savoureux et variés, préparés avec passion</p>
        </div>
    </section>

    <!-- Menu Filters -->
    <section class="py-4">
        <div class="container text-center">
            <div class="btn-group flex-wrap" role="group">
                <button type="button" class="btn btn-outline-primary filter-btn active" data-filter="all">Tout voir</button>
                <button type="button" class="btn btn-outline-primary filter-btn" data-filter="entree">Entrées</button>
                <button type="button" class="btn btn-outline-primary filter-btn" data-filter="plat">Plats principaux</button>
                <button type="button" class="btn btn-outline-primary filter-btn" data-filter="dessert">Desserts</button>
                <button type="button" class="btn btn-outline-primary filter-btn" data-filter="boisson">Boissons</button>
            </div>
        </div>
    </section>

    <!-- Menu Sections -->
    <section class="py-5">
        <div class="container">
            <!-- Entrées -->
            <div class="menu-section" id="entrees">
                <h2 class="section-title" data-aos="fade-right">Entrées</h2>
                <div class="row g-4">
                    <!-- Entrée 1 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="entree" data-aos="fade-up">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/entree1.jpg" class="card-img-top" alt="Tartare de saumon">
                                <div class="price-badge">12 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Tartare de saumon</h3>
                                <p class="card-text">Saumon frais, avocat, citron vert, aneth et toast</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Entrée 2 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="entree" data-aos="fade-up" data-aos-delay="100">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/entree2.jpg" class="card-img-top" alt="Foie gras maison">
                                <div class="price-badge">18 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Foie gras maison</h3>
                                <p class="card-text">Accompagné de confit d'oignons et pain brioché toasté</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Entrée 3 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="entree" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/entree3.jpg" class="card-img-top" alt="Salade César">
                                <div class="price-badge">14 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Salade César</h3>
                                <p class="card-text">Laitue romaine, croûtons, parmesan et sauce césar maison</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Plats Principaux -->
            <div class="menu-section" id="plats">
                <h2 class="section-title" data-aos="fade-right">Plats Principaux</h2>
                <div class="row g-4">
                    <!-- Plat 1 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="plat" data-aos="fade-up">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/plat1.jpg" class="card-img-top" alt="Filet de boeuf">
                                <div class="price-badge">32 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Filet de boeuf</h3>
                                <p class="card-text">Avec gratin dauphinois et sauce au vin rouge</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plat 2 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="plat" data-aos="fade-up" data-aos-delay="100">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/plat2.jpg" class="card-img-top" alt="Risotto aux champignons">
                                <div class="price-badge">24 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Risotto aux champignons</h3>
                                <p class="card-text">Crémeux avec cèpes et parmesan Reggiano</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Plat 3 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="plat" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/plat3.jpg" class="card-img-top" alt="Saumon grillé">
                                <div class="price-badge">28 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Saumon grillé</h3>
                                <p class="card-text">Avec purée de céleri et sauce hollandaise</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Desserts -->
            <div class="menu-section" id="desserts">
                <h2 class="section-title" data-aos="fade-right">Desserts</h2>
                <div class="row g-4">
                    <!-- Dessert 1 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="dessert" data-aos="fade-up">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/dessert1.jpg" class="card-img-top" alt="Fondant au chocolat">
                                <div class="price-badge">10 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Fondant au chocolat</h3>
                                <p class="card-text">Cœur coulant, glace vanille de Madagascar</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dessert 2 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="dessert" data-aos="fade-up" data-aos-delay="100">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/dessert2.jpg" class="card-img-top" alt="Tarte tatin">
                                <div class="price-badge">9 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Tarte tatin</h3>
                                <p class="card-text">Pommes caramélisées, crème fraîche</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Dessert 3 -->
                    <div class="col-lg-4 col-md-6 menu-item" data-category="dessert" data-aos="fade-up" data-aos-delay="200">
                        <div class="menu-card">
                            <div class="position-relative">
                                <img src="assets/img/menu/dessert3.jpg" class="card-img-top" alt="Crème brûlée">
                                <div class="price-badge">8 €</div>
                            </div>
                            <div class="card-body">
                                <h3 class="h5 card-title">Crème brûlée</h3>
                                <p class="card-text">Vanille Bourbon, caramel croustillant</p>
                            </div>
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

    <!-- Call to Action -->
    <section class="py-5 bg-dark text-white">
        <div class="container text-center py-4" data-aos="fade-up">
            <h2 class="mb-4">Prêt à commander ?</h2>
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
                    <p>Une expérience gastronomique inoubliable.</p>
                </div>
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5>Navigation</h5>
                    <ul class="list-unstyled">
                        <li><a href="index.php" class="text-white">Accueil</a></li>
                        <li><a href="menu.php" class="text-white">Menu</a></li>
                        <li><a href="gallery.php" class="text-white">Galerie</a></li>
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
        
        // Menu filter functionality
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Update active button
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                this.classList.add('active');
                
                const filter = this.getAttribute('data-filter');
                
                // Filter items
                document.querySelectorAll('.menu-item').forEach(item => {
                    if (filter === 'all' || item.getAttribute('data-category') === filter) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });
    </script>
</body>
</html>