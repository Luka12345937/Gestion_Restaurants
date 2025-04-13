<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Réinitialisez votre mot de passe en toute sécurité. Entrez votre email pour recevoir un lien de réinitialisation.">
    <meta name="keywords" content="mot de passe oublié, réinitialisation, restaurant, sécurisé">
    <title>Mot de Passe Oublié - Gestion de Commandes Restaurant</title>
    
    <!-- Preload critical resources -->
    <link rel="preload" href="../assets/img/logo.svg" as="image">
    <link rel="preload" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" as="style">
    <link rel="preload" href="../assets/css/styles.css" as="style">
    
    <!-- Favicon optimized -->
    <link rel="icon" href="../assets/img/logo.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="../assets/img/logo-180x180.png">
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" 
          integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" 
          integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" 
          integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous">
    
    <!-- Critical CSS -->
    <style>
        .hero-password-reset { 
            min-height: 30vh; 
            display: flex; 
            align-items: center; 
            background-color: #f8f9fa;
        }
        .password-reset-card { 
            border-radius: 12px; 
            border: 1px solid rgba(0,0,0,0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }
        .password-reset-card:hover { 
            transform: translateY(-5px); 
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .btn-password-reset { 
            background-color: #0d6efd; 
            border: none; 
            transition: all 0.3s; 
            padding: 0.75rem;
        }
        .btn-password-reset:hover { 
            background-color: #0b5ed7; 
            transform: translateY(-2px); 
        }
        .breadcrumb {
            background-color: transparent;
            padding: 0.5rem 0;
        }
    </style>
    
    <!-- Deferred CSS -->
    <link rel="stylesheet" href="../assets/css/styles.css" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="../assets/css/styles.css"></noscript>
</head>
<body class="d-flex flex-column min-vh-100">
    <!-- Header -->
    <?php @include '../includes/header.php'; ?>

    <main class="flex-grow-1">
        <!-- Hero Section -->
        <section class="hero-password-reset py-5">
            <div class="container text-center">
                <nav aria-label="breadcrumb" class="d-flex justify-content-center mb-4">
                    <ol class="breadcrumb animate__animated animate__fadeIn">
                        <li class="breadcrumb-item"><a href="index.php" class="text-decoration-none"><i class="fas fa-home me-1"></i>Accueil</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mot de passe oublié</li>
                    </ol>
                </nav>
                <h1 class="display-5 fw-bold text-primary mt-3 animate__animated animate__fadeInDown">Mot de Passe Oublié</h1>
                <p class="lead text-muted animate__animated animate__fadeInUp">Entrez votre email pour recevoir un lien de réinitialisation.</p>
                <a href="index.php" class="btn btn-outline-primary mt-3 animate__animated animate__fadeInUp">
                    <i class="fas fa-arrow-left me-2"></i>Retour à l'accueil
                </a>
            </div>
        </section>

        <!-- Password Reset Form -->
        <section class="container my-5">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card password-reset-card shadow-sm mb-5">
                        <div class="card-body p-4 p-md-5">
                            <div class="text-center mb-4">
                                <img src="../assets/img/password-reset.svg" alt="Réinitialisation mot de passe" class="img-fluid mb-3" width="120" height="120" loading="lazy">
                                <h2 class="h4 mb-2 fw-bold">Réinitialiser le mot de passe</h2>
                                <p class="text-muted">Nous vous enverrons un lien sécurisé par email</p>
                            </div>
                            
                            <form id="passwordResetForm" novalidate>
                                <div class="mb-4">
                                    <label for="email" class="form-label fw-semibold">Adresse Email</label>
                                    <div class="input-group">
                                        <span class="input-group-text bg-light"><i class="fas fa-envelope text-muted"></i></span>
                                        <input type="email" class="form-control" id="email" name="email" required 
                                               placeholder="votre@email.com" autocomplete="email">
                                    </div>
                                    <div class="invalid-feedback mt-1">Veuillez entrer une adresse email valide.</div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary btn-password-reset w-100 fw-bold mb-3">
                                    <i class="fas fa-paper-plane me-2"></i>Envoyer le lien
                                </button>
                            </form>
                            
                            <div id="formMessage" class="alert mt-4 mb-0 text-center d-none"></div>
                            
                            <div class="text-center mt-4 pt-3 border-top">
                                <p class="mb-3">Vous vous souvenez de votre mot de passe?</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <a href="connexion.php" class="btn btn-outline-secondary btn-sm">
                                        <i class="fas fa-sign-in-alt me-1"></i>Connexion
                                    </a>
                                    <a href="index.php" class="btn btn-outline-dark btn-sm">
                                        <i class="fas fa-home me-1"></i>Accueil
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php @include '../includes/footer.php'; ?>

    <!-- Scripts loading optimization -->
    <script>
        (function() {
            // Function to load scripts safely
            function loadScript(src, integrity, crossorigin) {
                return new Promise(function(resolve, reject) {
                    var script = document.createElement('script');
                    script.src = src;
                    if (integrity) script.integrity = integrity;
                    if (crossorigin) script.crossOrigin = crossorigin;
                    script.defer = true;
                    script.onload = resolve;
                    script.onerror = function() {
                        console.error('Failed to load script: ' + src);
                        reject();
                    };
                    document.body.appendChild(script);
                });
            }

            // Load essential scripts
            try {
                Promise.all([
                    loadScript('https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', 
                             'sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3', 'anonymous'),
                    loadScript('https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js', 
                             'sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS', 'anonymous'),
                    loadScript('../assets/js/password-reset.js')
                ]);
            } catch (e) {
                console.error('Script loading error:', e);
            }
        })();
    </script>
</body>
</html>