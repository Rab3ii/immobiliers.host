<?= $this->extend('layouts/default') ?>

<?= $this->section('main') ?>

<div class="vg-main-wrapper">
    <!-- Bannière d'accueil -->
    <div class="hero-banner">
        <h1>Bienvenue sur le meilleur site de petites annonces immobilières</h1>
        <p>Découvrez des offres exceptionnelles et trouvez votre bien idéal dès aujourd'hui.</p>
        <section class="search-sec">
            <div class="container-fluid">
                <form action="#" method="post" novalidate="novalidate">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" id="exampleFormControlSelect1">
                                        <option>Sélectionner le type de bien</option>
                                        <option>Appartement</option>
                                        <option>Maison</option>
                                        <option>Terrain</option>
                                        <option>Bureau</option>
                                        <option>Commerce</option>
                                        <option>Garage</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <select class="form-control search-slt" id="regionSelect">
                                        <option selected disabled>Où cherchez-vous ?</option>
                                        <option id="tunis">Tunis</option>
                                        <option id="ariana">Ariana</option>
                                        <option id="ben-arous">Ben Arous</option>
                                        <option id="manouba">Manouba</option>
                                        <option id="nabeul">Nabeul</option>
                                        <option id="hammamet">Hammamet</option>
                                        <option id="zaghouan">Zaghouan</option>
                                        <option id="bizerte">Bizerte</option>
                                        <option id="beja">Beja</option>
                                        <option id="jendouba">Jendouba</option>
                                        <option id="siliana">Siliana</option>
                                        <option id="le-kef">Le Kef</option>
                                        <option id="sousse">Sousse</option>
                                        <option id="monastir">Monastir</option>
                                        <option id="mahdia">Mahdia</option>
                                        <option id="sfax">Sfax</option>
                                        <option id="kairouan">Kairouan</option>
                                        <option id="kasserine">Kasserine</option>
                                        <option id="sidi-bouzid">Sidi Bouzid</option>
                                        <option id="gabes">Gabes</option>
                                        <option id="medenine">Medenine</option>
                                        <option id="tataouine">Tataouine</option>
                                        <option id="gafsa">Gafsa</option>
                                        <option id="tozeur">Tozeur</option>
                                        <option id="kebili">Kebili</option>
                                    </select>
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <input type="text" class="form-control search-slt"
                                        placeholder="Ville de destination">
                                </div>

                                <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                    <button type="button" class="btn btn-danger wrn-btn">Rechercher</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

    </div>

    <div class="page-home">
        <div class="content">
            <div class="row">
                <!-- Boucle pour afficher 12 annonces -->
                <?php for ($i = 0; $i < 18; $i++): ?>
                <!-- Limité à 12 annonces pour la pagination -->
                <div class="col-6 col-sm-6 col-md-4 col-lg-3 col-xl-2 mb-4 p-2">
                    <div class="card shadow-sm">
                        <img src="https://via.placeholder.com/180x180" class="card-img-top" alt="Image de l'annonce">
                        <div class="card-body">
                            <h5 class="card-title">Titre de l'annonce</h5>
                            <span class="card-location p-1">Localisation</span>
                            <span class="badge badge-category">Catégorie</span>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            </div>

            <!-- Pagination -->
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Précédent</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Suivant</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?= $this->endSection() ?>