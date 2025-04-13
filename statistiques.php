<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Consultez les statistiques détaillées de notre restaurant. Commandes, réservations, chiffre d'affaires et plus encore.">
    <meta name="keywords" content="statistiques, restaurant, commandes, réservations, chiffre d'affaires">
    <title>Statistiques - Gestion de Commandes Restaurant</title>
    
    <!-- Preload des ressources critiques -->
    <link rel="preload" href="../assets/img/logo.svg" as="image">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="../assets/css/styles.css" as="style">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/chart.js" as="script">
    
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
        .hero-statistiques {
            min-height: 30vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .stats-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.12);
        }
        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: #0d6efd;
            opacity: 0.8;
        }
        .chart-container {
            position: relative;
            height: 100%;
            min-height: 300px;
        }
        .table-responsive {
            border-radius: 12px;
            overflow: hidden;
        }
        .table {
            margin-bottom: 0;
        }
        .table thead th {
            background-color: #f8f9fa;
            border-bottom-width: 1px;
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
        <section class="hero-statistiques py-5">
            <div class="container text-center">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-4">
                    <ol class="breadcrumb animate__animated animate__fadeIn bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-1"></i>Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Statistiques</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary animate__animated animate__fadeInDown">Statistiques</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp">Consultez les performances de notre restaurant en temps réel.</p>
                <div class="d-flex justify-content-center gap-2 mt-3">
                    <a href="index.php" class="btn btn-outline-primary animate__animated animate__fadeInUp">
                        <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                    </a>
                    <button class="btn btn-outline-secondary animate__animated animate__fadeInUp" id="refreshStats">
                        <i class="fas fa-sync-alt me-2"></i>Actualiser
                    </button>
                </div>
            </div>
        </section>

        <!-- Section Statistiques -->
        <section class="container my-5">
            <div class="row g-4">
                <!-- Statistiques Rapides -->
                <div class="col-md-4">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-shopping-cart stat-icon"></i>
                            <h3 class="h5">Commandes Total</h3>
                            <p class="display-6 fw-bold text-primary" id="totalOrders">1,200</p>
                            <small class="text-muted">+12% ce mois-ci</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-utensils stat-icon"></i>
                            <h3 class="h5">Réservations Total</h3>
                            <p class="display-6 fw-bold text-primary" id="totalReservations">450</p>
                            <small class="text-muted">+8% ce mois-ci</small>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="card stats-card h-100">
                        <div class="card-body text-center py-4">
                            <i class="fas fa-chart-line stat-icon"></i>
                            <h3 class="h5">Chiffre d'Affaires</h3>
                            <p class="display-6 fw-bold text-primary" id="totalRevenue">€25,000</p>
                            <small class="text-muted">+15% ce mois-ci</small>
                        </div>
                    </div>
                </div>

                <!-- Graphique des Commandes Mensuelles -->
                <div class="col-lg-8">
                    <div class="card stats-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="h5 mb-0">Commandes Mensuelles</h3>
                                <div class="btn-group btn-group-sm">
                                    <button class="btn btn-outline-primary active">Mois</button>
                                    <button class="btn btn-outline-primary">Semaine</button>
                                    <button class="btn btn-outline-primary">Jour</button>
                                </div>
                            </div>
                            <div class="chart-container">
                                <canvas id="monthlyOrdersChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Graphique des Plats les plus Commandés -->
                <div class="col-lg-4">
                    <div class="card stats-card h-100">
                        <div class="card-body">
                            <h3 class="h5 mb-4">Plats les plus Commandés</h3>
                            <div class="chart-container">
                                <canvas id="topDishesChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tableau des Réservations Récentes -->
                <div class="col-12">
                    <div class="card stats-card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h3 class="h5 mb-0">Réservations Récentes</h3>
                                <a href="reservations.php" class="btn btn-sm btn-outline-primary">Voir toutes</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover" id="recentReservations">
                                    <thead>
                                        <tr>
                                            <th>Nom</th>
                                            <th>Date</th>
                                            <th>Heure</th>
                                            <th>Personnes</th>
                                            <th>Statut</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="5" class="text-center py-4">
                                                <div class="spinner-border text-primary" role="status">
                                                    <span class="visually-hidden">Chargement...</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
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
                    loadScript('https://cdn.jsdelivr.net/npm/chart.js',
                             'sha512-X0CDva2yk5YgG5G3WIQWZ9R1/83QY+mZqMq3gnHihkOw0K7JFtFED5ZgIqP1XPeXBIjQKXQ4x9CRQdZ4y9XQQ==', 'anonymous'),
                    loadScript('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js',
                             'sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3', 'anonymous'),
                    loadScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js',
                             'sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS', 'anonymous'),
                    loadScript('../assets/js/statistics.js')
                ]);
            } catch (e) {
                console.error('Erreur de chargement des scripts:', e);
            }
        })();
    </script>
</body>
</html>