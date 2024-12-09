<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= isset($title) ? esc($title) : 'Titre par défaut' ?></title>
    <meta name="description" content="<?= isset($description) ? esc($description) : 'Description par défaut' ?>">
    <meta name="keywords" content="<?= isset($keywords) ? esc($keywords) : 'mot-clé1, mot-clé2' ?>">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Fichier CSS personnalisé -->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/style.css') ?>" />

</head>

<body class="theme-red">

    <!-- Back to top button -->
    <div class="btn-back_to_top">
        <span class="ti-arrow-up"></span>
    </div>

    <!-- Navbar -->
    <div class="topbar-nav fixed-top">
        <div class="brand">
            <img src="<?= base_url('assets/favicon.ico'); ?>" alt="Logo" width="30" height="30">
        </div>
        <h3 class="ml-1">Tunisie-immobiliers</h3>
        <button class="btn-fab toggle-menu mr-3">
            <span class="ti-menu"></span>
        </button>
    </div>

    <!-- Sidebar -->
    <div class="minibar">
        <div class="header">
            <div class="brand"></div>
        </div>

        <div class="content-menu">
            <ul class="main-menu">
                <li class="menu-item active">
                    <a href="/" class="menu-link">
                        <span class="icon fas fa-home"></span>
                        <span class="caption">Accueil</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#categories" class="menu-link">
                        <span class="icon fas fa-th-list"></span>
                        <span class="caption">Catégories</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#search" class="menu-link">
                        <span class="icon fas fa-search"></span>
                        <span class="caption">Recherche</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="<?=base_url('/auth/login')?>" class="menu-link">
                        <span class="icon fas fa-user"></span>
                        <span class="caption">Connexion</span>
                    </a>
                </li>
                <li class="menu-item">
                    <a href="#logout" class="menu-link">
                        <span class="icon fas fa-sign-out-alt"></span>
                        <span class="caption">Déconnexion</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container-fluid mt-5">
        <?= $this->renderSection('main') ?>
    </div>

    <!-- Footer -->
    <footer class="vg-footer">
        <div class="vg-main-wrapper">
            <h2 class="text-center">Tunisie-immobiliers.tn</h2>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 py-3">
                        <div class="footer-info">
                            <p>Où me trouver</p>
                            <hr class="divider">
                            <p class="fs-large fg-white">1600 Amphitheatre Parkway, Mountain View, California 94043, US
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="float-lg-right">
                            <p>Suivez-moi</p>
                            <hr class="divider">
                            <ul class="list-unstyled">
                                <li><a href="#">Instagram</a></li>
                                <li><a href="#">Facebook</a></li>
                                <li><a href="#">Twitter</a></li>
                                <li><a href="#">Youtube</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3 py-3">
                        <div class="float-lg-right">
                            <p>Contactez-moi</p>
                            <hr class="divider">
                            <ul class="list-unstyled">
                                <li>info@virtual.com</li>
                                <li>+8890234</li>
                                <li>+813023</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <p class="text-center mb-0 mt-2">Copyright <?= date('Y') ?>. Tous droits réservés | <a
                            href="https://ahmed-rabaii.tn">ahmed-rabaii.tn</a></p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts - Minified and Deferred -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy3hfF2R/pg6aS2Q2fZZk4/5B22e7yHXxJvFJk56" crossorigin="anonymous"
        defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"
        integrity="sha384-9/req7n71bmLrCxubXQlnOwE3dvw0uY6e8d7SJEQ/IBX40hfYPX43ZZH96pA0A1p" crossorigin="anonymous"
        defer></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-pzjw8f+ua7Kw1TIq0b5pDXO8MItp4kt+zxx8Adk6fD4zj5I52BhHToyqxM+x0yLz" crossorigin="anonymous"
        defer></script>


</body>

</html>