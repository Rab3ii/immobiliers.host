<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');


// Authentification
$routes->get('/auth', 'Auth\Login::index');  
$routes->get('/auth/login', 'Auth\Login::index');         // Afficher le formulaire de connexion
$routes->post('/auth/login/authenticate', 'Auth\Login::authenticate');  // Soumettre le formulaire de connexion
$routes->get('/auth/logout', 'Auth\Login::logout');       // Déconnexion
$routes->get('/auth/register', 'Auth\Register::index');   // Afficher le formulaire d'inscription
$routes->post('/auth/register/store', 'Auth\Register::store');  // Soumettre le formulaire d'inscription
$routes->get('/auth/forgot_password', 'Auth\Forgot_Password::index');   // Réinitialisation du mot de passe
$routes->get('/auth/forgot_password/reset', 'Auth\Forgot_Password::reset');  // Soumettre la réinitialisation
$routes->get('/auth/activate/(:segment)', 'Auth\Activation::index/$1'); // Activer le compte avec un code d'activation



// Utilisateur
$routes->get('/user/profile', 'User\Profile::index');           // Afficher le profil utilisateur
$routes->post('/user/profile/update', 'User\Profile::update');   // Mettre à jour le profil utilisateur
$routes->get('/user/favorites', 'User\Favorites::index');        // Afficher les annonces favorites
$routes->get('/user/mes-annonces', 'User\MesAnnonces::index');   // Afficher les annonces de l'utilisateur
$routes->get('/user/settings', 'User\Settings::index');          // Afficher les paramètres utilisateur
$routes->post('/user/settings/update', 'User\Settings::update'); // Mettre à jour les paramètres utilisateur


// Annonces
$routes->get('/annonces/statistics', 'Annonces\Statistics::index');    // Statistiques des annonces
$routes->get('/annonces/details/(:segment)', 'Annonces\Details::index/$1'); // Détails d'une annonce
$routes->get('/annonces/create', 'Annonces\Create::index');            // Formulaire de création d'annonce
$routes->post('/annonces/create/store', 'Annonces\Create::store');      // Soumettre la création d'une annonce
$routes->get('/annonces/edit/(:segment)', 'Annonces\Edit::index/$1');   // Formulaire de modification d'une annonce
$routes->post('/annonces/edit/(:segment)', 'Annonces\Edit::update/$1'); // Soumettre la modification
$routes->get('/annonces/images/(:segment)', 'Annonces\Images::index/$1'); // Gestion des images des annonces
$routes->post('/annonces/images/(:segment)', 'Annonces\Images::upload/$1'); // Télécharger une image pour l'annonce
$routes->get('/annonces/validation/(:segment)', 'Annonces\Validation::index/$1'); // Validation des annonces


// Admin
$routes->get('/admin/dashboard', 'Admin\Dashboard::index');            // Tableau de bord de l'administrateur
$routes->get('/admin/users', 'Admin\Users::index');                    // Gestion des utilisateurs
$routes->get('/admin/ads', 'Admin\Ads::index');                        // Gestion des annonces
$routes->get('/admin/premium-ads', 'Admin\PremiumAds::index');         // Gestion des annonces premium
$routes->get('/admin/categories', 'Admin\Categories::index');          // Gestion des catégories
$routes->get('/admin/reports', 'Admin\Reports::index');                // Signalements et statistiques
$routes->get('/admin/transactions', 'Admin\Transactions::index');      // Gestion des paiements et abonnements
$routes->get('/admin/audit-logs', 'Admin\AuditLogs::index');           // Suivi des actions
$routes->get('/admin/messages', 'Admin\Messages::index');              // Gestion des messages internes


// Pages
$routes->get('/', 'Pages\Home::index');               // Page d'accueil
$routes->get('/about', 'Pages\About::index');         // À propos
$routes->get('/contact', 'Pages\Contact::index');     // Formulaire de contact
$routes->get('/terms', 'Pages\Terms::index');         // Conditions générales d'utilisation
$routes->get('/privacy', 'Pages\Privacy::index');     // Politique de confidentialité


// Recherche
$routes->get('/search', 'Search\Search::index');                  // Recherche générale
$routes->get('/search/filters', 'Search\Filters::index');         // Filtres de recherche avancée
$routes->get('/search/results', 'Search\SearchResults::index');  // Résultats de recherche
$routes->get('/search/autocomplete', 'Search\Autocomplete::index'); // Autocomplétion de la recherche


// Aide
$routes->get('/help', 'Help\Index::index');             // Page d'accueil de l'aide
$routes->get('/help/faq', 'Help\Faq::index');            // FAQ
$routes->get('/help/guide', 'Help\Guide::index');        // Guide de l'utilisateur
$routes->get('/help/ticket-support', 'Help\TicketSupport::index');  // Système de tickets de support (optionnel)