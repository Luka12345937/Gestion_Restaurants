<!DOCTYPE html>
<html lang="fr" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Découvrez notre galerie de photos et plongez dans l'ambiance de notre restaurant. Des plats savoureux aux moments conviviaux, tout est là.">
    <meta name="keywords" content="galerie, photos, restaurant, plats, ambiance">
    <title>Galerie | Restaurant Élégance</title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/img/logo.svg" type="image/svg+xml">
    
    <!-- Bootstrap 5 CSS + icônes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&family=Playfair+Display:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Lightbox CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
    
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
        
        .hero-gallery {
            background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('assets/img/gallery-bg.jpg') center/cover;
            color: white;
            padding: 150px 0 100px;
        }
        
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        
        .gallery-item img {
            transition: transform 0.3s ease;
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        
        .gallery-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }
        
        .gallery-item:hover img {
            transform: scale(1.05);
        }
        
        .gallery-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.7), transparent);
            color: white;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
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
            .hero-gallery {
                padding: 100px 0 60px;
            }
            
            .gallery-item img {
                height: 200px;
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
                <li class="breadcrumb-item active" aria-current="page">Galerie</li>
            </ol>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-gallery text-center">
        <div class="container">
            <h1 class="display-4 fw-bold" data-aos="fade-down">Notre Galerie</h1>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Découvrez nos plats, notre ambiance et nos moments inoubliables</p>
        </div>
    </section>

    <!-- Gallery Section -->
    <section class="py-5 my-5">
        <div class="container">
            <div class="row g-4">
                <!-- Photo 1 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo1.jpg" data-lightbox="gallery" data-title="Plat Signature">
                            <img src="assets/img/gallery/photo1-thumb.jpg" alt="Plat Signature">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Plat Signature</h5>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 2 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo2.jpg" data-lightbox="gallery" data-title="Ambiance Cosy">
                            <img src="assets/img/gallery/photo2-thumb.jpg" alt="Ambiance Cosy">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Ambiance Cosy</h5>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 3 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo3.jpg" data-lightbox="gallery" data-title="Équipe en Action">
                            <img src="assets/img/gallery/photo3-thumb.jpg" alt="Équipe en Action">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Équipe en Action</h5>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 4 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo4.jpg" data-lightbox="gallery" data-title="Dessert Maison">
                            <img src="assets/img/gallery/photo4-thumb.jpg" alt="Dessert Maison">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Dessert Maison</h5>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 5 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo5.jpg" data-lightbox="gallery" data-title="Salle à Manger">
                            <img src="assets/img/gallery/photo5-thumb.jpg" alt="Salle à Manger">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Salle à Manger</h5>
                            </div>
                        </a>
                    </div>
                </div>
                
                <!-- Photo 6 -->
                <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="gallery-item">
                        <a href="assets/img/gallery/photo6.jpg" data-lightbox="gallery" data-title="Cuisine Ouverte">
                            <img src="assets/img/gallery/photo6-thumb.jpg" alt="Cuisine Ouverte">
                            <div class="gallery-overlay">
                                <h5 class="mb-0">Cuisine Ouverte</h5>
                            </div>
                        </a>
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
            <h2 class="mb-4">Envie de vivre l'expérience ?</h2>
            <div class="d-flex justify-content-center gap-3">
                <a href="reservation.php" class="btn btn-light btn-lg rounded-pill px-4">Réserver une table</a>
                <a href="menu.php" class="btn btn-outline-light btn-lg rounded-pill px-4">Voir le menu</a>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
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
        
        // Lightbox configuration
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true,
            'albumLabel': "Image %1 sur %2"
        });
    </script>
</body>
</html>