<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Passez votre commande en ligne facilement. Choisissez vos plats préférés et finalisez votre commande en quelques clics.">
    <meta name="keywords" content="commande, restaurant, plats, livraison, en ligne">
    <title>Commande - Gestion de Commandes Restaurant</title>
    
    <!-- Preload des ressources critiques -->
    <link rel="preload" href="../assets/img/logo.svg" as="image">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="../assets/css/styles.css" as="style">
    
    <!-- Favicon optimisé -->
    <link rel="icon" href="../assets/img/logo.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="../assets/img/logo-180x180.png">
    
    <!-- Bootstrap 5 CSS avec SRI -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Font Awesome avec SRI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous">
    
    <!-- Animate.css avec SRI -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
          integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous">
    
    <!-- CSS critique inliné -->
    <style>
        .hero-commande {
            min-height: 30vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .menu-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .menu-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        .menu-card img {
            border-radius: 12px 12px 0 0;
            height: 180px;
            object-fit: cover;
        }
        .cart-card {
            position: sticky;
            top: 20px;
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        .cart-item {
            border-left: none;
            border-right: none;
            padding: 1rem 0;
        }
        .cart-item:first-child {
            border-top: none;
        }
        .addToCart {
            transition: all 0.3s;
        }
        .addToCart:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.25);
        }
        #checkoutBtn {
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        #checkoutBtn:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(25, 135, 84, 0.25);
        }
    </style>
    
    <!-- CSS différé -->
    <link rel="stylesheet" href="../assets/css/styles.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="../assets/css/styles.css"></noscript>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header avec suppression des warnings -->
    <?php @include '../includes/header.php'; ?>

    <main class="flex-grow-1">
        <!-- Hero Section avec breadcrumb -->
        <section class="hero-commande py-5">
            <div class="container text-center">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-4">
                    <ol class="breadcrumb animate__animated animate__fadeIn bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-1"></i>Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Commande</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary animate__animated animate__fadeInDown">Passer une Commande</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp">Choisissez vos plats préférés et finalisez votre commande en quelques clics.</p>
                <a href="index.php" class="btn btn-outline-primary mt-3 animate__animated animate__fadeInUp">
                    <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </section>

        <!-- Menu et Panier -->
        <section class="container my-5">
            <div class="row">
                <!-- Menu -->
                <div class="col-lg-8 mb-4 mb-lg-0">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h2 class="h3 mb-0">Notre Menu</h2>
                        <div class="btn-group btn-group-sm">
                            <button class="btn btn-outline-primary active">Tous</button>
                            <button class="btn btn-outline-primary">Entrées</button>
                            <button class="btn btn-outline-primary">Plats</button>
                            <button class="btn btn-outline-primary">Desserts</button>
                        </div>
                    </div>
                    
                    <div class="row g-4" id="menuItems">
                        <!-- Exemple d'élément de menu -->
                        <div class="col-md-6 col-lg-6">
                            <div class="card menu-card">
                                <img src="../assets/img/menu/entree1.jpg" class="card-img-top" alt="Bruschetta" loading="lazy">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-start mb-2">
                                        <h3 class="h5 card-title mb-0">Bruschetta</h3>
                                        <span class="badge bg-primary">Entrée</span>
                                    </div>
                                    <p class="card-text text-muted small">Tomates fraîches, basilic, mozzarella, huile d'olive sur pain grillé.</p>
                                    <div class="d-flex justify-content-between align-items-center mt-3">
                                        <p class="card-text fw-bold mb-0">12 €</p>
                                        <button class="btn btn-primary btn-sm addToCart" data-id="1" data-name="Bruschetta" data-price="12">
                                            <i class="fas fa-plus me-1"></i>Ajouter
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Plus d'éléments de menu peuvent être ajoutés ici -->
                    </div>
                </div>

                <!-- Panier -->
                <div class="col-lg-4">
                    <div class="card cart-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="h3 mb-0">Votre Panier</h2>
                                <span class="badge bg-primary rounded-pill" id="cartCount">0</span>
                            </div>
                            
                            <ul class="list-group list-group-flush mb-3" id="cartItems">
                                <li class="list-group-item text-center py-4 text-muted" id="emptyCartMessage">
                                    <i class="fas fa-shopping-cart fa-2x mb-3"></i>
                                    <p class="mb-0">Votre panier est vide</p>
                                </li>
                            </ul>
                            
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <p class="mb-0 fw-bold">Total:</p>
                                <p class="mb-0 fw-bold fs-5" id="cartTotal">€0.00</p>
                            </div>
                            
                            <button class="btn btn-success w-100" id="checkoutBtn" disabled>
                                <i class="fas fa-check-circle me-2"></i>Valider la Commande
                            </button>
                            
                            <a href="index.php" class="btn btn-outline-secondary w-100 mt-2">
                                <i class="fas fa-home me-2"></i>Retour à l'accueil
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer avec suppression des warnings -->
    <?php @include '../includes/footer.php'; ?>

    <!-- Chargement optimisé des scripts -->
    <script>
        (function() {
            // Fonction pour charger les scripts de manière sécurisée
            function loadScript(src, integrity, crossorigin) {
                return new Promise(function(resolve, reject) {
                    var script = document.createElement('script');
                    script.src = src;
                    if (integrity) script.integrity = integrity;
                    if (crossorigin) script.crossOrigin = crossorigin;
                    script.defer = true;
                    script.onload = resolve;
                    script.onerror = function() {
                        console.error('Échec du chargement du script: ' + src);
                        reject();
                    };
                    document.body.appendChild(script);
                });
            }

            // Chargement des scripts essentiels
            try {
                Promise.all([
                    loadScript('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js',
                             'sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3', 'anonymous'),
                    loadScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js',
                             'sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS', 'anonymous'),
                    loadScript('../assets/js/cart.js')
                ]);
            } catch (e) {
                console.error('Erreur de chargement des scripts:', e);
            }
        })();
    </script>
</body>
</html>