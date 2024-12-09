<?= $this->extend('layouts/default') ?>
<?= $this->section('main') ?>

<div class="vg-main-wrapper mt-0">
    <div class="page-home">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h1 class="text-center mb-4">Créer un compte</h1>
                <form action="<?= site_url('auth/Register/save'); ?>" method="post">
                    <!-- Champ Nom -->
                    <div class="form-group">
                        <label for="nom">Nom *</label>
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom"
                            required>
                    </div>

                    <!-- Champ E-mail -->
                    <div class="form-group">
                        <label for="email">E-mail *</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Entrez votre email" required>
                    </div>

                    <!-- Champ Mot de passe -->
                    <div class="form-group">
                        <label for="password">Mot de passe *</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Créer un mot de passe" required>
                    </div>

                    <!-- Champ Confirmer le mot de passe -->
                    <div class="form-group">
                        <label for="confirmer_password">Confirmer le mot de passe *</label>
                        <input type="password" class="form-control" id="confirmer_password" name="confirmer_password"
                            placeholder="Confirmez votre mot de passe" required>
                    </div>

                    <!-- Case à cocher des conditions -->
                    <div class="form-check mb-4">
                        <input type="checkbox" class="form-check-input" id="conditions" required>
                        <label class="form-check-label small" for="conditions">
                            J’ai lu et j’accepte les <a href="#">conditions d’utilisation</a> et je donne mon accord au
                            traitement de mes données personnelles.
                        </label>
                    </div>

                    <!-- Bouton de soumission -->
                    <button type="submit" class="btn btn-theme btn-block">Créer un compte</button>
                </form>

                <!-- Lien de connexion -->
                <p class="mt-3 text-center">Vous avez déjà un compte? <a href="<?= site_url('auth/login'); ?>">Se
                        connecter</a></p>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>