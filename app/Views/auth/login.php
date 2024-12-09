<?= $this->extend('layouts/default') ?>

<?= $this->section('main') ?>
<div class="vg-main-wrapper">
    <div class="page-home">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4">
                <h1 class="text-center mb-4">Connexion</h1>
                <form action="<?= base_url('login/process'); ?>" method="post" class="vg-contact-form">

                    <!-- Champ Email -->
                    <div class="form-group">
                        <label for="Email">Email *</label>
                        <input type="email" class="form-control" id="Email" name="email"
                            placeholder="Entrez votre email" required>
                    </div>

                    <!-- Champ Mot de passe -->
                    <div class="form-group">
                        <label for="password">Mot de passe *</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Entrez votre mot de passe" required>
                    </div>

                    <!-- Lien mot de passe oublié -->
                    <div class="form-group text-right">
                        <a href="<?= base_url('auth/forgot_password'); ?>" class="small">Mot de passe oublié ?</a>
                    </div>

                    <!-- Bouton de soumission -->
                    <button type="submit" class="btn btn-theme btn-block">Se connecter</button>

                </form>

                <!-- Lien vers la création de compte -->
                <hr>
                <div class="text-center">
                    Vous n'avez pas de compte ? <a href="<?= base_url('auth/register'); ?>">Créer un compte</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection() ?>