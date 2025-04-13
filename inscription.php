<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inscrivez-vous pour créer votre compte et profiter de nos services. Inscription rapide et sécurisée.">
    <meta name="keywords" content="inscription, compte, restaurant, sécurisé">
    <title>Inscription - Gestion de Commandes Restaurant</title>
    
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
        .hero-inscription {
            min-height: 30vh;
            display: flex;
            align-items: center;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .registration-card {
            border-radius: 12px;
            border: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s ease;
        }
        .registration-card:hover {
            transform: translateY(-5px);
        }
        .btn-register {
            padding: 0.75rem;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-register:hover {
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
        <section class="hero-inscription py-5">
            <div class="container text-center">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-4">
                    <ol class="breadcrumb animate__animated animate__fadeIn bg-transparent p-0">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-1"></i>Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Inscription</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary animate__animated animate__fadeInDown">Inscription</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp">Créez votre compte en quelques clics.</p>
                <a href="index.php" class="btn btn-outline-primary mt-3 animate__animated animate__fadeInUp">
                    <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </section>

        <!-- Formulaire d'inscription -->
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card registration-card mb-5">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <img src="../assets/img/signup.svg" alt="Inscription" class="img-fluid mb-3" width="120" height="120" loading="lazy">
                                <h2 class="h4 mb-2 fw-bold">Créer un compte</h2>
                                <p class="text-muted">Commencez votre expérience en quelques secondes</p>
                            </div>
                            
                            <form id="registrationForm" novalidate class="needs-validation">
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Nom Complet</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-user text-muted"></i></span>
                                        <input type="text" class="form-control" id="name" name="name" required placeholder="Jean Dupont">
                                    </div>
                                    <div class="invalid-feedback mt-1">Veuillez entrer votre nom complet.</div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" required placeholder="exemple@email.com">
                                    </div>
                                    <div class="invalid-feedback mt-1">Veuillez entrer une adresse email valide.</div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold">Mot de Passe</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                        <input type="password" class="form-control" id="password" name="password" required minlength="8" placeholder="••••••••">
                                    </div>
                                    <small class="text-muted d-block mt-1">Minimum 8 caractères.</small>
                                </div>
                                
                                <div class="mb-4">
                                    <label for="confirmPassword" class="form-label fw-semibold">Confirmer le Mot de Passe</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-lock text-muted"></i></span>
                                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required placeholder="••••••••">
                                    </div>
                                    <div class="invalid-feedback mt-1">Les mots de passe doivent correspondre.</div>
                                </div>
                                
                                <div class="mb-4 form-check">
                                    <input type="checkbox" class="form-check-input" id="terms" name="terms" required>
                                    <label class="form-check-label" for="terms">J'accepte les <a href="#" class="text-decoration-none">conditions générales</a></label>
                                    <div class="invalid-feedback">Vous devez accepter les conditions.</div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-register w-100 mb-3">
                                    <i class="fas fa-user-plus me-2"></i>S'inscrire
                                </button>
                                
                                <div id="formMessage" class="alert mt-3 mb-0 text-center d-none"></div>
                                
                                <div class="text-center mt-4 pt-3 border-top">
                                    <p class="mb-3">Vous avez déjà un compte?</p>
                                    <div class="d-flex justify-content-center gap-2">
                                        <a href="connexion.php" class="btn btn-outline-secondary btn-sm">
                                            <i class="fas fa-sign-in-alt me-1"></i>Connexion
                                        </a>
                                        <a href="index.php" class="btn btn-outline-dark btn-sm">
                                            <i class="fas fa-home me-1"></i>Accueil
                                        </a>
                                    </div>
                                </div>
                            </form>
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
                    loadScript('../assets/js/registration.js')
                ]);
            } catch (e) {
                console.error('Erreur de chargement des scripts:', e);
            }
        })();
    </script>
</body>
</html>