<?= $this->extend('layouts/default') ?>
<?= $this->section('main') ?>

<div class="vg-main-wrapper">
    <div class="page-home">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <h1 class="text-center mb-4">Mot de passe oublié ?</h1>
                    <p class=" text-center mb-4">Veuillez saisir votre adresse e-mail afin de recevoir un lien
                        pour
                        réinitialiser votre mot de passe.</p>

                    <form action="<?= site_url('login/reset_password'); ?>" method="post" class="vg-contact-form">

                        <!-- Champ email -->
                        <div class="form-group">
                            <label for="email">Adresse e-mail *</label>
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Entrez votre adresse e-mail" required>
                        </div>

                        <!-- Bouton de soumission -->
                        <button type="submit" class="btn btn-theme btn-block">Réinitialiser le mot de passe</button>
                    </form>

                    <hr>

                    <!-- Lien vers la page de connexion -->
                    <div class="text-center">
                        Retour à la <a href="<?= site_url('auth/login'); ?>">Page de connexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>