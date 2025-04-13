<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Gérez votre profil, mettez à jour vos informations personnelles et consultez votre historique de commandes.">
    <meta name="keywords" content="profil, compte, restaurant, informations personnelles, historique commandes">
    <title>Profil - Gestion de Commandes Restaurant</title>
    
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
        .hero-profil {
            min-height: 30vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .profile-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            height: 100%;
        }
        .profile-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        .order-item {
            border-left: none;
            border-right: none;
            padding: 1rem 0;
            transition: background-color 0.2s;
        }
        .order-item:hover {
            background-color: #f8f9fa;
        }
        .order-item:first-child {
            border-top: none;
        }
        .btn-update {
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-update:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(13, 110, 253, 0.25);
        }
        .form-control:focus {
            border-color: #86b7fe;
            box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
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
        <section class="hero-profil py-5">
            <div class="container text-center">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-4">
                    <ol class="breadcrumb animate__animated animate__fadeIn bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-1"></i>Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mon Profil</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary animate__animated animate__fadeInDown">Mon Profil</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp">Gérez vos informations personnelles et consultez votre historique.</p>
                <a href="index.php" class="btn btn-outline-primary mt-3 animate__animated animate__fadeInUp">
                    <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </section>

        <!-- Section Profil -->
        <section class="container my-5">
            <div class="row g-4">
                <!-- Informations Personnelles -->
                <div class="col-lg-6">
                    <div class="card profile-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="h4 mb-0">Informations Personnelles</h2>
                                <button class="btn btn-sm btn-outline-secondary" id="editToggle">
                                    <i class="fas fa-edit me-1"></i>Modifier
                                </button>
                            </div>
                            
                            <form id="profileForm">
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Nom Complet</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-user text-muted"></i></span>
                                        <input type="text" class="form-control" id="name" name="name" value="Jean Dupont" required readonly>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" value="jean.dupont@example.com" required readonly>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="phone" class="form-label fw-semibold">Téléphone</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-phone text-muted"></i></span>
                                        <input type="tel" class="form-control" id="phone" name="phone" value="06 12 34 56 78" required readonly>
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="address" class="form-label fw-semibold">Adresse</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-map-marker-alt text-muted"></i></span>
                                        <textarea class="form-control" id="address" name="address" rows="2" required readonly>123 Rue de Paris, 75001 Paris</textarea>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-update w-100 d-none" id="submitBtn">
                                    <i class="fas fa-save me-2"></i>Mettre à jour
                                </button>
                                
                                <div id="formMessage" class="alert mt-3 mb-0 text-center d-none"></div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Historique des Commandes -->
                <div class="col-lg-6">
                    <div class="card profile-card">
                        <div class="card-body p-4">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h2 class="h4 mb-0">Historique des Commandes</h2>
                                <a href="commandes.php" class="btn btn-sm btn-outline-primary">Voir tout</a>
                            </div>
                            
                            <div class="list-group list-group-flush" id="orderHistory">
                                <div class="list-group-item order-item">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold">#CMD-2023-001</span>
                                        <span class="badge bg-success">Livré</span>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted small mb-2">
                                        <span>15/06/2023</span>
                                        <span>€42.50</span>
                                    </div>
                                    <p class="mb-0 small">2x Pizza Margherita, 1x Tiramisu</p>
                                </div>
                                
                                <div class="list-group-item order-item">
                                    <div class="d-flex justify-content-between align-items-center mb-2">
                                        <span class="fw-bold">#CMD-2023-002</span>
                                        <span class="badge bg-warning text-dark">En cours</span>
                                    </div>
                                    <div class="d-flex justify-content-between text-muted small mb-2">
                                        <span>10/06/2023</span>
                                        <span>€35.20</span>
                                    </div>
                                    <p class="mb-0 small">1x Salade César, 1x Lasagne</p>
                                </div>
                                
                                <div class="text-center py-3">
                                    <a href="commandes.php" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-history me-1"></i>Afficher plus de commandes
                                    </a>
                                </div>
                            </div>
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
                    loadScript('../assets/js/profile.js')
                ]);
            } catch (e) {
                console.error('Erreur de chargement des scripts:', e);
            }
        })();
    </script>
</body>
</html>